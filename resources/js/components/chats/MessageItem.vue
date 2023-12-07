<template>
    <div>
        <!-- <strong class="user">{{message.user.firstname}} </strong> -->
        <p class="body">{{message.message}}</p>
        <span style="font-size: 10px;">{{ message.created_date }}</span>
    </div>
</template>

<script>
    export default {
        props: ['message', "user"],

        mounted() {
            console.log(this.currentUser);
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


</style>
