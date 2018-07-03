<template>
  <div class="dashboard">
    <div class="welcome-board text-center">
      <h4>Dashboard</h4>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="tiles">
            <h4>Population with/without Health Insurence Coverages</h4>
            <hr>
          </div>
        </div>
        <div class="col-md-6 text-center">
          <div class="tiles">
            <h4>Population without Health Insurence coveages</h4>
            <hr>
            
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
<style scoped>
* {
  color:black;
}
.welcome-board  h4{
  padding:0.5em;
  background-color: white;
  color:#383c48;
  box-shadow: 0px 0px 3px #0000003d;
}
.tiles {
  padding:1em;
  margin:1em 0em;
  background-color: white;
}
</style>
