<template>
    <div class="min-h-screen grid grid-cols-6">
        <div class="col-span-1 lateral-nav-container">
            <slot name="lateral-nav">
                <LateralNav></LateralNav>
            </slot>
        </div>
        <div class="col-span-5 bg-gray-100 main-container">
            <slot name="header">
                <Header></Header>
            </slot>
            <slot name="main">Main</slot>
        </div>
    </div>
</template>

<script>
import Header from "~/Components/Header";
import LateralNav from "~/Components/LateralNav";

export default {
    name: "App",
    components: {
        Header,
        LateralNav
    }
}
</script>

<style scoped>
    .lateral-nav-container {
        z-index: 2;
        box-shadow: .1rem 0 .2rem rgba(0, 0, 0, .1);
    }
</style>
