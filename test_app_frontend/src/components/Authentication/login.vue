<template>
<form class="form-horizontal">

             <div :class="{'has-error': errors.has('email'), 'form-group': true }">
             <label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
             <div class="col-sm-8">
                 <input v-validate data-vv-rules="required|email" v-model="email" type="email" class="form-control" id="inputEmail3" placeholder="E-mail" name="email" required autofocus>
                 <span v-if="errors.has('email')" class="help-block">
                    <strong>{{ errors.first('email') }}</strong>
                    </span>
                  </div>
                </div>

             <div :class="{'has-error': errors.has('password'), 'form-group': true }">
             <label for="inputPassword3" class="col-sm-2 control-label">Пароль</label>
             <div class="col-sm-8">
                 <input v-validate data-vv-rules="required" v-model="password" type="password" class="form-control" id="inputPassword3" placeholder="password" name="password" required autofocus>
                 <span v-if="errors.has('password')" class="help-block">
                    <strong>{{ errors.first('password') }}</strong>
                    </span>
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
              client_secret: '0WeTnkuqq0FRrRfWFDfvsQeczPgR6EhoiBQxlkmP',
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
