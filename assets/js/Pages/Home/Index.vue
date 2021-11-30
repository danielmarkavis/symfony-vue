<template>
  <div>
    <p>Home page</p>
    {{ controllerName }}
    <div v-for="(record,key) in records" :key="key">
      {{ record.name }}
    </div>
  </div>
</template>

<script>
export default {
  name: "Home",
  props: {
    controllerName: {
      type: String,
      default: null,
    },
    records: {
      type: Array,
      required: true,
    }
  }
}
</script>

<style scoped>
</style>
