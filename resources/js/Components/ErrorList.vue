<template>
    <div class="errorlist">
        <div v-if="errors" v-for="errorKey in Object.keys(errors)" class="errorlist__item bg-red-400 text-red-50 px-5 py-2 text-md rounded-md my-1">
            {{ (Array.isArray(errors[errorKey]) ? errors[errorKey].join(', ') : errors[errorKey]) }}
        </div>
    </div>
</template>

<script>
export default {
    name: "ErrorList",
    props: {
        errors: Object
    }
}
</script>

<style scoped>

</style>
