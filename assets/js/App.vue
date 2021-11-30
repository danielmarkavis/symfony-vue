<template>
  <component
      :is="component"
      v-if="component"
      v-bind="{...parsedData}"
  />
</template>

<script>
import HomeIndex from "@/Pages/Home/Index";

export default {
  name: "App",
  props: {
    name: {
      type: String,
      required: true,
    },
    data: {
      type: String,
      required: true,
    }
  },
  computed: {
    component() {
      return this.name ? this.name.replaceAll('/', '') : null;
    },
    parsedData() {
      return JSON.parse(this.data) ?? null;
    }
  },
  components: {
    HomeIndex,
  },
}
</script>

<style scoped>
</style>
