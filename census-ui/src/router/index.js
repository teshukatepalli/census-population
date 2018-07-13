import Vue from 'vue'
import Router from 'vue-router'
import Login from '@/pages/login/login'
import dashboard from '@/pages/dashboard/dashboard'
import county from '@/pages/county/county'
import viewCounty from '@/pages/county/viewCounty'
import profile from '@/pages/profile'
import newCounty from '@/pages/county/newCounty'

Vue.use(Router)

function requireAuth (to, from, next) {
  if (localStorage.getItem('Token')) {
    next()  // we are authorized, continue on to the requested route
  } else {
    next('/login') // they are not authorized, so redirect to login
  }
}

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/login',
      name: 'login',
      component: Login
    },
    {
      path: '/',
      name: 'dashboard',
      component: dashboard,
      beforeEnter: requireAuth
    },
    {
      path: '/county',
      name: 'county',
      component: county,
      beforeEnter: requireAuth
    },
    {
      path: '/county/:id',
      name: 'viewCounty',
      component: viewCounty,
      props: true
    },
    {
      path: '/profile',
      name: 'profile',
      component: profile
    },
    {
      path: '/newCounty',
      name: 'newCounty',
      component: newCounty
    }
  ]
})
