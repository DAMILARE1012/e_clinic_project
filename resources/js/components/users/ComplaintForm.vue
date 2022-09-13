<template>
    <section class="app-content">
		<div class="row">
			<div class="col-md-12">
				<div class="widget">
					<header class="widget-header">
						<h4 class="widget-title">Basic Example</h4>
					</header><!-- .widget-header -->
					<hr class="widget-separator">
					<div class="widget-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Who would you like to? {{ specialist }}</label>
                                    <select v-model="specialist" class="form-control">
                                        <option value="doctor">Doctor</option>
                                        <option value="psychiatrist">Psychiatrist</option>
                                    </select>
                                </div>

                                <div v-if="specialist == 'psychiatrist'">
                                    <div class="m-b-lg">
                                        <small v-if="specialist == 'psychiatrist'" class="text-info">
                                            Please fill this questionnaire.
                                        </small>
                                    </div>
                                    <div v-for="question in questions" class="checkbox checkbox-default">
                                        <input type="checkbox" :value="question.id" v-model="checkedQuestions" :id="
                                            question.id"/>
                                        <label for="custome-checkbox1">{{ question.question }}</label>
                                    </div>
                                    
                                    
                                    
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Please describe how you feel?</label>
                                    <textarea class="form-control" v-model="description"></textarea>
                                </div>
                                <div v-if="hasError == true" class="alert alert-danger">
                                    <li v-for="error in errors">{{ error[0] }}</li>
                                </div>
                                <button class="btn btn-primary btn-md" @click="submitRequest()">Submit</button>
                            </div>

                                
						</div>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END column -->


		</div><!-- .row -->
	</section>
</template>

<script>
    
    export default {
        
        props: ['user'],
        data(){

            return {
                specialist: '',
                questions: '',
                checkedQuestions: [],
                description: '',
                hasError: false,
                errors: {},
                
            }
            
        },

        methods: {
            async getQuestionnaires(){
                let response = await axios.get('/api/questionnaires')
                if(response.status == 200){
                    this.questions = response.data
                }
            },

            async submitRequest(){
               
                await axios.post('/api/make-request', {
                    user_id: this.user.id,
                    questionnaires: this.checkedQuestions,
                    specialist: this.specialist,
                    description: this.description,
                })
                .then((response)=>{
                    console.log(response.data);
                })
                .catch((error)=>{
                    if (error.response.status === 422) {
                        this.hasError = true;
                        this.errors = error.response.data.errors;
                        console.log(error.response.data.errors);
                    }
                });
            }

        },

        mounted() {
            this.getQuestionnaires();
        }
    }
</script>
