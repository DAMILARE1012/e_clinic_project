<template>
    <div>
        {{message.user.firstname}}: {{message.message}}
    </div>
</template>

<script>
    export default {
        props: ['message'],

        mounted() {
        }
    }
</script>
