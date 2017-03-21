<template>
	<form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Name" v-model="name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" v-model="email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" v-model="password">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" @click="update" class="btn btn-default">Register</button>
    </div>
  </div>
  
</form>
</template>

<script>
    import swal from 'sweetalert'

	export default{
         created () {
         	this.getUser()
         },

		 data() {
		 	 return{
		 	 	name: '',
                email: '',
                password: ''
		 	 }
		 },

		 methods: {
            getUser () {
            	this.$http.get('api/profile/' + this.$route.params.user)
            	.then(response => {
                     this.user = response.body
            	})
            },

		 	update () {
		 		this.$http.put('api/profile/' + + this.$route.params.user, this.user)
		 		.then(response => {
		 			swal("Updated!", "Your product has been updated!", "success")
		 			this.$router.push('/feed')
		 		})
		 	}
		 }
	}
</script>