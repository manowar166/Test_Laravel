<template>
	<div>
	<h3 class="text-center">Профили пользователей:</h3></br>
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