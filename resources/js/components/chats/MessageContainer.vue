<template>
    <div class="message-area">
        <div class="message" v-for="(message, index) in messages" :key="index">
            <MessageItem :message="message"/>
        </div>
    </div>
</template>

<script>
import MessageItem from './MessageItem.vue';
    export default {
    props: ["messages"],
    mounted() {
    },
    components: { MessageItem }
}
</script>

<style>
    .message-area {
        height: 400px;
        max-height: 350px;
        overflow-y: scroll;
        padding: 15px;
        border-bottom: 1px solid #eee;
        margin-bottom: 10px;

        display: flex;
        flex-direction: column-reverse;

        background-color: rgb(255, 255, 255);
    }


</style>