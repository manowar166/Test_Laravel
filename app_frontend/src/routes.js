import Vue from 'vue'
import VueRouter from 'vue-router'



Vue.use(VueRouter)

const router = new VueRouter({
       

	routes: [
       {
       	  path: "/login",
       	  component: require('./components/Authentication/login.vue'),
       	  meta: {
       	  	forVisitors: true
       	  }
       },
       {
       	  path: "/register",
       	  component: require('./components/Authentication/register.vue'),
       	  meta: {
       	  	forVisitors: true
       	  }
       },

       {
       	path: "/feed",
       	component: require('./components/Feed.vue'),
       	meta: {
       		forAuth: true
       	}
       },


       {
              path: "/profile",
              component: require('./components/Users.vue'),
              meta: {
                     forAuth: true
              }
       },



       {
              path: "/logout",
              component: require('./components/Authentication/logout.vue'),
              meta: {
                     forAuth: true
              }
       },

       {
              path: "/products/create",
              component: require('./components/product/Create.vue'),
              meta: {
                     forAuth: true
              }
       },

       {
              path: "/products/:product/edit_prod",
              component: require('./components/product/Edit.vue'),
              meta: {
                     forAuth: true
              }
       },

       {
              path: "/profile/:user/edit",
              component: require('./components/profiles/Edit.vue'),
              meta: {
                     forAuth: true
              }
       }


	],

       linkActiveClass: 'active'

})


export default router