<template>
  <div class="viewCounty">
    <div v-if="active">
      <div class="row">
        <div class="col-md-6">
          <h2>{{county.County}} Details</h2>
        </div>
        <div class="col-md-6 text-right">
        </div>
      </div>
      <br>
      <!-- county details -->
      <div class="col-md-12" style="width: 100%;overflow-x: auto;">
        <br>
        <div class="row">
          <div class="col-md-6">
            <h4>Basic Population</h4>
            <button class="btn btn-primary" style="float: right;" v-on:click="getActive('population')">Edit</button>
          </div>
          <div class="col-md-6 text-right">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <table class="table table-bordered" style="width: 100%;overflow-x: auto;">
              <thead>
                <tr>
                  <th>Basic Population</th>
                  <th>Details</th>
                </tr>
              </thead>
              <tbody class="half">
                <tr>
                  <td><b>Population</b></td>
                  <td>{{county.Population}}</td>
                </tr>
                <tr >
                  <td><b>Population MOE</b></td>
                  <td>{{county.Population_MOE}}</td>
                </tr>
                <tr>
                  <td><b>Uninsured</b></td>
                  <td>{{county.Uninsured}}</td>
                </tr>
                <tr>
                  <td><b>Uninsured MOE</b></td>
                  <td>{{county.Uninsured_MOE}}</td>
                </tr>
                <tr>
                  <td><b>Uninsured PCT</b></td>
                  <td>{{county.Uninsured_Pct}}%</td>
                </tr>
                <tr>
                  <td><b>Uninsured PCT MOE</b></td>
                  <td>{{county.Uninsured_Pct_MOE}}%</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-6">
            <table class="table table-bordered" style="width: 100%;overflow-x: auto;" v-if="county && county.user">
              <thead>
                <tr>
                  <th></th>
                  <th>Details</th>
                </tr>
              </thead>
              <tbody class="half">
                <tr>
                  <td><b>Name</b></td>
                  <td>{{county.user.name}}</td>
                </tr>
                <tr >
                  <td><b>Email</b></td>
                  <td>{{county.user.email}}</td>
                </tr>
                <tr>
                  <td><b>User Type</b></td>
                  <td>{{county.user.user_type}}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <hr>
      <div class="col-md-12" style="width: 100%;overflow-x: auto;">
        <br>
        <div class="row">
          <div class="col-md-6">
            <h4>Based on Age Details</h4>
          </div>
          <div class="col-md-6 text-right">
            <button class="btn btn-primary" v-on:click="getActive('age')">Edit</button>
          </div>
        </div>
        <div>
          <table class="table table-bordered" style="width: 100%;overflow-x: auto;">
            <thead>
              <tr>
                <th>Age</th>
                <th v-for="item in county.ages">{{item.age_from}} to {{item.age_to}}</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Population</td>
                <td v-for="item in county.ages">{{item.Population}}</td>
              </tr>
              <tr >
                <td><b>Population MOE</b></td>
                <td v-for="item in county.ages">{{item.Population_MOE}}</td>
              </tr>
              <tr>
                <td><b>Uninsured</b></td>
                <td v-for="item in county.ages">{{item.Uninsured}}</td>
              </tr>
              <tr>
                <td><b>Uninsured MOE</b></td>
                <td v-for="item in county.ages">{{item.Uninsured_MOE}}</td>
              </tr>
              <tr>
                <td><b>Uninsured PCT</b></td>
                <td v-for="item in county.ages">{{item.Uninsured_Pct}}%</td>
              </tr>
              <tr>
                <td><b>Uninsured PCT MOE</b></td>
                <td v-for="item in county.ages">{{item.Uninsured_Pct_MOE}}%</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <hr>
      <div class="col-md-12" style="width: 100%;overflow-x: auto;">
        <br>
        <div class="row">
          <div class="col-md-6">
            <h4>Based on Gender</h4>
          </div>
          <div class="col-md-6 text-right">
            <button class="btn btn-primary" v-on:click="getActive('gender')">Edit</button>
          </div>
        </div>
        <div>
          <table class="table table-bordered" style="width: 100%;overflow-x: auto;">
            <thead>
              <tr>
                <th>gender</th>
                <th v-for="item in county.genders">{{item.gender}}</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Population</td>
                <td v-for="item in county.genders">{{item.Population}}</td>
              </tr>
              <tr >
                <td><b>Population MOE</b></td>
                <td v-for="item in county.genders">{{item.Population_MOE}}</td>
              </tr>
              <tr>
                <td><b>Uninsured</b></td>
                <td v-for="item in county.genders">{{item.Uninsured}}</td>
              </tr>
              <tr>
                <td><b>Uninsured MOE</b></td>
                <td v-for="item in county.genders">{{item.Uninsured_MOE}}</td>
              </tr>
              <tr>
                <td><b>Uninsured PCT</b></td>
                <td v-for="item in county.genders">{{item.Uninsured_Pct}}%</td>
              </tr>
              <tr>
                <td><b>Uninsured PCT MOE</b></td>
                <td v-for="item in county.genders">{{item.Uninsured_Pct_MOE}}%</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <hr>
      <div class="col-md-12" style="width: 100%;overflow-x: auto;">
        <br>
        <div class="row">
          <div class="col-md-6">
            <h4>Based on Races</h4>
          </div>
          <div class="col-md-6 text-right">
            <button class="btn btn-primary" v-on:click="getActive('races')">Edit</button>
          </div>
        </div>
        <div>
          <table class="table table-bordered" style="width: 100%;overflow-x: auto;">
            <thead>
              <tr>
                <th>Races</th>
                <th v-for="item in county.rors">{{item.ror_label}}</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Population</td>
                <td v-for="item in county.rors">{{item.Population}}</td>
              </tr>
              <tr >
                <td><b>Population MOE</b></td>
                <td v-for="item in county.rors">{{item.Population_MOE}}</td>
              </tr>
              <tr>
                <td><b>Uninsured</b></td>
                <td v-for="item in county.rors">{{item.Uninsured}}</td>
              </tr>
              <tr>
                <td><b>Uninsured MOE</b></td>
                <td v-for="item in county.rors">{{item.Uninsured_MOE}}</td>
              </tr>
              <tr>
                <td><b>Uninsured PCT</b></td>
                <td v-for="item in county.rors">{{item.Uninsured_Pct}}%</td>
              </tr>
              <tr>
                <td><b>Uninsured PCT MOE</b></td>
                <td v-for="item in county.rors">{{item.Uninsured_Pct_MOE}}%</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <hr>
      <div class="col-md-12" style="width: 100%;overflow-x: auto;">
        <br>
        <div class="row">
          <div class="col-md-6">
            <h4>Based on Ratio of Income</h4>
          </div>
          <div class="col-md-6 text-right">
            <button class="btn btn-primary" v-on:click="getActive('roi')">Edit</button>
          </div>
        </div>
        <div>
          <table class="table table-bordered" style="width: 100%;overflow-x: auto;">
            <thead>
              <tr>
                <th>Ratio of income</th>
                <th v-for="item in county.household">{{item.income_from}} to {{item.income_to}}</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Population</td>
                <td v-for="item in county.household">{{item.Population}}</td>
              </tr>
              <tr >
                <td><b>Population MOE</b></td>
                <td v-for="item in county.household">{{item.Population_MOE}}</td>
              </tr>
              <tr>
                <td><b>Uninsured</b></td>
                <td v-for="item in county.household">{{item.Uninsured}}</td>
              </tr>
              <tr>
                <td><b>Uninsured MOE</b></td>
                <td v-for="item in county.household">{{item.Uninsured_MOE}}</td>
              </tr>
              <tr>
                <td><b>Uninsured PCT</b></td>
                <td v-for="item in county.household">{{item.Uninsured_Pct}}%</td>
              </tr>
              <tr>
                <td><b>Uninsured PCT MOE</b></td>
                <td v-for="item in county.household">{{item.Uninsured_Pct_MOE}}%</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <hr>
      <div class="col-md-12" style="width: 100%;overflow-x: auto;">
        <br>
        <div class="row">
          <div class="col-md-6">
            <h4>Based on Poverty Line</h4>
          </div>
          <div class="col-md-6 text-right">
            <button class="btn btn-primary" v-on:click="getActive('poverty')">Edit</button>
          </div>
        </div>
        <div>
          <table class="table table-bordered" style="width: 100%;overflow-x: auto;">
            <thead>
              <tr>
                <th>Poverty Line</th>
                <th v-for="item in county.poverty">{{item.line_from}} to {{item.line_to}}</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Population</td>
                <td v-for="item in county.poverty">{{item.Population}}</td>
              </tr>
              <tr >
                <td><b>Population MOE</b></td>
                <td v-for="item in county.poverty">{{item.Population_MOE}}</td>
              </tr>
              <tr>
                <td><b>Uninsured</b></td>
                <td v-for="item in county.poverty">{{item.Uninsured}}</td>
              </tr>
              <tr>
                <td><b>Uninsured MOE</b></td>
                <td v-for="item in county.poverty">{{item.Uninsured_MOE}}</td>
              </tr>
              <tr>
                <td><b>Uninsured PCT</b></td>
                <td v-for="item in county.poverty">{{item.Uninsured_Pct}}%</td>
              </tr>
              <tr>
                <td><b>Uninsured PCT MOE</b></td>
                <td v-for="item in county.poverty">{{item.Uninsured_Pct_MOE}}%</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- {{populatonCounty}} -->
    <div v-if="model_role==='population'" class="model">
      <table class="table table-bordered" style="width: 100%;overflow-x: auto;">
        <thead>
          <tr>
            <th>Basic Population</th>
            <th>Details</th>
          </tr>
        </thead>
        <tbody class="half">
          <tr>
            <td><b>Population</b></td>
            <td><input type="text" v-model="payloads.Population"></td>
          </tr>
          <tr >
            <td><b>Population MOE</b></td>
            <td><input type="text" v-model="payloads.Population_MOE"></td>
          </tr>
          <tr>
            <td><b>Uninsured</b></td>
            <td><input type="text" v-model="payloads.Uninsured"></td>
          </tr>
          <tr>
            <td><b>Uninsured MOE</b></td>
            <td><input type="text" v-model="payloads.Uninsured_MOE"></td>
          </tr>
          <tr>
            <td><b>Uninsured PCT</b></td>
            <td><input type="text" v-model="payloads.Uninsured_Pct">%</td>
          </tr>
          <tr>
            <td><b>Uninsured PCT MOE</b></td>
            <td><input type="text" v-model="payloads.Uninsured_Pct_MOE">%</td>
          </tr>
        </tbody>
      </table>
      <button class="btn btn-primary" v-on:click="getInactive('population')">Done</button>
    </div>
    <div v-if="model_role==='age'" class="model">
      <table class="table table-bordered" style="width: 100%;overflow-x: auto;">
        <thead>
          <tr>
            <th>Age</th>
            <th v-for="item in payload.ages">{{item.age_from}} to {{item.age_to}}</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Population</td>
            <td v-for="item in payload.ages"><input type="text" v-model="item.Population"></td>
          </tr>
          <tr >
            <td><b>Population MOE</b></td>
            <td v-for="item in payload.ages"><input type="text" v-model="item.Population_MOE"></td>
          </tr>
          <tr>
            <td><b>Uninsured</b></td>
            <td v-for="item in payload.ages"><input type="text" v-model="item.Uninsured"></td>
          </tr>
          <tr>
            <td><b>Uninsured MOE</b></td>
            <td v-for="item in payload.ages"><input type="text" v-model="item.Uninsured_MOE"></td>
          </tr>
          <tr>
            <td><b>Uninsured PCT</b></td>
            <td v-for="item in payload.ages"><input type="text" v-model="item.Uninsured_Pct">%</td>
          </tr>
          <tr>
            <td><b>Uninsured PCT MOE</b></td>
            <td v-for="item in payload.ages"><input type="text" v-model="item.Uninsured_Pct_MOE">%</td>
          </tr>
        </tbody>
      </table>
      <button class="btn btn-primary" v-on:click="getInactive('age')">Done</button>
    </div>
    <div v-if="model_role==='gender'" class="model">
      <table class="table table-bordered" style="width: 100%;overflow-x: auto;">
        <thead>
          <tr>
            <th>gender</th>
            <th v-for="item in payload.genders">{{item.gender}}</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Population</td>
            <td v-for="item in payload.genders"><input type="text" v-model="item.Population"></td>
          </tr>
          <tr >
            <td><b>Population MOE</b></td>
            <td v-for="item in payload.genders"><input type="text" v-model="item.Population_MOE"></td>
          </tr>
          <tr>
            <td><b>Uninsured</b></td>
            <td v-for="item in payload.genders"><input type="text" v-model="item.Uninsured"></td>
          </tr>
          <tr>
            <td><b>Uninsured MOE</b></td>
            <td v-for="item in payload.genders"><input type="text" v-model="item.Uninsured_MOE"></td>
          </tr>
          <tr>
            <td><b>Uninsured PCT</b></td>
            <td v-for="item in payload.genders"><input type="text" v-model="item.Uninsured_Pct">%</td>
          </tr>
          <tr>
            <td><b>Uninsured PCT MOE</b></td>
            <td v-for="item in payload.genders"><input type="text" v-model="item.Uninsured_Pct_MOE">%</td>
          </tr>
        </tbody>
      </table>
      <button class="btn btn-primary" v-on:click="getInactive('gender')">Done</button>
    </div>
    <div v-if="model_role==='races'" class=" raceBlock model ">
      <table class="table table-bordered" style="width: 100%;overflow-x: auto;">
        <thead>
          <tr>
            <th>Races</th>
            <th v-for="item in payload.rors">{{item.ror_label}}</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Population</td>
            <td v-for="item in payload.rors"><input type="text" v-model="item.Population"></td>
          </tr>
          <tr >
            <td><b>Population MOE</b></td>
            <td v-for="item in payload.rors"><input type="text" v-model="item.Population_MOE"></td>
          </tr>
          <tr>
            <td><b>Uninsured</b></td>
            <td v-for="item in payload.rors"><input type="text" v-model="item.Uninsured"></td>
          </tr>
          <tr>
            <td><b>Uninsured MOE</b></td>
            <td v-for="item in payload.rors"><input type="text" v-model="item.Uninsured_MOE"></td>
          </tr>
          <tr>
            <td><b>Uninsured PCT</b></td>
            <td v-for="item in payload.rors"><input type="text" v-model="item.Uninsured_Pct">%</td>
          </tr>
          <tr>
            <td><b>Uninsured PCT MOE</b></td>
            <td v-for="item in payload.rors"><input type="text" v-model="item.Uninsured_Pct_MOE">%</td>
          </tr>
        </tbody>
      </table>
      <button class="btn btn-primary" v-on:click="getInactive('races')">Done</button>
    </div>
    <div v-if="model_role==='roi'" class="model">
      <table class="table table-bordered" style="width: 100%;overflow-x: auto;">
        <thead>
          <tr>
            <th>Ratio of income</th>
            <th v-for="item in payload.household">{{item.income_from}} to {{item.income_to}}</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Population</td>
            <td v-for="item in payload.household"><input type="text" v-model="item.Population"></td>
          </tr>
          <tr >
            <td><b>Population MOE</b></td>
            <td v-for="item in payload.household"><input type="text" v-model="item.Population_MOE"></td>
          </tr>
          <tr>
            <td><b>Uninsured</b></td>
            <td v-for="item in payload.household"><input type="text" v-model="item.Uninsured"></td>
          </tr>
          <tr>
            <td><b>Uninsured MOE</b></td>
            <td v-for="item in payload.household"><input type="text" v-model="item.Uninsured_MOE"></td>
          </tr>
          <tr>
            <td><b>Uninsured PCT</b></td>
            <td v-for="item in payload.household"><input type="text" v-model="item.Uninsured_Pct">%</td>
          </tr>
          <tr>
            <td><b>Uninsured PCT MOE</b></td>
            <td v-for="item in payload.household"><input type="text" v-model="item.Uninsured_Pct_MOE">%</td>
          </tr>
        </tbody>
      </table>
      <button class="btn btn-primary" v-on:click="getInactive('roi')">Done</button>
    </div>
    <div v-if="model_role==='poverty'" class="model">
      <table class="table table-bordered" style="width: 100%;overflow-x: auto;">
        <thead>
          <tr>
            <th>Poverty Line</th>
            <th v-for="item in payload.poverty">{{item.line_from}} to {{item.line_to}}</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Population</td>
            <td v-for="item in payload.poverty"><input type="text" v-model="item.Population"></td>
          </tr>
          <tr >
            <td><b>Population MOE</b></td>
            <td v-for="item in payload.poverty"><input type="text" v-model="item.Population_MOE"></td>
          </tr>
          <tr>
            <td><b>Uninsured</b></td>
            <td v-for="item in payload.poverty"><input type="text" v-model="item.Uninsured"></td>
          </tr>
          <tr>
            <td><b>Uninsured MOE</b></td>
            <td v-for="item in payload.poverty"><input type="text" v-model="item.Uninsured_MOE"></td>
          </tr>
          <tr>
            <td><b>Uninsured PCT</b></td>
            <td v-for="item in payload.poverty"><input type="text" v-model="item.Uninsured_Pct">%</td>
          </tr>
          <tr>
            <td><b>Uninsured PCT MOE</b></td>
            <td v-for="item in payload.poverty"><input type="text" v-model="item.Uninsured_Pct_MOE">%</td>
          </tr>
        </tbody>
      </table>
      <button class="btn btn-primary" v-on:click="getInactive('poverty')">Done</button>
    </div>
  </div>
