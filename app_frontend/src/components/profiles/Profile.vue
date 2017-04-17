<template>

<div class="table-responsive">
	   <table class="table table-condensed">
 <thead>
 <tr>
 <th class="col-md-2">Имя</th>
 <th class="col-md-2">Телефон</th>
 <th class="col-md-5">E-Mail</th>
 </tr>
 </thead>
 <tbody>
 <tr>
 <td class="col-md-2">{{ user.name }}</td>
 <td class="col-md-2">{{ user.phone }}</td>
 <td class="col-md-3">{{ user.email }}</td>
 <td class="col-md-4">
 	
  <router-link
  class="btn btn-primary" role="button"
  :to="'/profile/' + user.id + '/edit'">
    Edit
  </router-link>

  <p class="btn btn-danger" v-if="user.id !== authenticatedUser.id"  role="button" @click="$emit('delete-user')">
  Delete
  </p>
	
	<p class="btn btn-danger" v-if="user.id == authenticatedUser.id" disabled="disabled" role="button" >
	Delete
	</p>
  </td>
 </tr>
 </tbody>
 </table>	  
	</div>

</template>

<script>
           

           export default{
           data() {
             return {
             active: ''
             }
           }, 

           props: ['user', 'authenticatedUser'],

           
           methods: {
           	  
              open: function() {

                this.active = true
                this.bus.$emit('OpenPop', this.active)
                this.active = ''
                

                
          }   
               }
             }
</script>