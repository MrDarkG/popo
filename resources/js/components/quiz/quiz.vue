<template>
	<div class="container">
		
		<div class="quiz-container">
			
			<video class="videoplayer" ref="videoRef" autoplay="1">
				
			</video>
			<div v-for="(tsk, index) in task" v-if="tsk.is_selected && tsk.is_visible" :key="tsk.id" class="row m-0 justify-content-between align-content-stretch quiz-content"  :style="{ paddingBottom: padding + 'px' }">
				<div class="col-md-12 " id="question" :ref="`questionRef.${tsk.id}`">
					<div class="question-container">
						{{ tsk.question }}
					</div>
				</div>
				
				<div class="col-md-6 " v-if="ans.is_visible" :key="ans.answer" v-for="(ans, tsk_index) in tsk.answers" :style="`color:red;${answers.length>2?'height:50%':'height:100%'}`">
					<div class="question-container" @[answer_event]="giveans(ans.id);">
						{{ ans.answer }} 
					</div>
				</div>
				
			</div>
			{{ answer_event }}
		</div>
	</div>
</template>
<script>
	export default{
		props:["tasks"],
		data(){
			return {
				answer_event:null,
				cours_encounter:0,
				tasks_encounter:0,
				question_encounter:0,
				src:"",
				delay:0,
				show_question:0,
				question:"rame kirtxva",
				answers:[],
				task:[],
				padding:0,
				answer_show_delay:0,
				interval:"",
				ansencounter:0
			}
		},
		computed: {
		  items: () => {
		    return this.items.filter(function (item) {
		      return item.price < 100
		    })
		  }
		},
		methods:{
			setDefaultQuestionVisibility(){
				for (let i = 0; i < this.tasks.length; i++) {
					let answers = []
					for (let j = 0; j < this.tasks[i].answers.length; j++) {
						answers.push({
							id:this.tasks[i].answers[j].id,
							answer:this.tasks[i].answers[j].answer,
							description:this.tasks[i].answers[j].description,
							question_id:this.tasks[i].answers[j].question_id,
							sound:this.tasks[i].answers[j].sound,
							sound_duration:this.tasks[i].answers[j].sound_duration,
							timedelay:this.tasks[i].answers[j].timedelay,
							is_visible:false,
							is_selected:false,
						})
					}
					this.task.push({
						id:this.tasks[i].id,
						point:this.tasks[i].point,
						question:this.tasks[i].question,
						sound:this.tasks[i].sound,
						sound_time:this.tasks[i].sound_time,
						source:this.tasks[i].source,
						time:this.tasks[i].time,
						answers:answers,
						is_selected:false,
						is_visible:false,
						is_done:false,
					})
				}

			},
			showAnswers(){
				setTimeout(()=>{
					let time = 0
					for (let i = 0; i < this.task.length; i++) {
						for (let j = 0; j < this.task[i].answers.length; j++) {
							this.task[i].answers[j].is_visible = false
							if(this.task[i].is_selected){
								time += j
								this.audioAnswerDelay(i, j, this.task[i].answers[j])
							}
						}
					}
					setTimeout(()=>{
						this.answer_event = 'click'
					},time*1000)
				},3000)
			},
			setQuestion(){
				let count = this.task.filter((task)=>task.is_selected).length

				if(count === 0){
					this.task[0].is_selected = true
					setTimeout(()=>{
						this.task[0].is_visible = true
					},this.task[0].time*1000)
				}else{
					for (let i = 0; i < this.task.length; i++) {
						this.task[i].is_visible = false
						if(this.task[i].is_selected){
							this.task[i].is_selected = false
							if(this.task[i+1] !== undefined){
								this.newQuestionDelay(this.task[i+1].time, i)
								break
							}
						}
					}	
				}
			},
			newQuestionDelay(delay ,index){
				this.task[index+1].is_selected = true
				setTimeout(()=>{
					this.task[index+1].is_visible = true
				},delay*1000)
			},
			audioAnswerDelay(question_index, answer_index, answer){
				setTimeout(()=>{
					let audio = new Audio(answer.sound);
					this.task[question_index].answers[answer_index].is_visible = true
					audio.play();
				},answer_index*2000)
			},
			playnext(){
				this.setQuestion()
				let selected_task = this.task.filter((task)=>task.is_selected)[0]

				if(selected_task !== undefined){				
					this.$refs.videoRef.src = selected_task.source
		    		this.$refs.videoRef.play()
		    		this.delay=selected_task.time
		    		this.question=selected_task.question
		    		this.answers=selected_task.answers

		    		setTimeout(()=>{ 
		    			this.showAnswers();
		    			this.playSelectedQuestionSound(selected_task.id)
		    		}, this.delay*1000)
				}else{
					window.location.href = "/user-area"
				}
			},
			setAnswersAsClickable(question_id){
				for (let i = 0; i < this.task.length; i++) {
					if(this.task[i].id === question_id){
						for (let j = 0; j < this.task[i].answers.length; j++) {
							this.task[i].answers[i].is_disabled = 'click'
						}
					}
				}
			},
			playSelectedQuestionSound(question_id){
				for (let i = 0; i < this.task.length; i++) {
					this.task[i].is_visible = false
					if (this.task[i].id === question_id) {
						this.task[i].is_visible = true
						let audio = new Audio(this.task[i].sound);
						audio.play();
					}
				}
			},
			checkAnswer(answer_id){
				for (let i = 0; i < this.task.length; i++) {
					if(this.task[i].is_selected){
						for (let j = 0; j < this.task[i].answers.length; j++) {
							this.task[i].answers[j].is_selected = false
							if(this.task[i].answers[j].id === answer_id){
								let audio = new Audio(this.task[i].answers[j].sound);
								audio.play();
								this.task[i].answers[j].is_selected = true
							}
						}
					}
				}
			},
			countSelectedAnswers(){
				let selected_answers = 0
				for (let i = 0; i < this.task[i].length; i++) {
					if(this.task[i].is_selected){
						for (let j = 0; j < this.task[i].answers.length; j++) {
							if(this.task[i].answers[j].is_selected){
								selected_answers += 1
							}
						}
					}
				}

				return selected_answers
			},
			giveans(answer_id){
				this.answer_event = null
				this.post('/answer/question',{
					answer_id:answer_id,
				}).then((response)=>{
					this.checkAnswer(answer_id)
					setTimeout(()=>{
						this.playnext()
					},2500)
				})
			},
		},
		watch:{
			ansencounter:function(val){
				// console.log(this.ansencounter,this.tasks_encounter)
				clearInterval(this.interval)
				if(this.ansencounter < 4 && this.ansencounter>0){
					this.showAnswers()
				}
			}
		},
		created(){
			this.setDefaultQuestionVisibility()
		},
		mounted(){
			this.playnext()
		},
	};
</script>