</template>
<script>
export default {
  props: ['id'],
  data () {
    return {
      county: {},
      population: 0,
      age: 0,
      races: 0,
      roi: 0,
      gender: 0,
      poverty: 0,
      active: 1,
      payload: {},
      model_role: '',
      payloads: {
        Population: '',
        Population_MOE: '',
        Uninsured: '',
        Uninsured_MOE: '',
        Uninsured_Pct: '',
        Uninsured_Pct_MOE: ''
      }
    }
  },
  created () {
    if (this.id === 'null') {
      window.location.href = '/county'
    } else {
      this.getCountyDetails()
    }
  },
  methods: {
    getCountyDetails () {
      this.$axios.get(this.$api + '/api/population/' + this.id)
      .then(res => {
        if (res.data.success === true) {
          this.county = res.data.county
        }
      })
    },
    putCountyDetails (data) {
      this.$axios.put(this.$api + '/api/population/' + this.id,)
      .then(res => {
        if (res.data.success === true) {
          this.msg = res.data
        }
      })
    },
    getActive (data) {
      this.payload = JSON.parse(JSON.stringify(this.county))
      this.model_role = data
      if(data === 'population') {
        this.payloads.Population = this.county.Population  
        this.payloads.Population_MOE = this.county.Population_MOE  
        this.payloads.Uninsured = this.county.Uninsured  
        this.payloads.Uninsured_MOE = this.county.Uninsured_MOE  
        this.payloads.Uninsured_Pct = this.county.Uninsured_Pct  
        this.payloads.Uninsured_Pct_MOE = this.county.Uninsured_Pct_MOE  
      }
    },
    getInactive(data) {
      this.model_role = ''
      var postData = {}
      postData.update_type = data
      if(data === 'population') {
        postData.data = this.payload.county
        this.$axios.put (this.$api + '/api/population/' + this.id, this.payloads)
        .then(res => {
          console.log(res.data)
          this.getCountyDetails()
        })
      }
      if(data === 'age') {
        postData.data = this.payload.ages
        this.$axios.post(this.$api + '/api/updateall/', postData)
        .then(res => {
          console.log(res.data)
          this.getCountyDetails()
        })
      }
       if(data === 'gender') {
        postData.data = this.payload.genders
        this.$axios.post(this.$api + '/api/updateall/', postData)
        .then(res => {
          console.log(res.data)
          this.getCountyDetails()
        })
      }
      if(data === 'roi') {
        postData.data = this.payload.household
        this.$axios.post(this.$api + '/api/updateall/', postData)
        .then(res => {
          console.log(res.data)
          this.getCountyDetails()
        })
      }
      if(data === 'races') {
        postData.data = this.payload.rors
        this.$axios.post(this.$api + '/api/updateall/', postData)
        .then(res => {
          console.log(res.data)
          this.getCountyDetails()
        })
      }
      if(data === 'poverty') {
        postData.data = this.payload.poverty
        this.$axios.post(this.$api + '/api/updateall/', postData)
        .then(res => {
          console.log(res.data)
          this.getCountyDetails()
        }) 
      }

      // update the data

    }
  }
}
</script>
<style>
.half td {
  width:50%;
}
th {
  background-color: #777;
}
.model {
  padding:10% 10%;
  position:absolute;
  height:100vh;
  top:0;
  bottom:0;
  left:0;
  right:0;
  background-color:#000000b8;
}
.raceBlock table{
  width:100%!important;
  padding:0px 0px!important;
  overflow-x: scroll;
}
.raceBlock input {
  width:100px;
}
.model table {
  width:80%;
  padding:10% 10%;
  background-color: white;
}
</style>
