<?php

namespace App\Http\Controllers;


use App\Models\User;
use Exception;
use Illuminate\Http\Client\HttpClientException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use Inertia\Response;

final class SecurityController extends Controller
{

    /**
     * @return RedirectResponse|Response
     */
    public function login()
    {
        Inertia::setRootView('layouts.login');

        if (! Auth::guest()) return redirect()->route('dashboard');
        else {
            return Inertia::render('Auth/Login', [
                'appName' => config('app.name')
            ]);
        }
    }

    /**
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function doLogin(Request $request)
    {
        Inertia::setRootView('layouts.login');

        try {
            $request->validate([
                'newSession' => 'required',
                'username' => [
                    Rule::requiredIf($request->input('newSession', false)),
                    Rule::unique(User::class, 'username')
                ],
                'token' => Rule::requiredIf(! $request->input('newSession', false))
            ]);

            if ($request->input('newSession', false)) $user = User::createNewGuest($request->input('username'));
            else {
                $user = User::where('token', $request->input('token'))->first();
                if (! $user) throw new HttpClientException('Invalid QR code');
            }

            Auth::login($user);

            return redirect()->route('dashboard');
        } catch (Exception $ex) {
            return Inertia::render('Auth/Login', [
                'appName' => config('app.name'),
                'errors' => ($ex instanceof ValidationException) ? $ex->validator->getMessageBag() : ['default' => $ex->getMessage()]
            ]);
        }
    }
}
