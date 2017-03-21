<template>
	
	<div id="row">
		<h1>Привет я новая страница </h1>

		 <div id="show-modal" v-show="active">
		 <my-modal @close-pop="ClosePopUp"></my-modal>
		 </div>

		 <button id="show-modal" @click="open()">Show Modal</button>
	</div>
</template>

<script>
	import Modal from './modal.vue'
    

	export default {
         data () {
          return {
          	 active: false
             }
          },


         components: {
         	   'my-modal': Modal
         },

         methods: {
         	open: function() {
         		
         		this.active = true

         	},

         	ClosePopUp: function(active) {
                console.log(active)
                this.active = active
         	}

         	
         }
	}

</script>

<style>
	
</style>