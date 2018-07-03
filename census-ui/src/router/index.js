import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import dashboard from '@/components/dashboard'
import county from '@/components/county'
import editCounty from '@/components/editCounty'
import viewCounty from '@/components/viewCounty'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld
    },
    {
      path: '/dashboard',
      name: 'dashboard',
      component: dashboard
    },
    {
      path: '/county',
      name: 'county',
      component: county
    },
    {
      path: '/viewCounty',
      name: 'viewCounty',
      component: viewCounty
    },
    {
      path: '/editCounty',
      name: 'editCounty',
      component: editCounty
    }
  ]
})
