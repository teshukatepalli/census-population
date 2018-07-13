<template>
  <div class="county">
    <div class="row">
      <div class="col-md-6">
        <h3>Counties</h3>
      </div>
      <div class="col-md-6 text-right">
        <button class="btn btn-primary" v-on:click="$router.push('/newCounty')">+ New County</button>
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
            <tr  v-for="item in pageinList" v-if="countiesList.length>0">
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
    <div class="row text-center">
      <div class="col-md-2 col-md-offset-1">
        <button class="btn btn-primary" @click.prevent="prevPage">Previous Page</button>
      </div>
      <div class="col-md-2 col-xs-6 text-center mb-top-1">
        <p><span>Current Page: <b>{{paginData.pageNum}}/{{paginData.pages}}</b></span></p>
      </div>
      <div class="col-md-2">
        <p class="text-center"><span>Total: <b>{{paginData.total}}</b></span></p>
      </div>
      <div class="col-md-2">
        Per Page: <select  v-model="paginData.perPage" v-on:change="createPagin(countiesList)">
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="20">20</option>
          <option value="50">50</option>
          <option value="100">100</option>
        </select>
      </div>
      <div class="col-md-2">
        <button class="btn btn-primary" @click.prevent="nextPage">Next Page</button>
      </div>
    </div>
  </div>
</div>
</template>
<script>
  // import countyDetails from './countyDetails.vue'
export default {
  data () {
    return {
      msg: 'hello',
      countiesList: [],
      paginData: {
        perPage: 10,
        total: 0,
        pages: 0,
        pageNum: 1
      },
      pageinList: [],
      len: 0
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
        this.createPagin(this.countiesList)
      })
    },
    deleteCounty (id) {
      this.$axios.delete('http://localhost:8000/api/population/'+ id)
      .then(response => {
        this.msg = response.data.message
      alert(this.msg)
      this.getcountyList()
      })
    },
    callCreatePagin (dalaList) {

    },
    createPagin (datalist) {
      let len = datalist.length
      this.paginData.total = len
      this.paginData.pageNum = 1
      if (len < this.paginData.perPage) {
        this.paginData.pages = 1
        this.paginate(datalist)
      } else {
        if (len % this.paginData.perPage > 0) {
          this.paginData.pages = parseInt(len / this.paginData.perPage) + 1
          // this.paginData.pages = len / this.paginData.perPage
        } else {
          this.paginData.pages = len / this.paginData.perPage
        }
        if (this.paginData.total > 0) {
          this.paginate(datalist)
        }
      }
      
    },
    paginate (datalist) {
      let len = datalist.length
      let start = (this.paginData.pageNum - 1) * this.paginData.perPage
      let end = this.paginData.pageNum * this.paginData.perPage
      this.pageinList = []
      if (end < len) {
        for (var i = start; i < end; i++) {
          this.pageinList.push(datalist[i])
        }
      } else {
        for (var j = start; j < this.paginData.total; j++) {
          this.pageinList.push(datalist[j])
        }
      }
    },
    nextPage () {
      if (this.paginData.pageNum < this.paginData.pages) {
        this.paginData.pageNum += 1
        this.paginate(this.countiesList)
      }
    },
    prevPage () {
      if (this.paginData.pageNum > 1) {
        this.paginData.pageNum -= 1
        this.paginate(this.countiesList)
      }
    }
  }
}
</script>
<style scoped>
</style>
