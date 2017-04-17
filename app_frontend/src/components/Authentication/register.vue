<template>
  <form class="form-horizontal">
  
             <div :class="{'has-error': errors.has('email'), 'form-group': true }">
             <label for="inputEmail3" class="col-sm-2 control-label">Ваше имя:</label>
             <div class="col-sm-8">
                 <input v-validate data-vv-rules="required|alpha|min:5" v-model="user.name" type="name" class="form-control" id="inputEmail3" placeholder="Name" name="name" required autofocus>
                 <span v-if="errors.has('name')" class="help-block">
                    <strong>{{ errors.first('name') }}</strong>
                    </span>
                  </div>
                </div>

             <div :class="{'has-error': errors.has('phone'), 'form-group': true }">
             <label for="inputEmail3" class="col-sm-2 control-label">Телефон:</label>
             <div class="col-sm-8">
                 <input v-validate data-vv-rules="required|numeric|min:11" v-model="user.phone" type="phone" class="form-control" id="inputEmail3" placeholder="Phone" name="phone" required autofocus>
                 <span v-if="errors.has('phone')" class="help-block">
                    <strong>{{ errors.first('phone') }}</strong>
                    </span>
                  </div>
                </div> 

             <div :class="{'has-error': errors.has('email'), 'form-group': true }">
             <label for="inputEmail3" class="col-sm-2 control-label">E-mail:</label>
             <div class="col-sm-8">
                 <input v-validate data-vv-rules="required|email" v-model="user.email" type="email" class="form-control" id="inputEmail3" placeholder="E-mail" name="email" required autofocus>
                 <span v-if="errors.has('email')" class="help-block">
                    <strong>{{ errors.first('email') }}</strong>
                    </span>
                  </div>
                </div> 

             <div :class="{'has-error': errors.has('password'), 'form-group': true }">
             <label for="inputEmail3" class="col-sm-2 control-label">Пароль:</label>
             <div class="col-sm-8">
                 <input v-validate data-vv-rules="required" v-model="user.password" type="password" class="form-control" id="inputEmail3" placeholder="Password" name="password" required autofocus>
                 <span v-if="errors.has('password')" class="help-block">
                    <strong>{{ errors.first('password') }}</strong>
                    </span>
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
            phone: '',
            email: '',
            password: ''
          }
        }
      },

     methods:{
          signup () {
              this.$http.post('api/signup',
               this.user, {headers: {'X-CSRF-TOKEN': 'laravel.csrfToken'}})

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

