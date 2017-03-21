<template>

  

	<div class="table-responsive">
	   <table class="table table-condensed">
 <thead>
 <tr>
 <th class="col-md-2">Имя</th>
 <th class="col-md-2">Фамилия</th>
 <th class="col-md-5">Почта</th>
 </tr>
 </thead>
 <tbody>
 <tr>
 <td class="col-md-2">{{ user.name }}</td>
 <td class="col-md-2">Николайчук</td>
 <td class="col-md-5">{{ user.email }}</td>
 <td class="col-md-2">
 	
  <router-link
  class="btn btn-primary" role="button"
  :to="'/profile/' + user.id + '/edit'">
    Edit
  </router-link>
	
	<p class="btn btn-danger" role="button" @click.prevent="EditUser">
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