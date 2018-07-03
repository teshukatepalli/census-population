<template>
  <div id="app">
    <div>
      <div class="contant">
        <div class="row ">
          <div class="col-md-2 sticky no-pr">
            <div class="sidebar">
              <div class="col-md-12 text-center">
                <h4 class="brand">Census</h4>
                <hr>
                <div class="username flex-s">
                  <img src="http://via.placeholder.com/30x30" alt="user-img" class="img-responsive ">
                  <h4>Teshu</h4>
                </div>
                <hr>
                <div class="options">
                  <ul class="text-left">
                    <li><router-link to="dashboard">Dashboard</router-link></li>
                    <li><router-link to="county">Counties</router-link></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-10 no-pl">
            <div>
              <router-view/>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>
</template>

<script>
export default {
  name: 'App'
}
</script>
<style>
<style>
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
  color:white;
  text-decoration:none;
  color:white;
}
a:hover {
  color:white;
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
</style>
