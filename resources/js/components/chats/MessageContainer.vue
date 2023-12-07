<template>
    <div class="message-area">
        <div class="message" v-for="(message, index) in messages" :key="index">
            <MessageItem :message="message" :user="user" v-bind:class="{'self': user.id == message.user.id, 'notSelf': user.id != message.user.id,  }"/>
        </div>
    </div>
</template>

<script>
import MessageItem from './MessageItem.vue';
    export default {
    props: ["messages","user"],
    mounted() {
    },
    components: { MessageItem },

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

    .self {
        background-color: #5bc0de;
        color: #ffff;
        padding: 10px;
        padding-top:6px;
        padding-bottom: 2px;
        margin-top: 5px;
        margin-bottom: 5px;
        text-align: right;
        border-radius: 5px;
    }

    .notSelf {
        background-color: #3e5c74;
        color: #ffff;
        padding: 10px;
        padding-top: 2px;
        padding-bottom: 2px;
        margin-top: 5px;
        margin-bottom: 5px;
        border-radius: 5px;
    }



</style>
