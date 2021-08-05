<template>
    <div class="header-component-container">
        <nav class="header__navigator">
            <ul class="header__navigator__list">
                <li class="header__navigator__list__item active"><a href="">Dashboard</a></li>
                <li class="header__navigator__list__item"><a href="">Configurations</a></li>
            </ul>
        </nav>
    </div>
</template>

<script>
export default {
    name: "Header"
}
</script>

<style lang="postcss" scoped>
    .header-component-container {
        @apply bg-white h-16;
    }

    .header__navigator {
        @apply col-span-4 h-full px-4;
    }

    .header__navigator__list {
        @apply flex h-full;
    }

    .header__navigator__list__item {
        @apply flex items-center px-4 transition transition duration-200 ease-in-out font-semibold text-gray-500 border-b-2 border-transparent hover:border-indigo-500;
    }

    .header__navigator__list__item.active {
        @apply border-b-2 border-indigo-500;
    }
</style>
