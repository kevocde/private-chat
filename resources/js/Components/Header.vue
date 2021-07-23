<template>
    <div class="header flex justify-between shadow-x-sm">
        <div class="header__logo w-1/5 bg-indigo-500 px-2 py-3">
            <h1 class="text-2xl text-indigo-50 text-center">Private Chat</h1>
        </div>
        <nav class="header__navigator w-3/5 px-2">
            <ul class="header__navigator__list flex h-full">
                <li class="header__navigator__list__item px-4 flex items-center active"><a href="" class="text-gray-600">Dashboard</a></li>
                <li class="header__navigator__list__item px-4 flex items-center"><a href="" class="text-gray-600">Configurations</a></li>
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

<style lang="postcss">
    .header {
        box-shadow: 1rem 0 .4rem rgba(0, 0, 0, .2);
    }

    .header .header__navigator .header__navigator__list .header__navigator__list__item.active,
        .header .header__navigator .header__navigator__list .header__navigator__list__item:hover {
        @apply border-b-2 border-indigo-500;
    }
</style>
