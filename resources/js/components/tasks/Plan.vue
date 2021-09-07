<template>
  <div>
    <p>
      <span>План задачег на {{ plan_date }}</span>
    </p>
  </div>
</template>

<script>
  export default {
    props: [
      'plan_date',
    ],
    mounted() {
      console.log(this.plan_date)
    }
  }
</script>
