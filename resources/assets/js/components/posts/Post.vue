<template>
    <div class="card">
      <slot name="title"></slot>
      <div class="mask">
        <slot name="description"></slot>
      </div>
    </div>
</template>

<style lang="scss" scoped>
.card {
  box-shadow: 0 1rem 4rem rgba(0, 0, 0, 0.2);
  position: relative;
  transition: all 0.6s ease;
  &:hover {
    transform: translate3d(10px, 10px, 10px);
  }
}
h1 {
  font-size: 3em;
  text-align: center;
  padding: 15px 0;
}
h2 {
  font-size: 1.5em;
  text-align: center;
  padding: 10px 0;
}
.mask {
  position: absolute;
  top: 80%;
  height: 20%;
  width: 100%;
  background: rgba(10, 10, 10, 0.3);
}
</style>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
