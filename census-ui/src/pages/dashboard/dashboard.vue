<template>
  <div class="county">
    <div class="row">
      <div class="col-md-6">
        <h3>Dashboard</h3>
      </div>
      <div class="col-md-6 text-right">
      </div>
    </div>
    <!-- countieslist -->
    <div class="row">
      <div class="col-md-12" style="width: 100%;overflow-x: auto;">
        <br>
        <table class="table table-bordered" style="width: 100%;overflow-x: auto;">
          <thead>
            <tr>
              <th style="min-width: 200px;"></th>
              <th v-for="item in countiesList" v-if="countiesList.length>0">{{item.County}}</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><b>Population</b></td>
              <td v-for="item in countiesList" v-if="countiesList.length>0">{{item.Population}}</td>
            </tr>
            <tr >
              <td><b>Population MOE</b></td>
              <td v-for="item in countiesList" v-if="countiesList.length>0">{{item.Population_MOE}}</td>
            </tr>
            <tr>
              <td><b>Uninsured</b></td>
              <td v-for="item in countiesList" v-if="countiesList.length>0">{{item.Uninsured}}</td>
            </tr>
            <tr>
              <td><b>Uninsured MOE</b></td>
              <td v-for="item in countiesList" v-if="countiesList.length>0">{{item.Uninsured_MOE}}</td>
            </tr>
            <tr>
              <td><b>Uninsured PCT</b></td>
              <td v-for="item in countiesList" v-if="countiesList.length>0">{{item.Uninsured_Pct}}%</td>
            </tr>
            <tr>
              <td><b>Uninsured PCT MOE</b></td>
              <td v-for="item in countiesList" v-if="countiesList.length>0">{{item.Uninsured_Pct_MOE}}%</td>
            </tr>
          </tbody>
        </table>
      </div>
          {{ageList}}
    </div>
  </div>
</template>
<script>
export default {
  data () {
    return {
      msg: 'hello',
      countiesList: [],
      ageList: {}
    }
  },
  created() {
    this.getcountyList()
    this.getageList()
  },
  methods: {
    getcountyList() {
      this.$axios.get('http://localhost:8000/api/population')
      .then(response => {
        this.countiesList = response.data.counties
      })
    },
    getageList() {
      this.$axios.get('http://localhost:8000/api/population_age')
      .then(response => {
        this.ageList = response.data
      })
    }
  }
}
</script>
<style scoped>
</style>
