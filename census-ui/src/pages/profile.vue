<template>
  <div>
  	<div class="row flex-c">
  		<div class="col-md-3 text-right">
  			<img src="https://www.w3schools.com/howto/img_avatar.png" height="150px" alt="profile_pic" class="img-circle">
  		</div>
      <div class="col-md-3">
        <p>Name: {{profile.name}}</p>
        <p>Email: {{profile.email}}</p>
        <p v-if="profile.county_id">County Id : {{profile.county_id}}</p>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-12">
        <br>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>county id</th>
              <th>name</th>
              <th>email</th>
              <th>user type</th>  
            </tr>
          </thead>
          <tbody>
            <tr  v-for="item in userList.users">
              <td v-if="item.county_id">{{item.county_id}}</td>
              <td v-if="item.county_id">{{item.name}}</td>
              <td v-if="item.county_id">{{item.email}}</td>
              <td v-if="item.county_id">{{item.user_type}}</td>
              <!-- <td>{{item.Uninsured}}</td> -->
              <!-- <td>{{item.Uninsured_MOE}}</td> -->
              <!-- <td>{{item.Uninsured_Pct}}%</td> -->
              <!-- <td>{{item.Uninsured_Pct_MOE}}%</td> -->
            </tr>
            <tr v-if="userList.users.length==0">
                <td class="text-center" colspan="8">
                  No counties Found
                </td>
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
      msg: 'Hello profile',
      userList: {},
      profile: JSON.parse(localStorage.getItem('profile'))
    }
  },
  created () {
    this.getUserList()
  },
  methods: {
    getUserList () {
     
      this.$axios.get(this.$api + '/api/users')
      .then(response => {
        this.userList = response.data
        // this.createPagin(this.countiesList)
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