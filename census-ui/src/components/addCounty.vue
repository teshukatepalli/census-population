<template>
	<div>
		<div class="model">
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
    <div class="model">
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
    <div class="model">
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
    <div class="model">
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
    <div class="model">
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
    <div class="model">
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
	</div>
</template>
<script>
export default {
	data () {
		return {
			msg: 'add County Details'
		}
	}
}
</script>
<style scoped>
</style>