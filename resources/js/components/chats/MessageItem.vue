<template>
    <div class="self">
        <strong class="user">{{message.user.firstname}}</strong>
        <p class="body">{{message.message}}</p>
    </div>
</template>

<script>
    export default {
        props: ['message'],

        mounted() {
        }
    }
</script>

<style>

    .body {
        margin-bottom: 0;
        white-space: pre-wrap;
    }

    .user {
        font-weight: 800;
    }

    .self {
        background-color: #f0f0f0;
        padding: 10px;
        padding-top: 2px;
        padding-bottom: 2px;
        margin-top: 5px;
        margin-bottom: 5px;
    }
</style>
