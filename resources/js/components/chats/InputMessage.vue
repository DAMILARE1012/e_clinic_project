<template>
    
    <div class="form-inline message-input">
        <div class="form-group">
            <input 
                type="text" 
                class="form-control" 
                v-model="message" 
                @keyup.enter="sendMessage()" 
                placeholder="say something...">

            <button @click="sendMessage()" class="btn primary">Send</button>
        </div>
    </div>
        
    
</template>

<script>

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: ['room'],

        data: function(){
            return {
                message: ''
            }
        },

        methods: {
            sendMessage(){
                if(this.message == ''){
                    return;
                }

                axios.post('/chat/room/'+ this.room.id +'/message', {
                    message: this.message
                })
                .then(response => {
                    if(response.status == 201){
                        this.message = '';
                        this.$emit('messageSent');
                    }
                })
                .catch(error => {
                    console.log(error);
                });
                
            }
        }
    }
</script>

<style>
    .message-input{
        padding: 16px;
        background-color: rgb(12,184,182);
    }

    .primary{
        border-color: #f0f0f0;
    }
</style>
