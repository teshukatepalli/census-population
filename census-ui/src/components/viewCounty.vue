<template>
  <div class="viewCounty">
    <div class="welcome-board">
      <div class="row">
        <div class="col-md-6">
          <h4>View County Details</h4>
        </div>
        <div class="col-md-6 text-right">
          <button type="button" class="btn btn-primary" v-on:click="$router.push('/editCounty')">Edit Details</button>
        </div>
      </div>
    </div>
    <div class="details">
      <div class="container-fluid bg-white">
        <div class="row flex-c">
          <div class="col-md-10">
            <div class="details-heading">
              <h4 class="text-center">County</h4>
            </div>
            <div>
              <table style="width:100%">
                <tr>
                  <th>Population</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Population MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Population - Under 18 years</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Population - Under 18 years MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Population - Under 18 years - Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Population - Under 18 years - Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Population - Under 18 years - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Population - Under 18 years - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Population - 18 to 64 years</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Population - 18 to 64 years MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Population - 18 to 64 years - Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Population - 18 to 64 years - Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Population - 18 to 64 years - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Population - 18 to 64 years - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Population - 65 years and older</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Population - 65 years and older MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Population - 65 years and older - Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Population - 65 years and older - Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Population - 65 years and older - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Population - 65 years and older - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Population - 19 to 25 years</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Population - 19 to 25 years MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Population - 19 to 25 years - Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Population - 19 to 25 years - Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Population - 19 to 25 years - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Population - 19 to 25 years - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Male</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Male MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Male - Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Male - Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Male - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Male - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Female</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Female MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Female - Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Female - Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Female - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Female - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - White</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - White MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - White - Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - White - Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - White - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - White - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Black or African American</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Black or African American MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Black or African American - Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Black or African American - Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Black or African American - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Black or African American - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - American Indian and Alaska Native</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - American Indian and Alaska Native MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - American Indian and Alaska Native - Uninsured</th>
                  <td></td> 
                </tr>

                <tr>
                  <th>Race - One Race - American Indian and Alaska Native - Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - American Indian and Alaska Native - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - American Indian and Alaska Native - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Asian</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Asian MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Asian - Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Asian - Uninsured MOE"</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Asian - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Asian - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Native Hawaiian and Other Pacific Islander</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Native Hawaiian and Other Pacific Islander MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Native Hawaiian and Other Pacific Islander - Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Native Hawaiian and Other Pacific Islander - Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Native Hawaiian and Other Pacific Islander - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Native Hawaiian and Other Pacific Islander - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Some other race</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Some other race MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Some other race - Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Some other race - Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Some other race - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - One Race - Some other race - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - Two or more races</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - Two or more races MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - Two or more races - Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - Two or more races - Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - Two or more races - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Race - Two or more races - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>White, not Hispanic or Latino</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>White, not Hispanic or Latino MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>White, not Hispanic or Latino - Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>White, not Hispanic or Latino - Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>White, not Hispanic or Latino - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>White, not Hispanic or Latino - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Hispanic or Latino (of any race)</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Hispanic or Latino (of any race) MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Hispanic or Latino (of any race) - Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Hispanic or Latino (of any race) - Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Hispanic or Latino (of any race) - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Hispanic or Latino (of any race) - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - Under $25,000</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - Under $25,000 MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - Under $25,000 - Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - Under $25,000 - Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - Under $25,000 - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - Under $25,000 - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - $25,000 to $49,999</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - $25,000 to $49,999 MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - $25,000 to $49,999 - Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - $25,000 to $49,999 - Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - $25,000 to $49,999 - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - $25,000 to $49,999 - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - $50,000 to $74,999</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - $50,000 to $74,999 MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - $50,000 to $74,999 - Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - $50,000 to $74,999 - Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - $50,000 to $74,999 - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - $50,000 to $74,999 - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - $75,000 to $99,999</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - $75,000 to $99,999 MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - $75,000 to $99,999 - Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - $75,000 to $99,999 - Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - $75,000 to $99,999 - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - $75,000 to $99,999 - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - $100,000 and over</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - $100,000 and over MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - $100,000 and over - Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - $100,000 and over - Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - $100,000 and over - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Household Income - $100,000 and over - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Ratio of Income to Poverty Level</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Ratio of Income to Poverty Level MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Ratio of Income to Poverty Level - Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Ratio of Income to Poverty Level - Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Ratio of Income to Poverty Level - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Ratio of Income to Poverty Level - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Ratio of Income to Poverty Level - Under 1.38 of poverty</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Ratio of Income to Poverty Level - Under 1.38 of poverty MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Ratio of Income to Poverty Level - Under 1.38 of poverty - Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Ratio of Income to Poverty Level - Under 1.38 of poverty - Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Ratio of Income to Poverty Level - Under 1.38 of poverty - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Ratio of Income to Poverty Level - Under 1.38 of poverty - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Ratio of Income to Poverty Level - 1.38 to 1.99 of poverty</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Ratio of Income to Poverty Level - 1.38 to 1.99 of poverty MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Ratio of Income to Poverty Level - 1.38 to 1.99 of poverty - Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Ratio of Income to Poverty Level - 1.38 to 1.99 of poverty - Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Ratio of Income to Poverty Level - 1.38 to 1.99 of poverty - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Ratio of Income to Poverty Level - 1.38 to 1.99 of poverty - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Ratio of Income to Poverty Level - 2.00 of poverty and over</th>
                  <td></td> 
                </tr><tr>
                  <th>Ratio of Income to Poverty Level - 2.00 of poverty and over MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Ratio of Income to Poverty Level - 2.00 of poverty and over - Uninsured</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Ratio of Income to Poverty Level - 2.00 of poverty and over - Uninsured MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Ratio of Income to Poverty Level - 2.00 of poverty and over - Uninsured Pct</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Ratio of Income to Poverty Level - 2.00 of poverty and over - Uninsured Pct MOE</th>
                  <td></td> 
                </tr>
                <tr>
                  <th>Location 1</th>
                  <td></td> 
                </tr>
              </table>
            </div>    
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: 'App'
}
</script>
<style scoped>
* {
  color:black;
}
.welcome-board {
  padding:0.5em;
  background-color: white;
  color:#383c48;
  box-shadow: 0px 0px 3px #0000003d;
}
.btn {
  padding:0px 5px;
  margin:0px;
}
.flex-c {
  display:flex;
  align-items: center;
  justify-content: center;
}
.bg-white {
  margin:0.5em;
  background-color: white;
}
.details-heading {
  margin:0.5em 0em;
  padding:0.5em;
  background-color: #383c48;
}
.details-heading h4 {
  color:white;
}
table {
  /*border:1px solid #777;*/
  box-shadow: 0px 0px 1px #777;
}
th,td {
  padding:0.5em;
  border:1px solid #777;
  /*box-shadow: 0px 0px 2px #777;*/
}
th {
  width:50%;
}
td {
  width:50%;
}
</style>
