<style scoped>
/* section {
  padding: 16px 24px;
  background: #f5f5f5;
} */

.dots {
  position: absolute;
  bottom: 16px;
  left: 0;
  right: 0;
  display: flex;
  justify-content: center;
}

.dot {
  padding: 4px;
  cursor: pointer;
}

.dot > div {
  border-radius: 10px;
  width: 10px;
  height: 10px;
  background: #33333350;
}

.dot:hover > div {
  background: white;
  border: 1px solid black;
}

.dot.current > div {
  border: 3px solid black;
  background: white;
}

</style>

<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue';
import { Head, Link, } from '@inertiajs/vue3';
import PublicLayout  from '@/Layouts/PublicLayout.vue';
import { useMainStore } from "@/Stores/main";

const mainStore = useMainStore();
const props = defineProps({
  about_us_content: {
    type: String,
    default: ''
  }
});



</script>


<template>
  <Head title="About Us Page " />

  <PublicLayout>
    <div class="">

      <!-- <vue-horizontal responsive>
        <section v-for="item in items" :key="item.title">
          <h3>{{ item.title }}</h3>
          <p>{{ item.content }}</p>
        </section>
      </vue-horizontal> -->



      <div class="bg-primary-100 py-3">
        <section data-aos="zoom-in" class="text-white px-9 py-8">
          <h3  class="text-2xl  font-bold my-4 text-center underline">ABOUT THE OKPOSI EDUCATION INITIATIVE </h3>
          <h5 class="text-lg   font-semibold my-3 text-content" v-html="about_us_content"></h5>
        </section>



      </div>

    </div>

  </PublicLayout>
</template>
