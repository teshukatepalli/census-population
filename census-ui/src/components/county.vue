<template>
  <div class="county">
    <div class="welcome-board text-center">
      <h4>Counties list</h4>
    </div>
    <div class="tiles">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3" v-for="item in 65">
           <div class="tile flex-c">
            <div class="tile-data">
              <span class="num">{{item}} county</span>
              <br>
              <!-- <p>view details</p> -->
              <button type="button" class="btn btn-primary no-pad" v-on:click="$router.push('/viewCounty')">view details</button>
            </div>
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
<style scoped>
* {
  color:black;
}
.welcome-board  h4 {
  padding:0.5em;
  background-color: white;
  color:#383c48;
  box-shadow: 0px 0px 3px #0000003d;
}
.tiles {
  padding:1em 1em;
}
.tile {
  /*height:100px;*/
  /*display:flex;*/
  /*align-items: center;*/
  /*justify-content: center;*/
  text-align: center;
  margin:1em 0em;
  /*border:1px solid black;*/
  background-color: #383c48;
}
.flex-c {
  display:flex;
  align-items: center;
  justify-content: center;
}
.num {
  color:white;
  font-size: 2em;
  font-weight: 500;
}
.tile-data {
  padding:1em;
}
</style>
