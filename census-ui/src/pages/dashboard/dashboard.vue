<template>
  <div class="county">
    <div class="row">
      <div class="col-md-6">
        <h3>Dashboard</h3>
      </div>
    </div>
    <div class="row">
      <div class="text-center"><h4>Population</h4></div>
      <div class="col-md-12" style="width: 100%;overflow-x: auto;">
        <br>
        <table class="table table-bordered" style="width: 100%;overflow-x: auto;" v-if="dashboardData">
          <thead>
            <tr>
              <th style="min-width: 200px;">Basic Population</th>
              <th v-for="item in dashboardData.population">{{item.County}}</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><b>Population</b></td>
              <td v-for="item in dashboardData.population" :style="{'background-color': getColor(item.Population/dashboardData.population_max.Population)}">{{item.Population}}</td>
            </tr>
            <tr >
              <td><b>Population MOE</b></td>
              <td v-for="item in dashboardData.population" :style="{'background-color': getColor(item.Population_MOE/dashboardData.population_max.Population_MOE)}">{{item.Population_MOE}}</td>
            </tr>
            <tr>
              <td><b>Uninsured</b></td>
              <td v-for="item in dashboardData.population" :style="{'background-color': getColor(item.Uninsured/dashboardData.population_max.Uninsured)}">{{item.Uninsured}}</td>
              <!-- <td v-for="item in dashboardData.population">{{item.Uninsured}}</td> -->
            </tr>
            <tr>
              <td><b>Uninsured MOE</b></td>
              <td v-for="item in dashboardData.population" :style="{'background-color': getColor(item.Uninsured_MOE/dashboardData.population_max.Uninsured_MOE)}">{{item.Uninsured_MOE}}</td>
              <!-- <td v-for="item in dashboardData.population">{{item.Uninsured_MOE}}</td> -->
            </tr>
            <tr>
              <td><b>Uninsured PCT</b></td>
              <td v-for="item in dashboardData.population" :style="{'background-color': getColor(item.Uninsured_Pct/dashboardData.population_max.Uninsured_Pct)}">{{item.Uninsured_Pct}}</td>
              <!-- <td v-for="item in dashboardData.population">{{item.Uninsured_Pct}}%</td> -->
            </tr>
            <tr>
              <td><b>Uninsured PCT MOE</b></td>
              <td v-for="item in dashboardData.population" :style="{'background-color': getColor(item.Uninsured_Pct_MOE/dashboardData.population_max.Uninsured_Pct_MOE)}">{{item.Uninsured_Pct_MOE}}</td>
              <!-- <td v-for="item in dashboardData.population">{{item.Uninsured_Pct_MOE}}%</td> -->
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12" style="width: 100%;overflow-x: auto;">
      <div class="text-center"><h4>Based on Gender</h4></div>
        <br>
        <table class="table table-bordered" style="width: 100%;overflow-x: auto;" v-if="dashboardData">
          <thead>
            <tr>
              <th style="min-width: 200px;"> Gender</th>
              <th v-for="item in dashboardData.population">{{item.County}}</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><b>Male / Population</b></td>
              <!-- <td></td> -->
              <td  v-for="item in ageList" v-if="item.gender === 'male'" :style="{'background-color': getColor(item.Population/dashboardData.population_max.Population)}">{{item.Population}}</td>
            </tr>
            <tr >
              <td><b>Male / Population MOE</b></td>
              <td  v-for="item in ageList" v-if="item.gender === 'male'" :style="{'background-color': getColor(item.Population_MOE/dashboardData.population_max.Population_MOE)}">{{item.Population_MOE}}</td>
            </tr>
            <tr>
              <td><b>Male / Uninsured</b></td>
              <td   v-for="item in ageList" v-if="item.gender === 'male'" :style="{'background-color': getColor(item.Uninsured/dashboardData.population_max.Uninsured)}">{{item.Uninsured}}</td>
            </tr>
            <tr>
              <td><b>Male / Uninsured MOE</b></td>
              <td v-for="item in ageList" v-if="item.gender === 'male'" :style="{'background-color': getColor(item.Uninsured_MOE/dashboardData.population_max.Uninsured_MOE)}">{{item.Uninsured_MOE}}</td>
            </tr>
            <tr>
              <td><b>Male  / Uninsured PCT</b></td>
              <td v-for="item in ageList" v-if="item.gender === 'male'" :style="{'background-color': getColor(item.Uninsured_Pct/dashboardData.population_max.Uninsured_Pct)}">{{item.Uninsured_Pct}}</td>
              <!-- <td v-for="item in dashboardData.population">{{item.Uninsured_Pct}}%</td> -->
            </tr>
            <tr>
              <td><b>Male / Uninsured PCT MOE</b></td>
              <td v-for="item in ageList" v-if="item.gender === 'male'" :style="{'background-color': getColor(item.Uninsured_Pct_MOE/dashboardData.population_max.Uninsured_Pct_MOE)}">{{item.Uninsured_Pct_MOE}}</td>
            </tr>
            <tr>
              <td><b>Female / Population</b></td>
              <!-- <td></td> -->
              <td  v-for="item in ageList" v-if="item.gender === 'female'" :style="{'background-color': getColor(item.Population/dashboardData.population_max.Population)}">{{item.Population}}</td>
            </tr>
            <tr >
              <td><b>Female / Population MOE</b></td>
              <td  v-for="item in ageList" v-if="item.gender === 'female'" :style="{'background-color': getColor(item.Population_MOE/dashboardData.population_max.Population_MOE)}">{{item.Population_MOE}}</td>
            </tr>
            <tr>
              <td><b>Female / Uninsured</b></td>
              <td   v-for="item in ageList" v-if="item.gender === 'female'" :style="{'background-color': getColor(item.Uninsured/dashboardData.population_max.Uninsured)}">{{item.Uninsured}}</td>
            </tr>
            <tr>
              <td><b>Female / Uninsured MOE</b></td>
              <td v-for="item in ageList" v-if="item.gender === 'female'" :style="{'background-color': getColor(item.Uninsured_MOE/dashboardData.population_max.Uninsured_MOE)}">{{item.Uninsured_MOE}}</td>
            </tr>
            <tr>
              <td><b>Female  / Uninsured PCT</b></td>
              <td v-for="item in ageList" v-if="item.gender === 'female'" :style="{'background-color': getColor(item.Uninsured_Pct/dashboardData.population_max.Uninsured_Pct)}">{{item.Uninsured_Pct}}</td>
              <!-- <td v-for="item in dashboardData.population">{{item.Uninsured_Pct}}%</td> -->
            </tr>
            <tr>
              <td><b>Female / Uninsured PCT MOE</b></td>
              <td v-for="item in ageList" v-if="item.gender === 'female'" :style="{'background-color': getColor(item.Uninsured_Pct_MOE/dashboardData.population_max.Uninsured_Pct_MOE)}">{{item.Uninsured_Pct_MOE}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data () { 
    return {
      msg: 'hello',
      countiesList: [],
      ageList: {},
      dashboardData: {},
      lengths: null
    }
  },
  created() {
    this.getcountyList()
    this.getageList()
    this.getDashboard()
  },
  methods: {
    getcountyList() {
      this.$axios.get(this.$api + '/api/population')
      .then(response => {
        this.countiesList = response.data.counties
      })
    },
    getageList() {
      this.$axios.get(this.$api + '/api/population_gender')
      .then(response => {
        this.ageList = response.data.gender
      })
    },
    getDashboard() {
      this.$axios.get(this.$api + '/api/dashboard')
      .then(response => {
        this.dashboardData = response.data.data
      })
    },
    getSum (datalist, column) {
      let len = datalist.length
      let sum = 0;
      for (var i=0; i<len;i++) {
        sum += datalist[i].column
      }
      return sum
    },
    getColor (sum) {
      return 'rgba(194, 108, 50,' + sum + ')';
    }
  }
}
</script>
<style scoped>
.p-1 {
  padding:1em;
}
th {
  background-color: #333;
  color:white;
}
</style>
