<template>
    <div class="header-component-container">
        <nav class="header__navigator">
            <ul class="header__navigator__list">
                <li class="header__navigator__list__item active"><a href="" class="text-gray-600">Dashboard</a></li>
                <li class="header__navigator__list__item"><a href="" class="text-gray-600">Configurations</a></li>
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

        .header-component-container .header__navigator {
            @apply col-span-4 h-full px-4;
        }

            .header-component-container .header__navigator .header__navigator__list {
                @apply flex h-full;
            }

                .header-component-container .header__navigator .header__navigator__list .header__navigator__list__item {
                    @apply flex items-center px-4 transition transition duration-500 ease-in-out hover:bg-indigo-200;
                }

                .header-component-container .header__navigator .header__navigator__list .header__navigator__list__item.active {
                    @apply border-b-2 border-indigo-500;
                }
</style>
