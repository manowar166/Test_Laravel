<template>
  <form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Name" v-model="user.name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" v-model="user.email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" v-model="user.password">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" @click.prevent="signup" class="btn btn-default" v-show="user.name && user.email && user.password">Register</button>
    </div>
  </div>
  
</form>
</template>

<script>
      export default{
      data(){
        return {
            user: {

            name: '',
            email: '',
            password: ''
          }
        }
      },

     methods:{
          signup () {
              this.$http.post('api/signup',
               this.user, {headers: {'X-CSRF-TOKEN': 'Laravel.csrfToken'}})
              .then(
                  (response) => console.log(response)  
                )
              .catch(
                  (error) => console.log(error)
                );

          }
      }

     }
</script>

