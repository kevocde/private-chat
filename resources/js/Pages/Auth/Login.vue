<template>
    <div class="min-h-screen flex justify-center items-center">
        <div class="bg-white w-auto h-auto rounded-md shadow px-2 py-5">
            <div class="login__header text-center">
                <h1 class="text-3xl text-gray-500 mb-2">Private Chat</h1>
                <p class="text-gray-400">Please scan your QR code to restore the session or init a new session</p>
            </div>
            <div class="login__reader flex justify-center p-5">
                <div class="login__reader__component w-3/4 rounded-md overflow-hidden border-4 border-indigo-300">
                    <qrcode-stream :camera="cameraStatus" @init="qrInit" @decode="qrDecoded"></qrcode-stream>
                </div>
            </div>
            <div class="login__controls text-center">
                <button class="bg-indigo-500 text-center py-3 px-4 rounded-md text-sm text-white hover:bg-indigo-600">New Session</button>
            </div>
        </div>
    </div>
</template>

<script>
    import { QrcodeStream } from 'vue3-qrcode-reader'

    export default {
        components: {
            QrcodeStream
        },

        props: {
            canResetPassword: Boolean,
            status: String
        },

        data() {
            return {
                form: this.$inertia.form({
                    email: '',
                    password: '',
                    remember: false
                }),
                cameraStatus: 'auto'
            }
        },

        methods: {
            submit() {
                this.form
                    .transform(data => ({
                        ... data,
                        remember: this.form.remember ? 'on' : ''
                    }))
                    .post(this.route('login'), {
                        onFinish: () => this.form.reset('password'),
                    })
            },
            /**
             * Método para el control del lector QR
             */
            async qrInit(promise) {
                await promise
            },
            async qrDecoded(value) {
                this.cameraStatus = 'off'
                console.log(value)
                window.setTimeout(() => { this.cameraStatus = 'auto' }, 500)
            }
        }
    }
</script>
