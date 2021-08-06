<template>
    <div class="header-component-container">
        <nav class="header__navigator">
            <ul class="header__navigator__list">
                <li class="header__navigator__list__item active"><a href="">Dashboard</a></li>
                <li class="header__navigator__list__item"><a href="">Configurations</a></li>
            </ul>
        </nav>
        <NotificationViewer />
        <Profile />
    </div>
</template>

<script>
import Profile from "~/Components/Profile";
import NotificationViewer from "~/Components/NotificationViewer";

export default {
    name: "Header",
    components: {Profile, NotificationViewer}
}
</script>

<style lang="postcss" scoped>
    .header-component-container {
        @apply bg-white h-16 flex justify-between;
    }

    .header__navigator {
        @apply h-full px-4 flex-1;
    }

    .header__navigator__list {
        @apply flex h-full;
    }

    .header__navigator__list__item {
        @apply flex items-center px-4 transition duration-200 ease-in-out font-semibold text-sm text-gray-500 border-b-2 border-transparent hover:border-indigo-500;
    }

    .header__navigator__list__item.active {
        @apply border-b-2 border-indigo-500;
    }
</style>
