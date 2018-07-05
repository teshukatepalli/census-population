<template>
  <div class="county">
    <div class="row">
      <div class="col-md-6">
        <h3>Counties</h3>
      </div>
      <div class="col-md-6 text-right">
        <button class="btn btn-primary">+ New County</button>
      </div>
    </div>
    <!-- countieslist -->
    <div class="row">
      <div class="col-md-12">
        <br>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>County Name</th>
              <th>Population</th>
              <th>Population_MOE</th>
              <th>Uninsured</th>
              <th>Uninsured_MOE</th>
              <th>Uninsured_Pct</th>
              <th>Uninsured_Pct_MOE</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="item in countiesList" v-if="countiesList.length>0">
              <td>{{item.County}}</td>
              <td>{{item.Population}}</td>
              <td>{{item.Population_MOE}}</td>
              <td>{{item.Uninsured}}</td>
              <td>{{item.Uninsured_MOE}}</td>
              <td>{{item.Uninsured_Pct}}%</td>
              <td>{{item.Uninsured_Pct_MOE}}%</td>
              <td><button class="btn btn-primary" v-on:click="$router.push('/county/' + item.id)">View Details</button> <button class="btn btn-danger" v-on:click="deleteCounty(item.id)">Delete County</button></td>
            </tr>
            <tr v-if="countiesList.length==0">
              <td class="text-center" colspan="8">
                No counties Found
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- <county-details :county-details="countyDetails"></county-details> -->
  </div>
</template>
<script>
  // import countyDetails from './countyDetails.vue'
export default {
  // components: {
  //   countyDetails,
  // },
  data () {
    return {
      msg: 'hello',
      countiesList: []
    }
  },
  created() {
    this.getcountyList()
  },
  methods: {
    getcountyList () {
      this.$axios.get('http://localhost:8000/api/population')
      .then(response => {
        this.countiesList = response.data.counties
      })
    },
    deleteCounty (id) {
      this.$axios.delete('http://localhost:8000/api/population/'+ id)
      .then(response => {
        this.msg = response.data.message
      alert(this.msg)
      })
      this.getcountyList()
    }
  }
}
</script>
<style scoped>
</style>
