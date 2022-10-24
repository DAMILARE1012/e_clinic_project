<template>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <input 
                    type="text" 
                    class="form-control" 
                    v-model="message" 
                    @keyup.enter="sendMessage()" 
                    placeholder="say something...">
            </div>
        
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
