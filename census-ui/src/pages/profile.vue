<template>
  <div>
  	<div class="row flex-c">
  		<div class="col-md-3">
  			<img src="http://via.placeholder.com/200x200" alt="profile_pic" class="img-circle">
  		</div>
      <div class="col-md-3">
        <p>Name: Admin</p>
        <p>Email: Admin@gmail.com</p>
        <p>Password: 123456</p>
      </div>
  	</div>
    <hr>
    <div class="counties_list text-center">
      <p>Counties List</p>
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
              </tr>
            </thead>
            <tbody>
              <tr  v-for="item in countiesList" v-if="countiesList.length>0">
                <td>{{item.County}}</td>
                <td>{{item.Population}}</td>
                <td>{{item.Population_MOE}}</td>
                <td>{{item.Uninsured}}</td>
                <td>{{item.Uninsured_MOE}}</td>
                <td>{{item.Uninsured_Pct}}%</td>
                <td>{{item.Uninsured_Pct_MOE}}%</td>
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
    </div>
  </div>
</template>
<script>
export default {
  data () {
    return {
      msg: 'Hello profile',
      countiesList: {}
    }
  },
  created () {
    this.getcountyList()
  },
  methods: {
    getcountyList () {
      this.$axios.get('http://localhost:8000/api/population')
      .then(response => {
        this.countiesList = response.data.counties
        this.createPagin(this.countiesList)
      })
    },
  }
}
</script>
<style scoped>
  .flex-c {
    display:flex;
    align-items: center;
    justify-content: center;
  }
</style>