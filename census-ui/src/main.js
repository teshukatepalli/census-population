// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import axios from 'axios'
import router from './router'
import '../node_modules/bootstrap/dist/css/bootstrap.css'
import './assets/style.css'

axios.interceptors.request.use(
  config => {
    config.headers.Authorization = 'Bearer ' + (localStorage.getItem('Token') ? localStorage.getItem('Token') : '')
    return config
  },
  error => Promise.reject(error)
)

Vue.config.productionTip = false
Vue.prototype.$axios = axios
Vue.prototype.$api = 'http://censusapi.codejunkers.in'

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
})
