<template>
    <div class="card">
      <slot name="image" class="image"></slot>
      <div class="mask">
        <slot name="title"></slot>
        <!-- <slot name="description" class="description"></slot> -->
      </div>
    </div>
</template>

<style lang="scss" scoped>
.card {
  box-shadow: 0 1rem 4rem rgba(0, 0, 0, 0.2);
  position: relative;
  transition: all 0.6s ease;
  overflow: hidden;
  &:hover {
    transform: translate3d(10px, 10px, 10px);
    .image {
      transform: scale(1.1, 1.1);
    }
  }
}
h1 {
  font-size: 2.5em;
  // padding: 15px 0;
}
h2 {
  font-size: 1.5em;
  // padding: 10px 0;
}
.mask {
  position: absolute;
  bottom: 0px;
  height: 120px;
  width: 100%;
  background: rgba(10, 10, 10, 0.3);
  padding: 20px;
}
.image {
  object-fit: cover;
}
</style>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
