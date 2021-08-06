<template>
    <div class="profile">
        <div class="profile__image" style="background-image: url('https://fakeimg.pl/250x250/')"></div>
        <span class="profile__name">Kevin Guzmán</span>
        <span class="profile__toggle"><i class="w-5 h-5" data-feather="chevron-down"></i></span>
    </div>
</template>

<script>
export default {
    name: "Profile"
}
</script>

<style scoped lang="postcss">
    .profile {
        @apply px-2 flex justify-center items-center cursor-pointer transition duration-200 ease-in-out border-b-2 border-transparent;
    }

    .profile:hover {
        @apply border-indigo-500;
    }

    .profile__image {
        @apply w-10 h-10 rounded-full;
    }

    .profile__name {
        @apply text-xs text-gray-500 font-semibold px-2;
    }

    .profile__toggle {
        @apply text-gray-500;
    }
</style>
