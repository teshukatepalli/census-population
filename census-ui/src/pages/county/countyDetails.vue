<template>
  <div class="county">
    <div v-if="active">
      <div class="welcome-board text-center">
        <h4>Counties list</h4>
      </div>
      <div>
        <button type="button" class="btn-primary no-pad" v-on:click="$router.push('/addCounty')">add new</button>
      </div>
      <div class="tiles">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3" v-for="item in countyDetails.populations">
             <div class="tile flex-c">
              <div class="tile-data">
                <span class="num">{{item.County}}</span>
                <br>
                <!-- <p>view details</p> -->
                <button type="button" class="btn btn-primary no-pad" v-on:click="openPage(item.id)">view details</button>
              </div>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div v-if="inactive">
      <!-- <view-county :view-county="viewCounty"></view-county> -->
      <edit-county :edit-county="editCounty"></edit-county>
    </div>
  </div>
</template>
<script>
import viewCounty from './viewCounty.vue'
import editCounty from './editCounty.vue'
export default {
  props: ['countyDetails'],
  components: {
    viewCounty,
    editCounty
  },
  data () {
    return {
      msg: 'Welcome to Your Vue.js App',
      name: 'HelloWorld',
      countyList: {},
      active: 1,
      inactive: 0,
      viewCounty: {},
      editCounty: {}
    }
  },
  created () {
  },
  methods: {
    openPage (id) {
      this.active = 0
      this.inactive =1
      // this.$router.push('/view/' + id)
      // this.$axios.get('http://localhost:8000/api/population' + '/' + id)
      // .then(response => {
      //   console.log(response)
      //   this.viewCounty = response.data.population
      //   console.log(this.viewCounty)
      // })
      this.$axios.get('http://localhost:8000/api/population' + '/' + id)
      .then(response => {
        this.editCounty = response.data.population
      })
    },

  }
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
