<template>
	
</template>
<script>
    import swal from 'sweetalert'

	export default {
       created () {
       	    this.LogOutUser()
       	  
       },

       methods: {
            LogOutUser () {
                     swal({
                  title: "Are you sure?",
                  text: "You will not be able to recover this imaginary file!",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#DD6B55",
                  confirmButtonText: "Yes, delete it!",
                  closeOnConfirm: false
                 },
                function() {
                  this.$http.delete('api/products/' + product.id)
                      .then(response => {
                           let index = this.products.indexOf(product)

                           this.products.splice(index, 1)

                           swal("Deleted!", "Your imaginary file has been deleted.", "success");
                      })  
                  
                    }.bind(this)
                 );               


   
            }
       }


	}
</script>