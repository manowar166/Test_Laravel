<template>
<form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
          <input 
                 v-model="email"
                 type="email" 
                 class="form-control" 
                 id="inputEmail3" 
                 placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password"
      v-model="password">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button  @click="login" type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
  
</form>
</template>

<script>
     export default{
      data(){
        return {
            email: '',
            password: ''
        }
      },

      methods:{
        login() {
           var data={
              client_id: 2,
              client_secret: '30Wrt68l5pPwOqlo1e8dcBTyYkNL7P6cMY0vSpu4',
              grant_type: 'password',
              username: this.email,
              password: this.password
           }

          

           this.$http.post("oauth/token", data)
               

               .then(response => {
                  this.$auth.setToken(response.body.access_token, response.body.expires_in + Date.now())

                  this.$router.push("/feed")
                  window.location.reload("true")
               })
           /*
           .then(function (response){
               console.log(response)
           }) */
        }
      }
     }
</script>

<style>

</style>
