<template>
    <div class="container mx-auto p-4">
        <header><slot name="header"></slot></header>
        <main><slot name="main"></slot></main>
        <footer><slot name="footer"></slot></footer>
    </div>
</template>

<script>
export default {
    name: "MainLayout"
}
</script>

<style scoped>

</style>
