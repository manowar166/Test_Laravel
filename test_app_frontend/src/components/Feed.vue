<template>
	<div>
	<h3 class="text-center">Товары:</h3></br>
	<my-products>
		
	</my-products>
	</div>

</template>

<script>
    import Products from './product/Products.vue'

	export default {
         components: {
         	   'my-products': Products
         }
	}

</script>