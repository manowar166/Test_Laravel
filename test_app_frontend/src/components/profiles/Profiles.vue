<template>
  <div class="row">
       

       <my-users
            v-for = "user in users"
            :authenticatedUser="authenticatedUser"
            :user= "user">
       </my-users>

      

  </div>

  

</template>

<script>
  import User from './Profile.vue'
  

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
       }

  }

</script>