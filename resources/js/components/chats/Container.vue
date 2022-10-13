<template>
    <div>
        <message-container :messages="messages" />
        <input-message
         v-on:messageSent="getMessages()"
         :roomid="roomid" />

    </div>
</template>

<script>
export default {
    props: ['roomid'],
    data: function(){
        return {
            messages: [],
        }
    },
    methods: {

        connect(){
            if(this.roomid){
                let vm = this;
                this.getMessages();
                window.Echo.private("chat."+this.roomid)
                .listen('.message.new', e=> {
                    vm.getMessages();
                });  
            }
            
        },
        getMessages(){
            axios.get(this.roomid+'/messages')
            .then(response => {
                this.messages = response.data;
                console.log(response);
            }).catch(error => {
                console.log(error);
            })
        }
    },

    mounted(){
        
    }
}
</script>