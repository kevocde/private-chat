<template>
    <div class="header flex justify-between shadow-x-sm">
        <div class="header__logo w-1/5 bg-indigo-500 px-2 py-3">
            <h1 class="text-2xl text-indigo-100 text-center">Private Chat</h1>
        </div>
        <nav class="header__navigator w-3/5">
            <ul class="header__navigator__list flex h-full">
                <li class="header__navigator__list__item px-4 flex items-center"><a href="" class="text-gray-600">Dashboard</a></li>
            </ul>
        </nav>
        <div class="header__profile w-1/5">Profile</div>
    </div>
</template>

<script>
export default {
    name: "Header"
}
</script>

<style>
    .header {
        box-shadow: 1rem 0 .4rem rgba(0, 0, 0, .2);
    }

    .header .header__navigator .header__navigator__list .header__navigator__list__item.active {
        @apply bg-indigo-400;
    }
</style>
