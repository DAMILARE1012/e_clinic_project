<template>
    <div class="container">
        <ChatRoomSelection 
            v-if="currentRoom.id"
            :rooms="chatRooms"
            :currentRoom="currentRoom"
            v-on:roomChanged="setRoom($event)"/>

        <MessageContainer
            :messages="messages" />
        <InputMessage 
            :room="currentRoom" 
            v-on:messageSent="getMessages()" />
    </div>
</template>

<script>
import MessageContainer from "./MessageContainer.vue";
import InputMessage from "./InputMessage.vue";
import axios from "axios";
import ChatRoomSelection from "./ChatRoomSelection.vue";
    export default {
    
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
        getRooms(){
            axios.get('/chat/rooms')
            .then(response => {
                this.chatRooms = response.data;
                this.setRoom(response.data[0]);
            })
            .catch(error => {
                console.log(error);
            });
        },

        setRoom(room){
            this.currentRoom = room;
            this.getMessages();
            console.log(room);
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
        this.getRooms();
    }
}
</script>
