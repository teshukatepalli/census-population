<template>
  <div class="viewCounty">
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
        </div>
        <div class="col-md-6 text-right">
          <button class="btn btn-primary" v-on:click="getActive('population')">Edit</button>
        </div>
      </div>
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
   <!--  <div class="row">
      <div class="col-md-12">
        {{county.Population}} <br>
        {{county.Population_MOE}} <br>
        {{county.Uninsured}} <br>
        {{county.Uninsured_MOE}} <br>
        <hr>
        <div v-for="item in county.ages">
          {{item}}
        </div>
        <hr>
        <div v-for="item in county.genders">
          {{item}}
        </div>
        {{county.genders}}
        <hr>
        <div v-for="item in county.household">
          {{item}}
        </div>
        {{county.household}}
        <hr>
        <div v-for="item in county.poverty">
          {{item}}
        </div>
        {{county.poverty}}
        <hr>
        {{county.rors}}
      </div>
    </div> -->
    <div v-if="population" class="model">
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
            <td><input type="text" v-model="county.Population"></td>
          </tr>
          <tr >
            <td><b>Population MOE</b></td>
            <td><input type="text" v-model="county.Population_MOE"></td>
          </tr>
          <tr>
            <td><b>Uninsured</b></td>
            <td><input type="text" v-model="county.Uninsured"></td>
          </tr>
          <tr>
            <td><b>Uninsured MOE</b></td>
            <td><input type="text" v-model="county.Uninsured_MOE"></td>
          </tr>
          <tr>
            <td><b>Uninsured PCT</b></td>
            <td><input type="text" v-model="county.Uninsured_Pct">%</td>
          </tr>
          <tr>
            <td><b>Uninsured PCT MOE</b></td>
            <td><input type="text" v-model="county.Uninsured_Pct_MOE">%</td>
          </tr>
        </tbody>
      </table>
      <button class="btn btn-primary" v-on:click="getInactive('population')">Done</button>
    </div>
    <div v-if="age" class="model">
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
            <td v-for="item in county.ages"><input type="text" v-model="item.Population"></td>
          </tr>
          <tr >
            <td><b>Population MOE</b></td>
            <td v-for="item in county.ages"><input type="text" v-model="item.Population_MOE"></td>
          </tr>
          <tr>
            <td><b>Uninsured</b></td>
            <td v-for="item in county.ages"><input type="text" v-model="item.Uninsured"></td>
          </tr>
          <tr>
            <td><b>Uninsured MOE</b></td>
            <td v-for="item in county.ages"><input type="text" v-model="item.Uninsured_MOE"></td>
          </tr>
          <tr>
            <td><b>Uninsured PCT</b></td>
            <td v-for="item in county.ages"><input type="text" v-model="item.Uninsured_Pct">%</td>
          </tr>
          <tr>
            <td><b>Uninsured PCT MOE</b></td>
            <td v-for="item in county.ages"><input type="text" v-model="item.Uninsured_Pct_MOE">%</td>
          </tr>
        </tbody>
      </table>
      <button class="btn btn-primary" v-on:click="getInactive('age')">Done</button>
    </div>
    <div v-if="gender" class="model">
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
            <td v-for="item in county.genders"><input type="text" v-model="item.Population"></td>
          </tr>
          <tr >
            <td><b>Population MOE</b></td>
            <td v-for="item in county.genders"><input type="text" v-model="item.Population_MOE"></td>
          </tr>
          <tr>
            <td><b>Uninsured</b></td>
            <td v-for="item in county.genders"><input type="text" v-model="item.Uninsured"></td>
          </tr>
          <tr>
            <td><b>Uninsured MOE</b></td>
            <td v-for="item in county.genders"><input type="text" v-model="item.Uninsured_MOE"></td>
          </tr>
          <tr>
            <td><b>Uninsured PCT</b></td>
            <td v-for="item in county.genders"><input type="text" v-model="item.Uninsured_Pct">%</td>
          </tr>
          <tr>
            <td><b>Uninsured PCT MOE</b></td>
            <td v-for="item in county.genders"><input type="text" v-model="item.Uninsured_Pct_MOE">%</td>
          </tr>
        </tbody>
      </table>
      <button class="btn btn-primary" v-on:click="getInactive('gender')">Done</button>
    </div>
    <div v-if="races" class="model">
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
            <td v-for="item in county.rors"><input type="text" v-model="item.Population"></td>
          </tr>
          <tr >
            <td><b>Population MOE</b></td>
            <td v-for="item in county.rors"><input type="text" v-model="item.Population_MOE"></td>
          </tr>
          <tr>
            <td><b>Uninsured</b></td>
            <td v-for="item in county.rors"><input type="text" v-model="item.Uninsured"></td>
          </tr>
          <tr>
            <td><b>Uninsured MOE</b></td>
            <td v-for="item in county.rors"><input type="text" v-model="item.Uninsured_MOE"></td>
          </tr>
          <tr>
            <td><b>Uninsured PCT</b></td>
            <td v-for="item in county.rors"><input type="text" v-model="item.Uninsured_Pct">%</td>
          </tr>
          <tr>
            <td><b>Uninsured PCT MOE</b></td>
            <td v-for="item in county.rors"><input type="text" v-model="item.Uninsured_Pct_MOE">%</td>
          </tr>
        </tbody>
      </table>
      <button class="btn btn-primary" v-on:click="getInactive('races')">Done</button>
    </div>
    <div v-if="roi" class="model">
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
            <td v-for="item in county.household"><input type="text" v-model="item.Population"></td>
          </tr>
          <tr >
            <td><b>Population MOE</b></td>
            <td v-for="item in county.household"><input type="text" v-model="item.Population_MOE"></td>
          </tr>
          <tr>
            <td><b>Uninsured</b></td>
            <td v-for="item in county.household"><input type="text" v-model="item.Uninsured"></td>
          </tr>
          <tr>
            <td><b>Uninsured MOE</b></td>
            <td v-for="item in county.household"><input type="text" v-model="item.Uninsured_MOE"></td>
          </tr>
          <tr>
            <td><b>Uninsured PCT</b></td>
            <td v-for="item in county.household"><input type="text" v-model="item.Uninsured_Pct">%</td>
          </tr>
          <tr>
            <td><b>Uninsured PCT MOE</b></td>
            <td v-for="item in county.household"><input type="text" v-model="item.Uninsured_Pct_MOE">%</td>
          </tr>
        </tbody>
      </table>
      <button class="btn btn-primary" v-on:click="getInactive('roi')">Done</button>
    </div>
    <div v-if="poverty" class="model">
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
            <td v-for="item in county.poverty"><input type="text" v-model="item.Population"></td>
          </tr>
          <tr >
            <td><b>Population MOE</b></td>
            <td v-for="item in county.poverty"><input type="text" v-model="item.Population_MOE"></td>
          </tr>
          <tr>
            <td><b>Uninsured</b></td>
            <td v-for="item in county.poverty"><input type="text" v-model="item.Uninsured"></td>
          </tr>
          <tr>
            <td><b>Uninsured MOE</b></td>
            <td v-for="item in county.poverty"><input type="text" v-model="item.Uninsured_MOE"></td>
          </tr>
          <tr>
            <td><b>Uninsured PCT</b></td>
            <td v-for="item in county.poverty"><input type="text" v-model="item.Uninsured_Pct">%</td>
          </tr>
          <tr>
            <td><b>Uninsured PCT MOE</b></td>
            <td v-for="item in county.poverty"><input type="text" v-model="item.Uninsured_Pct_MOE">%</td>
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
      roi: 0,
      gender: 0,
      poverty: 0,
      races: 0
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
      this.$axios.get('http://localhost:8000/api/population/' + this.id)
      .then(res => {
        if (res.data.success === true) {
          this.county = res.data.county
        }
      })
    },
    getActive (data) {
      if(data === 'population') {
        this.population = 1
      }
      if(data === 'age') {
        this.age = 1
      }
      if(data === 'roi') {
        this.roi = 1
      }
      if(data === 'races') {
        this.races = 1
      }
      if(data === 'poverty') {
        this.poverty = 1
      }
      if(data === 'gender') {
        this.gender = 1
      }
    },
    getInactive(data) {
      if(data === 'population') {
        this.population = 0
      }
      if(data === 'age') {
        this.age = 0
      }
      if(data === 'roi') {
        this.roi === 0
      }
      if(data === 'races') {
        this.races === 0
      }
      if(data === 'poverty') {
        this.poverty === 0
      }
       if(data === 'gender') {
        this.gender = 0
      }
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
  top:0;
  bottom:0;
  left:0;
  right:0;
  background-color:#000000b8;
}
.model table {
  width:80%;
  padding:10% 10%;
  background-color: white;
}
</style>
