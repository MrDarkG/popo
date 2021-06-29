<template>
<div>
	<VueSvgGauge
	  :start-angle="-110"
	  :end-angle="110"
	  :value="value"
	  :separator-step="20"
	  :min="0"
	  :max="100"
	  :gauge-color="[{ offset: 0, color: '#5710B2'}, { offset: 100, color: 'red'}]"
	  :scale-interval="10"
	  :inner-radius="radius"
	>
		<div class="inner-text d-flex align-items-end justify-content-center">
    	<span>თქვენი ქულა არის<b>{{ value }}</b> !</span>
  	</div>
	</VueSvgGauge>
</div>
</template>
<script>
import VueSvgGauge from 'vue-svg-gauge'
Vue.use(VueSvgGauge)

export default{
	data(){
		return {
			radius:80,
			value:60,
		}
	}
};
</script>
<style type="sass">
.inner-text {
  height: 100%;
  width: 100%;
  text-align: center;
}
.inner-text span {
    max-width: 100px;
    color: #5710b2;
  }
</style>