<template>
    <header>
        <slot name="header"><Header></Header></slot>
    </header>
    <main><slot name="main">Main</slot></main>
    <footer><slot name="footer">Footer</slot></footer>
</template>

<script>
import Header from "~/Components/Header";

export default {
    name: "App",
    components: {
        Header
    }
}
</script>

<style scoped>

</style>
