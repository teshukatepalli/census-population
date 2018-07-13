<template>
  <div class="viewCounty">
    <div class="details">
      <div class="container-fluid bg-white">
        <div class="row flex-c">
          <div class="col-md-10">
            {{newuser}}
            <div v-if="main" class="col-md-12" style="width: 100%;overflow-x: auto;">
              <br>
              <div class="welcome-board text-center">
                <h4>Add New County</h4>
              </div>
              <hr>
              <div class="row">

                <div class="col-md-6">
                  <h4> Add Basic Population</h4>
                  <br>
                </div>
                <div class="col-md-6">
                  <br>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <table class="table table-bordered" style="width: 100%;overflow-x: auto;">
                    <thead>
                      <tr>
                        <th>Basic Population</th>
                        <th>Details</th>
                      </tr>
                    </thead>
                    <tbody class="half">
                      <tr>
                        <td><b>County Name: </b></td>
                        <td><input type="text" v-model="newcounty.County"></td>
                      </tr>
                      <tr>
                        <td><b>Population: </b></td>
                        <td><input type="text" v-model="newcounty.Population"></td>
                      </tr>
                      <tr >
                        <td><b>Population MOE: </b></td>
                        <td><input type="text" v-model="newcounty.Population_MOE"></td>
                      </tr>
                      <tr>
                        <td><b>Uninsured: </b></td>
                        <td><input type="text" v-model="newcounty.Uninsured"></td>
                      </tr>
                      <tr>
                        <td><b>Uninsured MOE: </b></td>
                        <td><input type="text" v-model="newcounty.Uninsured_MOE"></td>
                      </tr>
                      <tr>
                        <td><b>Uninsured PCT: </b></td>
                        <td><input type="text" v-model="newcounty.Uninsured_Pct">%</td>
                      </tr>
                      <tr>
                        <td><b>Uninsured PCT MOE: </b></td>
                        <td><input type="text" v-model="newcounty.Uninsured_Pct_MOE">%</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="text-center">
                <button class="btn btn-primary" v-on:click="addCounty()">Add</button>
              </div>
            </div>
            <div v-if="ageform" class="model">
              <div class="welcome-board text-center">
                <h4>Add Age Details for {{this.countyData.County}}</h4>
              </div>
              <hr>
              <table class="table table-bordered" style="width: 100%;overflow-x: auto;">
                <thead>
                  <tr>
                    <th>Age</th>
                    <th>from <span <input type="text" v-model="ages.age_from"></span> to <span <input type="text" v-model="ages.age_to"></span></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><b>Population</b></td>
                    <td><input type="text" v-model="ages.Population"></td>
                  </tr>
                  <tr >
                    <td><b>Population MOE</b></td>
                    <td><input type="text" v-model="ages.Population_MOE"></td>
                  </tr>
                  <tr>
                    <td><b>Uninsured</b></td>
                    <td><input type="text" v-model="ages.Uninsured"></td>
                  </tr>
                  <tr>
                    <td><b>Uninsured MOE</b></td>
                    <td><input type="text" v-model="ages.Uninsured_MOE"></td>
                  </tr>
                  <tr>
                    <td><b>Uninsured PCT</b></td>
                    <td><input type="text" v-model="ages.Uninsured_Pct">%</td>
                  </tr>
                  <tr>
                    <td><b>Uninsured PCT MOE</b></td>
                    <td><input type="text" v-model="ages.Uninsured_Pct_MOE">%</td>
                  </tr>
                </tbody>
              </table>
              <button class="btn btn-primary" v-on:click="addData('ages')">Add</button>
              <button class="btn btn-primary" v-on:click="changeForm('gender')">Later</button>
            </div>
            <div v-if="genderform" class="model">
              <table class="table table-bordered" style="width: 100%;overflow-x: auto;">
                <thead>
                  <tr>
                    <th>gender</th>
                    <th><input type="text" v-model="gender.gender"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Population</td>
                    <td><input type="text" v-model="gender.Population"></td>
                  </tr>
                  <tr >
                    <td><b>Population MOE</b></td>
                    <td><input type="text" v-model="gender.Population_MOE"></td>
                  </tr>
                  <tr>
                    <td><b>Uninsured</b></td>
                    <td><input type="text" v-model="gender.Uninsured"></td>
                  </tr>
                  <tr>
                    <td><b>Uninsured MOE</b></td>
                    <td><input type="text" v-model="gender.Uninsured_MOE"></td>
                  </tr>
                  <tr>
                    <td><b>Uninsured PCT</b></td>
                    <td><input type="text" v-model="gender.Uninsured_Pct">%</td>
                  </tr>
                  <tr>
                    <td><b>Uninsured PCT MOE</b></td>
                    <td><input type="text" v-model="gender.Uninsured_Pct_MOE">%</td>
                  </tr>
                </tbody>
              </table>
              <button class="btn btn-primary" v-on:click="addData('gender')">Add</button>
              <button class="btn btn-primary" v-on:click="changeForm('races')">Later</button>
            </div>
            <br>
            <div v-if="racesfrom" class="model ">
              <table class="table table-bordered" style="width: 100%;overflow-x: auto;">
                <thead>
                  <tr>
                    <th>Races</th>
                    <th><input type="text" v-model="races.ror_label"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Population</td>
                    <td><input type="text" v-model="races.Population"></td>
                  </tr>
                  <tr >
                    <td><b>Population MOE</b></td>
                    <td><input type="text" v-model="races.Population_MOE"></td>
                  </tr>
                  <tr>
                    <td><b>Uninsured</b></td>
                    <td><input type="text" v-model="races.Uninsured"></td>
                  </tr>
                  <tr>
                    <td><b>Uninsured MOE</b></td>
                    <td><input type="text" v-model="races.Uninsured_MOE"></td>
                  </tr>
                  <tr>
                    <td><b>Uninsured PCT</b></td>
                    <td><input type="text" v-model="races.Uninsured_Pct">%</td>
                  </tr>
                  <tr>
                    <td><b>Uninsured PCT MOE</b></td>
                    <td><input type="text" v-model="races.Uninsured_Pct_MOE">%</td>
                  </tr>
                </tbody>
              </table>
              <button class="btn btn-primary" v-on:click="addData('races')">Done</button>
              <button class="btn btn-primary" v-on:click="changeForm('income')">Later</button>
            </div>
            <br>
            <div v-if="incomeform" class="model">
              <table class="table table-bordered" style="width: 100%;overflow-x: auto;">
                <thead>
                  <tr>
                    <th>Ratio of income</th>
                    <th>from <span <input type="text" v-model="hh.income_from"></span> to <span <input type="text" v-model="hh.income_to"></span></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Population</td>
                    <td><input type="text" v-model="hh.Population"></td>
                  </tr>
                  <tr >
                    <td><b>Population MOE</b></td>
                    <td><input type="text" v-model="hh.Population_MOE"></td>
                  </tr>
                  <tr>
                    <td><b>Uninsured</b></td>
                    <td><input type="text" v-model="hh.Uninsured"></td>
                  </tr>
                  <tr>
                    <td><b>Uninsured MOE</b></td>
                    <td><input type="text" v-model="hh.Uninsured_MOE"></td>
                  </tr>
                  <tr>
                    <td><b>Uninsured PCT</b></td>
                    <td><input type="text" v-model="hh.Uninsured_Pct">%</td>
                  </tr>
                  <tr>
                    <td><b>Uninsured PCT MOE</b></td>
                    <td><input type="text" v-model="hh.Uninsured_Pct_MOE">%</td>
                  </tr>
                </tbody>
              </table>
              <button class="btn btn-primary" v-on:click="addData('income')">Add</button>
              <button class="btn btn-primary" v-on:click="changeForm('poverty')">Later</button>
            </div>
            <br>
            <div v-if="povertyform" class="model">
              <table class="table table-bordered" style="width: 100%;overflow-x: auto;">
                <thead>
                  <tr>
                    <th>Poverty Line</th>
                    <th>from <span <input type="text" v-model="poverty.line_from"></span> to <span <input type="text" v-model="poverty.line_to"></span></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Population</td>
                    <td><input type="text" v-model="poverty.Population"></td>
                  </tr>
                  <tr >
                    <td><b>Population MOE</b></td>
                    <td><input type="text" v-model="poverty.Population_MOE"></td>
                  </tr>
                  <tr>
                    <td><b>Uninsured</b></td>
                    <td><input type="text" v-model="poverty.Uninsured"></td>
                  </tr>
                  <tr>
                    <td><b>Uninsured MOE</b></td>
                    <td><input type="text" v-model="poverty.Uninsured_MOE"></td>
                  </tr>
                  <tr>
                    <td><b>Uninsured PCT</b></td>
                    <td><input type="text" v-model="poverty.Uninsured_Pct">%</td>
                  </tr>
                  <tr>
                    <td><b>Uninsured PCT MOE</b></td>
                    <td><input type="text" v-model="poverty.Uninsured_Pct_MOE">%</td>
                  </tr>
                </tbody>
              </table>
              <button class="btn btn-primary" v-on:click="addData('poverty')">Add</button>
              <button class="btn btn-primary" v-on:click="addData('main')">Done</button>
            </div>
            <div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data () {
    return {
      name: 'App',
      main: 1,
      newcounty: {
        County: '',
        Population: '',
        Population_MOE: '',
        Uninsured: '',
        Uninsured_MOE: '',
        Uninsured_Pct: '',
        Uninsured_Pct_MOE: ''
      },
      ages: {
        county_id: 0,
        age_from: '',
        age_to: '',
        Population: '',
        Population_MOE: '',
        Uninsured: '',
        Uninsured_MOE: '',
        Uninsured_Pct: '',
        Uninsured_Pct_MOE: ''
      },
      gender: {
        county_id: 0,
        gender: '',
        Population: '',
        Population_MOE: '',
        Uninsured: '',
        Uninsured_MOE: '',
        Uninsured_Pct: '',
        Uninsured_Pct_MOE: ''
      },
      races: {
        county_id: 0,
        ror_label: '',
        Population: '',
        Population_MOE: '',
        Uninsured: '',
        Uninsured_MOE: '',
        Uninsured_Pct: '',
        Uninsured_Pct_MOE: ''
      },
      hh: {
        county_id: 0,
        income_from: '',
        income_to: '',
        Population: '',
        Population_MOE: '',
        Uninsured: '',
        Uninsured_MOE: '',
        Uninsured_Pct: '',
        Uninsured_Pct_MOE: ''
      },
      poverty: {
        county_id: 0,
        line_from: '',
        line_to: '',
        Population: '',
        Population_MOE: '',
        Uninsured: '',
        Uninsured_MOE: '',
        Uninsured_Pct: '',
        Uninsured_Pct_MOE: ''
      },
      ageform: 0,
      genderform: 0,
      racesfrom: 0,
      incomeform: 0,
      povertyform: 0,
      countyData: {},
      newuser: {
        name: '',
        email: '',
        password: '$2y$10$ou3.gXPuntz4qn30..fyHeccR5irXVRXRQTzdyBFeNZmUTlyi3/bW',
        county_id: 0,
        user_type: 'County'
      },
      userData: {}
    }
  },
  created () {
  },
  methods: {
    addCounty () {
      // debugger;
      this.$axios.post(this.$api + '/api/population',this.newcounty)
      .then(response => {
        this.countyData = response.data
        console.log(this.data)
        this.newuser.county_id = this.countyData.id
        this.ages.county_id = this.countyData.id
        this.gender.county_id = this.countyData.id
        this.races.county_id = this.countyData.id
        this.hh.county_id = this.countyData.id
        this.poverty.county_id = this.countyData.id
        this.newuser.name = this.countyData.County
        this.newuser.email = this.countyData.County+'@gmail.com'
        this.addNewUser()
        alert('County Inserted')
        this.changeForm('ages')

      })
    },
    addNewUser () {
      this.$axios.post(this.$api + '/api/newuser',this.newuser)
      .then(response => {
        this.userData = response.data
        console.log(this.userData)
        alert('user login details created Please check it on counties list')
      })
    },
    changeForm (data) {
      if(data === 'ages') {
        this.main = 0
        this.ageform = 1
      }
      if(data === 'gender') {
        this.ageform = 0
        this.genderform = 1
      }
      if(data === 'races') {
        this.genderform = 0
        this.racesfrom = 1
      }
      if(data === 'income') {
        this.racesfrom = 0
        this.incomeform = 1
      }
      if(data === 'poverty') {
        this.incomeform = 0
        this.povertyform = 1
      }
    },
    addData (data) {
      if(data === 'ages') {
        this.$axios.post(this.$api + '/api/population_age',this.ages)
        .then(response => {
          this.userData = response.data
          this.main = 0
          this.ageform = 1
          alert('Age data Added')
          console.log(this.userData)
          this.ages.age_from = null,
          this.ages.age_to = null,
          this.ages.Population = null,
          this.ages.Population_MOE = null,
          this.ages.Uninsured = null,
          this.ages.Uninsured_MOE = null,
          this.ages.Uninsured_Pct = null,
          this.ages.Uninsured_Pct_MOE = null
        })
      }
      if(data === 'gender') {
        this.$axios.post(this.$api + '/api/population_gender',this.gender)
        .then(response => {
          this.userData = response.data
          this.ageform = 0
          this.genderform = 1
          alert('Gender Data Added')
          console.log(this.userData)
          this.gender.gender = null,
          this.gender.Population = null,
          this.gender.Population_MOE = null,
          this.gender.Uninsured = null,
          this.gender.Uninsured_MOE = null,
          this.gender.Uninsured_Pct = null,
          this.gender.Uninsured_Pct_MOE = null
        })
      }
      if(data === 'races') {
        this.$axios.post(this.$api + '/api/population_race',this.races)
        .then(response => {
          this.userData = response.data
          this.genderform = 0
          this.racesfrom = 1
          alert('Races Data Added')
          console.log(this.userData)
          this.races.ror_label = null,
          this.races.Population = null,
          this.races.Population_MOE = null,
          this.races.Uninsured = null,
          this.races.Uninsured_MOE = null,
          this.races.Uninsured_Pct = null,
          this.races.Uninsured_Pct_MOE = null
        })
      }
      if(data === 'income') {
        this.$axios.post(this.$api + '/api/population_household',this.hh)
        .then(response => {
          this.userData = response.data
          this.racesfrom = 0
          this.incomeform = 1
          alert('Ratio of Income Added')
          console.log(this.userData)
          this.hh.income_from = null,
          this.hh.income_to = null,
          this.hh.Population = null,
          this.hh.Population_MOE = null,
          this.hh.Uninsured = null,
          this.hh.Uninsured_MOE = null,
          this.hh.Uninsured_Pct = null,
          this.hh.Uninsured_Pct_MOE = null
        })
      }
      if(data === 'poverty') {
        this.$axios.post(this.$api + '/api/population_poverty',this.poverty)
        .then(response => {
          this.userData = response.data
          this.incomeform = 0
          this.povertyform = 1
          alert('Poverty')
          console.log(this.userData)
          this.poverty.line_from = null
          this.poverty.line_to = null
          this.poverty.Population = null,
          this.poverty.Population_MOE = null,
          this.poverty.Uninsured = null,
          this.poverty.Uninsured_MOE = null,
          this.poverty.Uninsured_Pct = null,
          this.poverty.Uninsured_Pct_MOE = null
        })
      }
      if(data === 'main') {
        this.povertyform = 0
        this.main = 1
        this.newcounty.County = null,
        this.newcounty.Population = null,
        this.newcounty.Population_MOE = null,
        this.newcounty.Uninsured = null,
        this.newcounty.Uninsured_MOE = null,
        this.newcounty.Uninsured_Pct = null,
        this.newcounty.Uninsured_Pct_MOE = null
      }
    }
  }
}
</script>
<style scoped>
* {
  color:black;
}
.flex-c {
  display:flex;
  align-items: center;
  justify-content: center;
}
</style>
