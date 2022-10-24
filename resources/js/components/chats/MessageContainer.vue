<template>
    <div>
        <div v-for="(message, index) in messages" :key="index">
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
