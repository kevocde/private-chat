<?php

namespace App\Http\Controllers;


use Inertia\Inertia;
use Inertia\Response;

final class DashboardController extends Controller
{
    public function dashboard(): Response
    {
        return Inertia::render('Dashboard');
    }
}
