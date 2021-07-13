<template>
    <MainLayout>
        <template v-slot:main>
            <div class="flex justify-center">
                <div class="w-1/2 col-span-4 bg-gray-50 p-5 rounded-md shadow-md">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cum delectus deserunt doloribus eos est eveniet, illum incidunt iure provident, quam, quo ratione rem tempore tenetur ut veritatis? Dicta, labore.
                </div>
            </div>
        </template>
    </MainLayout>
</template>

<script>
import MainLayout from "../../Layouts/MainLayout";

export default {
    name: "Init",
    components: {
        MainLayout
    }
}
</script>

<style scoped>

</style>
