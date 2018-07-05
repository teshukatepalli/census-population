<template>
  <div class="content">
  	<div class="container" style="margin-top: 20vh;">
  	    <div class="row">
  	    	<div class="col-md-4 col-md-offset-4">
  	    		<div class="input-form-group">
  	    			<label for="uname"><b>Username</b></label>
	  	    		<input type="email" class="form-control" v-model="payload.email" placeholder="Enter Username" name="uname" required>
  	    		</div>
  	    		<div class="input-form-group">
	  	    		<label for="psw"><b>Password</b></label>
  		    		<input type="password" class="form-control" v-model="payload.password" placeholder="Enter Password" name="psw" required>
				</div>
  	    		<button type="submit" v-on:click="login">Login</button>
  	    	</div>
  	    </div>
  	  </div>
  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  data () {
    return {
      msg: 'Welcome to Your census population App',
      payload: {
      	email: 'admin@gmail.com',
      	password: '123456'
      }
    }
  },
  methods: {
  	login() {
  		this.$axios.post('http://localhost:8000/api/login', this.payload)
  		.then(res => {
  			if (res.data.success === true) {
  				localStorage.setItem('Token', res.data.token)
  				localStorage.setItem('profile', JSON.stringify(res.data.profile))
          this.$emit('change', {login: true})
  				if (res.data.profile.user_type === 'admin') {
  					window.location.href='/'
  				}
  			}
  		})
  	}
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
* {
	color:black;
}
</style>
