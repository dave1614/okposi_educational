<style scoped>


</style>

<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue';
import { Head, Link, } from '@inertiajs/vue3';
import PublicLayout  from '@/Layouts/PublicLayout.vue';
import { useMainStore } from "@/Stores/main";
import Projects  from '@/Components/AllProjects.vue';

const mainStore = useMainStore();
const props = defineProps({
  project: {
    type: Object,
    default: {}
  }
});


const images = ref(props.project.gallery_images.split(","));

console.log(images.value)


</script>


<template>
  <Head :title="`${project.title}`" />

  <PublicLayout>
    <div class="text-white">

      <!-- <vue-horizontal responsive>
        <section v-for="item in items" :key="item.title">
          <h3>{{ item.title }}</h3>
          <p>{{ item.content }}</p>
        </section>
      </vue-horizontal> -->



      <div class="bg-primary-100 py-3">
        <h2 class="text-3xl font-bold text-center mt-[40px] mb-[30px]">{{ project.title }}</h2>


        <section data-aos="zoom-in" class="text-white px-9 py-8">
          <div v-if="images.length > 0" class="mt-[40px] mb-20px">

            <div class="grid grid-cols-12 gap-6">
              <a :href="`/images/${image}`" target="_blank" class="col-span-6"  v-for="(image, index) in images" :key="index">
                <img :src="`/images/${image}`" class="w-full h-[300px] rounded-xl hover:scale-105 cursor-pointer transition-all duration-300 ease-in-out" alt="">
              </a>
            </div>
          </div>
        </section>



      </div>

    </div>

  </PublicLayout>
</template>
