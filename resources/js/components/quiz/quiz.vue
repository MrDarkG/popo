<template>
	<div class="container">
		<audio ref="audio">
			
		</audio>
		<div class="quiz-container">
			
			<video class="videoplayer" autoplay="1" ref="videoRef">
				
			</video>
			<div v-if="show_question==1" class="row m-0 justify-content-between align-content-stretch quiz-content"  v-bind:style="{ paddingBottom: padding + 'px' }">
				<div class="col-md-12 " id="question" ref="questionRef">
					<div class="question-container">
						{{ question }}
					</div>

				</div>
				
				<div class="col-md-6 " v-for="ans in answers" :style="`color:red;${answers.length>2?'height:50%':'height:100%'}`">
					<div class="question-container" @click="giveans(ans.id)">
						{{ ans.answer }} 
						<!-- {{ ans }} -->
					</div>
				</div>
				
			</div>
		</div>
	</div>
</template>
<script>
	export default{
		props:["tasks"],
		data(){
			return {
				cours_encounter:0,
				tasks_encounter:0,
				question_encounter:0,
				src:"",
				delay:0,
				show_question:0,
				question:"rame kirtxva",
				answers:[],
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
			showquestion(){
				this.show_question=1
    			setTimeout(()=>{ 
    				this.padding=this.$refs.questionRef.clientHeight+20
    			}, 100);
			},
			showAnswers(){
				if(this.tasks[this.tasks_encounter].answers[this.ansencounter] !== undefined){
					this.answers.push(this.tasks[this.tasks_encounter].answers[this.ansencounter])
					this.answer_show_delay=this.tasks[this.tasks_encounter].answers[this.ansencounter].sound_duration
					this.$refs.audio.src=this.tasks[this.tasks_encounter].answers[this.ansencounter].sound
					this.$refs.audio.play();
					this.interval=setInterval(()=>{
						this.ansencounter+=1
					},this.answer_show_delay*1000)
				}
			},
			playnext(){
				if (this.tasks.length>this.tasks_encounter) {

					this.show_question=0
					this.$refs.videoRef.src = this.tasks[this.tasks_encounter].source;

		    		this.$refs.videoRef.play();
		    		this.delay=this.tasks[this.tasks_encounter].time
		    		this.question=this.tasks[this.tasks_encounter].question
		    		// this.answers=this.tasks[this.tasks_encounter].answers
					this.setVisibilityToAnswers()

		    		setTimeout(()=>{ this.showquestion();this.showAnswers(); }, this.delay*1000);
				}
				else{
					alert(1)
				}
				// 
			},
			giveans(x){
    			this.tasks_encounter+=1;
				this.answers=[];
				this.ansencounter=0;
				this.playnext()
			},
			setVisibilityToAnswers(){
				/*for (let i = 0; i < this.answers.length; i++) {
					this.answers[i].is_visible = false
				}*/
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
		mounted(){
			this.playnext()
		},
	};
</script>