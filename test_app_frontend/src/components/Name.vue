<template>
	<div>
	<h1>Профили</h1>
	<my-users>
		
	</my-users>
	
	

</template>

<script>
    
    import Users from './profiles/Profiles.vue'
    
    

	export default {
		

         components: {
         	   'my-users': Users

         },

        
	}

</script>