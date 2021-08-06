<template>
    <form action="#" class="search-form">
        <div class="search-form__control">
            <input type="text" class="search-form__control__input" placeholder="Search by name">
            <div class="search-form__control__icon"><i data-feather="search"></i></div>
        </div>
    </form>
</template>

<script>
export default {
    name: "SearchChat"
}
</script>

<style scoped lang="postcss">
    .search-form {
        @apply w-full flex justify-center py-4;
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
</style>
