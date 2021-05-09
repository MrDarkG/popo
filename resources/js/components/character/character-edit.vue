<template>
<div class="m-5">
	<div class="d-flex">
		<div class="text-right">
			<div class="p-4">
				თმა
			</div>
			<div class="p-4">
				ზედა
			</div>
			<div class="pl-4 pt-2 pr-4">
				ქვედა
			</div>
		</div>
		<div>
			<div class="p-4" @[event]="animation()">
				<i class="fa fa-arrow-left" aria-hidden="true"></i>
			</div>
			<div class="p-4" @[event]="animation()">
				<i class="fa fa-arrow-left" aria-hidden="true"></i>
			</div>
			<div class="pl-4 pt-2" @[event]="animation()">
				<i class="fa fa-arrow-left" aria-hidden="true"> </i>
			</div>
		</div>
		<svg height="185" width="110">
			<g v-for="part in svg_parts" v-html="part.content">
			</g>
		</svg>
		<div>
			<div class="p-4" @[event]="animation()">
				<i class="fa fa-arrow-right" aria-hidden="true"></i>
			</div>
			<div class="p-4" @[event]="animation()">
				<i class="fa fa-arrow-right" aria-hidden="true"></i>
			</div>
			<div class="pl-4 pt-2" @[event]="animation()">
				<i class="fa fa-arrow-right" aria-hidden="true"></i>
			</div>
		</div>
	</div>

</div>
</template>
<script>
import anime from 'animejs/lib/anime.es.js'

export default{
	props:['parts'],
	data(){
		return {
			svg_parts:this.parts,
			isChanging:false,
		}
	},
	computed: {
    	event() {
			return this.isChanging?'null':'click'
    	}
  	},
	mounted(){
		setTimeout(()=>{
			this.animation()
		},2000)
	},
	methods:{
		animation(){
			this.isChanging = true
			let duration = 5000
			this.armsAnimation(duration)
			
			this.eyeBrowAnimation(duration)
			/*NOSE*/
			anime({
		 		targets: '#nose',
		  		translateY: [0,-0.5,0],
		  		duration: duration-5000
			})
			this.eyesAnimation(duration)
			this.isChanging = false
			
			return false
		},
		armsAnimation(duration){
			/*ARMS*/
			anime({
			  targets: '#left-hand',
			  translateY: [0,0,0,0],
			  translateX: [0,47,1,1.5],
			  rotate: [0,25,0,0],
			  // backgroundColor: '',
			  duration: duration
			})
			anime({
			  targets: '#right-hand',
			  translateY: [0,47,0,0],
			  translateX: [0,-40,0,0],
			  rotate: [0,-25,0,0],
			  duration: duration
			})
		},
		eyeBrowAnimation(duration){
			/*EYEBROWS*/
			anime({
		  		targets: '#left-eyebrow',
		  		translateY: [0,2,0],
		  		translateX: [0,2,0],
		  		duration: duration-1000
			})
			anime({
		 		targets: '#right-eyebrow',
		  		translateY: [0,2,0],
		  		translateX: [0,-2,0],
		  		duration: duration-1000
			})
			anime({
		  		targets: '#left-cheek',
		 		fill:['#ffc8ac','#fca39a','#ffc8ac'],
		  		duration: duration
			})
			anime({
		 		targets: '#right-cheek',
		 		fill:['#ffc8ac','#fca39a','#ffc8ac'],
		  		duration: duration
			})
		},
		eyesAnimation(duration){
			/*EYES*/
			anime({
		  		targets: '#left-eye',
		  		translateY: [0,5,0],
		  		translateX: [0,4,0],
		  		scale: [1,0.9,1],
		  		duration: duration-1000
			})
			anime({
		 		targets: '#right-eye',
		  		translateY: [0,5,0],
		  		translateX: [0,6,0],
		  		scale: [1,0.9,1],
		  		duration: duration-1000
			})
			setTimeout(()=>{
				/*EYESGUGA*/
				anime({
			  		targets: '#left-eye-guga',
			  		// translateY: [0,5,0],
			  		translateX: [0,7,-2,2],
			  		duration: duration-1000
				})
				anime({
			 		targets: '#right-eye-guga',
			  		// translateY: [0,5,0],
			  		translateX: [0,7,-2,2],
			  		duration: duration-1000
				})
				/*EYES*/
				anime({
			  		targets: '#left-eye',
			  		translateX: [0,2,-2,0],
			  		duration: duration-1000
				})
				anime({
			 		targets: '#right-eye',
			  		translateX: [0,2,-2,0],
			  		duration: duration-1000
				})
			},1200)
		},
	},
};
</script>