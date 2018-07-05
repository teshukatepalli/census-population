<template>
  <div class="viewCounty">
    <div class="row">
      <div class="col-md-6">
        <h2>County Details</h2>
      </div>
      <div class="col-md-6 text-right">
        <button class="btn btn-primary">Edit</button>
      </div>
    </div>
    <br>
    <!-- county details -->
    <div class="row">
      <div class="col-md-12">
        {{county}}
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: ['id'],
  data () {
    return {
      county: {}
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
    }
  }
}
</script>
<style>
</style>
