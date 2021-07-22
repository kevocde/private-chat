<template>
    <div class="login w-screen flex justify-center">
        <div class="login__container bg-white 2xl:w-4/12 xl:w-6/12 lg:w-8/12 md:w-10/12 w-full px-2 py-5 rounded-md">
            <div class="text-center login__container__header">
                <h1 class="text-3xl text-gray-600">{{ appName }}</h1>
                <p class="text-gray-400">Scan your QR code or create new session</p>
            </div>
            <div class="login_container__errors flex justify-center">
                <ErrorList :errors="errors" class="w-3/4"></ErrorList>
            </div>
            <div class="login__container__qrreader flex justify-center my-6">
                <div class="w-3/4 border-8 border-indigo-300 rounded-md">
                    <qrcode-stream :camera="cameraStatus" @init="scanInit" @decode="scanDecode"></qrcode-stream>
                </div>
            </div>
            <div class="login__container__session flex justify-center">
                <form class="w-3/4" @submit.prevent="createSession">
                    <div class="w-full">
                        <input type="text" placeholder="Your username:" class="w-full rounded-md p-2 text-md font-semibold placeholder-gray-300 text-gray-400 border-2 border-gray-200 mb-2 focus:border-indigo-300 focus:ring-0" v-model="form.username">
                    </div>
                    <button type="submit" class="w-full bg-indigo-400 rounded-md p-2 text-sm text-indigo-50 font-semibold hover:bg-indigo-500">CREATE SESSION</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import { QrcodeStream } from 'vue3-qrcode-reader'
import { Inertia } from '@inertiajs/inertia'

import ErrorList from "~/Components/ErrorList";

export default {
    props: {
        appName: String,
        errors: Object
    },
    data() {
        return {
            form: {
                token: null,
                newSession: false,
                username: null
            },
            cameraStatus: 'auto'
        }
    },
    methods: {
        submit() {
            this.$inertia.post(route('security.doLogin'), this.form, {
                onError: () => {
                    this.enableCamera()
                }
            })
        },
        async scanInit(promise) {
            await promise
        },
        async scanDecode(value) {
            this.disableCamera()
            this.form = {
                ...this.form,
                token: value,
                newSession: false,
                username: null
            }

            this.submit()
        },
        createSession() {
            this.form = {
                ...this.form,
                token: null,
                newSession: true
            }

            this.submit()
        },
        disableCamera() {
            this.cameraStatus = 'off'
        },
        enableCamera() {
            new Promise(resolve => {
                window.setTimeout(() => {
                    this.cameraStatus = 'auto'
                    resolve()
                }, 500)
            })
        }
    },
    components: {
        QrcodeStream,
        ErrorList
    }
}
</script>

<style scoped>

</style>
