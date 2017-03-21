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
      <button type="submit" @click.prevent="signup" class="btn btn-default">Register</button>
    </div>
  </div>
  
</form>
</template>

<script>
      export default{
      data(){
        return {
            name: '',
            email: '',
            password: ''
        }
      },

     methods:{
          signup () {
              this.$http.post('api/signup',
              {name: this.name, email: this.email, password: this.password},{headers: {'X-CSRF-TOKEN': 'Laravel.csrfToken'}})
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

