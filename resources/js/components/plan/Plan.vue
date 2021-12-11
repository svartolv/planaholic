<template>
<!--  <header>-->
<!--    <p>-->
<!--      <span>План задачег на {{ plan_date }}</span>-->
<!--    </p>-->
<!--  </header>-->
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
