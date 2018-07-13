<template>
  <div id="app" style="background-color: white;">
      <nav class="navbar navbar-inverse" style="border-radius: 0px;position: sticky;top:0px;z-index:100;" v-if="loginStatus">
        <div class="container-fluid">
          <div class="navbar-header">
            <router-link class="navbar-brand" to="/"><img src="./assets/census.png" height="50px" alt=""></router-link>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li v-if="user==='admin'"><router-link to="/">Dashboard</router-link></li>
            <li v-if="user==='admin'"><router-link to="/county">Counties</router-link></li>
            <li v-if="user==='County'"><router-link :to="'/county/' + profile.county_id">My County</router-link></li>
            <li><router-link to="/profile">Profile</router-link></li>
            <li><a v-on:click="logout();$router.push('/login')">Logout</a></li>
          </ul>
        </div>
      </nav>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12" style="min-height: 90vh;">
            <router-view @change="changeStatus"></router-view>
          </div>
        </div>
      </div>
    </div> 
  </div>
</template>

<script>
export default {
  data () {
    return {
      loginStatus: false,
      user: '',
      profile: JSON.parse(localStorage.getItem('profile'))
    }
  },
  created () {
    this.checkLoginStatus()
  },
  methods: {
    checkLoginStatus () {
      if (localStorage.getItem('Token')) {
        this.loginStatus = true
        this.user = this.profile.user_type
      }
    },
    changeStatus (value) {
      console.log(value)
    },
    logout () {
      localStorage.removeItem('Token')
      localStorage.removeItem('profile')
      this.loginStatus = false
    }
  }
}
</script>
<style>
.navbar {
  border-radius:0px 0px 3px black;
}
.white {
  color:white;
}
.fixed {
  position:fixed;
}
.contant {
  position:absolute;
  top:0px;
  bottom:0px;
  left:0px;
  right:0px;
  height:100%;
}
.brand {
  margin-top:1em;
  box-shadow: 0px 0px 5px #222;
  background-color: #202229;
  border-radius:5em;
  padding:0.5em;
  font-weight: 600;
  color:#FFFFFF;
  letter-spacing: 1px;
}
.navbar-brand {
  padding:0px;
}
.sidebar {
  height:100vh;
  background-color: #383C48;
}
.flex-s {
  display:flex;
  align-items: center;
  justify-content: flex-start;
}
.username img {
  margin-right:0.5em;
  border:2px solid #777;
  border-radius: 5em;
}
.username h4 {
  color:white;
  text-shadow: 1px 1px 2px black;
}
.options ul {
  list-style-type: none;
  padding:0px;
  margin:0px;
}
.options li {
  width:100%;
  list-style-type: none;
  padding:0.5em;
  margin:0em;
  border-radius:5px;
}
a {
  text-decoration:none;
}
a:hover {
  text-decoration: none;
}
.heading {
  padding:0.1em;
  background-color: white;
  color:#383C48;
}
.heading h5 {
  font-weight: 600;
}
.no-pr {
  padding-right:0px;
}
.no-pl {
  padding-left:0px;
}
.sticky {
  position:sticky;
  top:0px;
}
.navbar-nav li a{
  color:white!important;
  font-weight: 500;
  border-bottom:3px solid black;
}
.navbar-nav li a:hover {
  color:#777!important;
  border-bottom:3px solid white!important;
}
</style>
