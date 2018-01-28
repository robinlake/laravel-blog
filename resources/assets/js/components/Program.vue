<template>
    <div class="card">
      <slot name="image" class="image"></slot>
      <div class="mask">
        <slot name="title" class="title"></slot>
        <slot name="description" class="description"></slot>
      </div>
    </div>
</template>

<style lang="scss" scoped>
.card {
  // width: 100%;
  position: relative;
  box-shadow: 0 1rem 4rem rgba(0, 0, 0, 0.2);
  overflow: hidden;
}
.image {
  object-fit: cover;
}
.mask {
  position: absolute;
  top: 0px;
  height: 100%;
  width: 100%;
  padding: 20px;
}
</style>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
