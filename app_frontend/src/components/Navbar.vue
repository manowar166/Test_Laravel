<template>
  <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
                <router-link tag="li" to="/login" v-if= " ! isAuth">
                      <a>Логин</a>
                </router-link>      
            
                <router-link tag="li" to="/register" v-if="! isAuth">
                      <a>Регистрация</a>
                </router-link>

                <router-link tag="li" to="/feed" v-if="isAuth">
                      <a>Товары</a>
                </router-link>      

                <router-link tag="li" to="/profile" v-if="isAuth">
                      <a>Профили</a>
                </router-link>
                
                <router-link tag="li" to="/products/create" v-if="isAuth">
                      <a>Создать продукт</a>
                </router-link>  

                <li role="presentation" @click="logout"><a v-if="isAuth">Выйти</a></li>     
            
          </ul>
        </nav>
        <h3 class="text-muted">Project name</h3>
      </div>
</template>
<style>
  
</style>

<script>
      import swal from 'sweetalert'

      export default {
           data () {
               return {
                  isAuth: null
               }
           },

           created () {
              this.isAuth = this.$auth.isAuthenticated()

              this.setAuthenticatedUser()
           },

           methods: {
                setAuthenticatedUser () {
                  this.$http.get('api/user')
                  .then(response => {
                      this.$auth.setAuthenticatedUser(response.body)

                      console.log(this.$auth.getAuthenticatedUser())
                  })
                },
                logout () {
                     swal({
                  title: "Уже уходите?",
                  text: "Вы нажали 'Выйти', если это хотите остаться на сайте нажмите 'Cancel'",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#DD6B55",
                  confirmButtonText: "Yes",
                  closeOnConfirm: false
                 },
                function() {
                    localStorage.removeItem('token')
                    localStorage.removeItem('expiration')
                    window.location.reload("true")  
                  }); 

                }
              }
           }
</script>


