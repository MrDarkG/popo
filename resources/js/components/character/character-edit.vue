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
			<div class="p-4" @click="animation()">
				<i class="fa fa-arrow-left" aria-hidden="true"></i>
			</div>
			<div class="p-4" @click="animation()">
				<i class="fa fa-arrow-left" aria-hidden="true"></i>
			</div>
			<div class="pl-4 pt-2" @click="animation()">
				<i class="fa fa-arrow-left" aria-hidden="true"> </i>
			</div>
		</div>
		<svg height="185" width="110">
			<g v-for="part in parts" v-html="part.content">
			</g>
		</svg>
		<div>
			<div class="p-4" @click="animation()">
				<i class="fa fa-arrow-right" aria-hidden="true"></i>
			</div>
			<div class="p-4" @click="animation()">
				<i class="fa fa-arrow-right" aria-hidden="true"></i>
			</div>
			<div class="pl-4 pt-2" @click="animation()">
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
	mounted(){
		setTimeout(()=>{
			this.animation()
		},2000)
	},
	methods:{
		animation(){
			let duration = 5000
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
			/*EYEBROWS*/
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
			/*CHEEKS*/
			setTimeout(()=>{
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
			},1200)
		},
	},
};
</script>