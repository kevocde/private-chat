<template>
    <div class="lateral-nav-component-container">
        <div class="logo-container">
            <h1 class="logo-container__icon"><i class="w-12 h-12" data-feather="message-circle"></i></h1>
            <h1 class="logo-container__text">Private Chat</h1>
        </div>
        <div class="nav-container">
            <form action="#" class="search-form">
                <div class="search-form__control">
                    <div class="search-form__control__icon"><i data-feather="search"></i></div>
                    <input type="text" class="search-form__control__input">
                </div>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: "LateralNav"
}
</script>

<style scoped lang="postcss">
    .logo-container {
        @apply w-full inline-flex justify-center items-center bg-indigo-400 text-center max-h-20 p-2;
    }

    .logo-container__icon {
        @apply flex justify-center text-white mr-2;
    }

    .logo-container__text {
        @apply text-xl text-center text-white;
    }

    .nav-container {
        @apply w-full py-4;
    }

    .nav-container .search-form {
        @apply w-full flex justify-center;
    }

    .search-form__control {
        @apply px-2 inline-flex justify-center items-center;
    }
</style>
