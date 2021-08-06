<template>
    <div class="nv">
        <span class="nv_toggle"><i class="w-5 h-5" data-feather="bell"></i></span>
    </div>
</template>

<script>
export default {
    name: "NotificationViewer"
}
</script>

<style scoped lang="postcss">
    .nv {
        @apply flex justify-center items-center text-gray-500 px-4 cursor-pointer transition duration-200 ease-in-out border-b-2 border-transparent;
    }

    .nv:hover {
        @apply border-indigo-500;
    }
</style>
