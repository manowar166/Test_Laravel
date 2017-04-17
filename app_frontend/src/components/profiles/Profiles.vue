<template>
  <div class="row">
       

       <my-users
            v-for = "user in users"
            @delete-user = "DeleteUser(user)"
            :authenticatedUser="authenticatedUser"
            :user= "user">
       </my-users>

      

  </div>

  

</template>

<script>
  import User from './Profile.vue'
   import swal from 'sweetalert'
  

  export default {
       data () {
          return {
             users: []
             }
          },

       computed: {
           authenticatedUser () {
                 return this.$auth.getAuthenticatedUser()
           }
       },

       components: {
           'my-users': User
       },
       
       

       created () {
           this.$http.get('api/profile')
                .then(response => {
                   this.users = response.body
                })
       },

       methods: {
              DeleteUser (user) {
                  swal({
                  title: "Вы уверены что хотите удалить профиль?",
                  text: "",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#DD6B55",
                  confirmButtonText: "Yes, delete it!",
                  closeOnConfirm: false
                 },
                function() {
                  this.$http.delete('api/profile/' + user.id)
                      .then(response => {
                           let index = this.users.indexOf(user)

                           this.users.splice(index, 1)

                           swal("Успех!", "Пользователь успешно удалён!", "success");
                      })  
                  
                    }.bind(this)
                 );
                 
              }
           }

  }

</script>