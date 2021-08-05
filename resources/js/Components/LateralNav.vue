<template>
    <div class="lateral-nav-component-container">
        <div class="logo-container">
            <h1 class="logo-container__icon"><i class="w-12 h-12" data-feather="message-circle"></i></h1>
            <h1 class="logo-container__text">Private Chat</h1>
        </div>
        <div class="nav-container">
            <form action="#" class="search-form">
                <div class="search-form__control">
                    <input type="text" class="search-form__control__input" placeholder="Search by name">
                    <div class="search-form__control__icon"><i data-feather="search"></i></div>
                </div>
            </form>
        </div>
        <div class="chat-container">
            <ul class="chat-list">
                <li class="chat-list__item">
                    <div class="chat-list__item__profile" style="background-image: url('https://fakeimg.pl/250x250/')"></div>
                    <div class="chat-list__item__resume">
                        <h3 class="chat-list__item__resume__title">Jobs West</h3>
                        <p class="chat-list__item__resume__message">Ross C. Aenean massa</p>
                    </div>
                    <div class="chat-list__item__details">
                        <span class="chat-list__item__details__hour">17:04</span>
                        <span class="chat-list__item__details__message-count">2</span>
                    </div>
                </li>
            </ul>
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
        @apply w-full inline-flex justify-center items-center bg-indigo-500 text-center max-h-20 p-2;
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

    .search-form {
        @apply w-full flex justify-center;
    }

    .search-form__control {
        @apply w-full inline-flex justify-between items-center p-5 border-b-2;
    }

    .search-form__control__input {
        @apply flex-1 mr-4 border-0 focus:ring-0 font-semibold text-gray-500 placeholder-gray-400;
    }

    .search-form__control__icon {
        @apply text-center text-gray-400;
    }

    .chat-container {
        @apply w-full;
    }

    .chat-list {
        @apply w-full px-3;
    }

    .chat-list__item {
        @apply flex justify-around items-center cursor-pointer bg-white p-3 rounded-md hover:bg-gray-100;
    }

    .chat-list__item__profile {
        @apply w-10 h-10 rounded-full;
    }

    .chat-list__item__resume {
    }

    .chat-list__item__resume__title {
        @apply font-bold text-sm text-gray-700 w-full;
    }

    .chat-list__item__resume__message {
        @apply text-xs text-gray-500 w-full;
    }

    .chat-list__item__details {
        @apply flex-row justify-center items-center;
    }

    .chat-list__item__details__hour {
        @apply block text-xs text-gray-400;
    }

    .chat-list__item__details__message-count {
        @apply block bg-red-500 text-red-50 p-1 w-5 h-5 rounded-full text-center font-semibold;
        font-size: 0.6rem;
    }
</style>
