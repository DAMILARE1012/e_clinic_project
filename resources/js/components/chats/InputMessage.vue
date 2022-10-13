<template>
    <div class="col-md-10">
        <div class="panel panel-default new-message">						
                <div class="panel-body">
                    
                    <div class="form-group">
                        <input 
                            type="text" 
                            class="form-control" 
                            placeholder="Subject" 
                            v-model="message"
                            @keyup.enter="sendMessage()">
                    </div><!-- .form-group -->
                </div><!-- .panel-body -->

                <div class="panel-footer clearfix">
                    <div class="pull-right">
                        <button type="button" class="btn btn-primary" @click="sendMessage()">Send <i class="fa fa-send"></i></button>
                    </div>
                </div><!-- .panel-footer -->
        </div><!-- .panel -->
    </div>
</template>

<script>
import axios from 'axios';

export default {
    props: ['roomid'],
    data: function(){
        return {
            message: '',
        }
    },

    methods: {
        sendMessage(){
            if(this.message == ''){
                return;
            }

            axios.post('/chat-room/'+ this.roomid +'/message', {
                message: this.message
            }).then(response => {
                if(response.status == 201){
                    this.message = '';
                    this.$emit('messageSent');
                }
            }).catch(error => {
                console.log(error);
            })
        }
    }
}
</script>