<template>
     <div class="EditProfile">
     <h3 class="text-center">Редактирование профиля:</h3></br>
     <div class="row">
     <form class="form-horizontal">

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Ваше имя:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Name" v-model="user.name">
    </div>
  </div>

   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Телефон:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Phone" v-model="user.phone">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" v-model="user.email">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Пароль:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" v-model="user.password">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" @click="update" class="btn btn-success pull-right">Сохранить</button>
    </div>
  </div>
  
</form>
</div>
</div>
</template>

<script>
    import swal from 'sweetalert'

	export default{
         created () {
         	this.getUser()
         },

		 data() {
		 	 return{
		 	 	user: {}
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
		 			swal("Успех!", "Ваш профиль, удачно изменён!", "success")
		 			this.$router.push('/profile')
		 		})
		 	}
		 }
	}
</script>