<template>
	<div class="col-md-4">
	   <div class="thumbnail">
	      <img src="http://wfarm2.dataknet.com/static/resources/icons/set3/c9f1cdf473a8.png">
		  
		  <div class="caption">
               <p>{{ product.user_id }} </p>

		  	   <h3>{{ product.name }}</h3>
		  	   <p>{{ product.price }}</p>
		  	   <hr>
		  	   <p>
		  	   	    <a href="#" class="btn btn-default">
		  	   	    	Wish list
		  	   	    </a>

		  	   	    <a href="#" class="btn btn-success">
		  	   	    	Buy
		  	   	    </a>
		  	   </p>

		  	   <hr>
               <div class="EditDelete" >
		  	   <p class="btn btn-danger" role="button" @click="$emit('delete-product')" >
		  	   	    
		  	   	    	Delete
               </p>
                <router-link class="btn btn-primary" role="button"
		  	         :to="'/products/' + product.id + '/edit_prod'">
		  	        Edit
		  	    </router-link>
		  	   	    
		  	   </div>
              	   

		  </div>
	  </div>	  
	</div>

</template>

<script>
      import swal from 'sweetalert'

	  export default{
           props: ['product', 'authenticatedUser'],

           
	  }
</script>