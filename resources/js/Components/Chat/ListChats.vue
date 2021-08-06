<template>
    <div class="chat-container">
        <ul class="chat-list">
            <li class="chat-list__item active">
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
            <li class="chat-list__item">
                <div class="chat-list__item__profile" style="background-image: url('https://fakeimg.pl/250x250/')"></div>
                <div class="chat-list__item__resume">
                    <h3 class="chat-list__item__resume__title">Freddy Lopez</h3>
                    <p class="chat-list__item__resume__message">Estoy esperandote en el CC ...</p>
                </div>
                <div class="chat-list__item__details">
                    <span class="chat-list__item__details__hour">17:08</span>
                    <span class="chat-list__item__details__message-count">10</span>
                </div>
            </li>
            <li class="chat-list__item">
                <div class="chat-list__item__profile" style="background-image: url('https://fakeimg.pl/250x250/')"></div>
                <div class="chat-list__item__resume">
                    <h3 class="chat-list__item__resume__title">Dayana Ramirez</h3>
                    <p class="chat-list__item__resume__message">Te odio maldito 33</p>
                </div>
                <div class="chat-list__item__details">
                    <span class="chat-list__item__details__hour">12:30</span>
                    <span class="chat-list__item__details__message-count">1</span>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "ListChats"
}
</script>

<style scoped lang="postcss">
    .chat-container {
        @apply w-full;
    }

    .chat-list {
        @apply w-full px-3;
    }

    .chat-list__item {
        @apply flex justify-around items-center cursor-pointer bg-white p-3 transition duration-200 ease-in-out h-20 max-h-20 border-b-2 border-gray-200;
    }

    .chat-list__item:hover, .chat-list__item.active {
        @apply bg-gray-100 border-transparent rounded-md;
    }

    .chat-list__item__profile {
        @apply w-10 h-10 rounded-full;
    }

    .chat-list__item__resume {
        @apply w-2/4;
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
        @apply block text-xs text-gray-400 w-full mb-2;
    }

    .chat-list__item__details__message-count {
        @apply block bg-red-500 text-red-50 rounded-full text-center font-semibold w-full;
        font-size: 0.6rem;
        padding: .2rem;
    }
</style>
