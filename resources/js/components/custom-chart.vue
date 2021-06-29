<template>
<div>
	<VueSvgGauge
	  :start-angle="-110"
	  :end-angle="110"
	  :value="3"
	  :separator-step="1"
	  :min="0"
	  :max="4"
	  :gauge-color="[{ offset: 0, color: '#347AB0'}, { offset: 100, color: '#8CDFAD'}]"
	  :scale-interval="0.1"
	>
		<div class="inner-text">
	    	<span>Let's make this <b>fun</b> !</span>
	  	</div>
	</VueSvgGauge>
</div>
</template>
<script>
import VueSvgGauge from 'vue-svg-gauge'
Vue.use(VueSvgGauge)

export default{

};
</script>
<style type="sass">
.inner-text {
  height: 100%;
  width: 100%;
}
.inner-text span {
    max-width: 100px;
    color: red;
  }
</style>