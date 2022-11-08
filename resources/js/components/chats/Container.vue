<template>
    <div class="message-container">
        <MessageContainer :messages="messages" />
        <InputMessage :room="currentRoom" v-on:messageSent="getMessages()" />
    </div>
</template>

<script>
import MessageContainer from "./MessageContainer.vue";
import InputMessage from "./InputMessage.vue";
import axios from "axios";
import ChatRoomSelection from "./ChatRoomSelection.vue";
    export default {
    
    props: ['chatroom'],

    components: {
    MessageContainer,
    InputMessage,
    ChatRoomSelection
    },

    data: function (){
        return {
            chatRooms: [],
            currentRoom: [],
            messages: [],
        }
    },

    methods: {
        connect(){
            if(this.currentRoom.id){
                let vm = this;
                this.getMessages();
                window.Echo.private("chat."+this.currentRoom.id).listen('.message.new', e => {
                    vm.getMessages();
                });
            }
        },

        disconnect(room){
            window.Echo.leave("chat." +room.id)
        },

        setRoom(room){
            this.currentRoom = room;
            this.connect();
        },

        getMessages() {
            axios.get('/chat/room/'+ this.currentRoom.id + '/messages')
            .then(response => {
                this.messages = response.data;
            })
            .catch(error => {
                console.log(error);
            });
        }
    },

    created(){
        this.setRoom(this.chatroom);
    }
}
</script>

<style>
    .message-container{
        padding-bottom: 10px;
    }
</style>