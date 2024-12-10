
<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue';
import { Head, Link, usePage } from '@inertiajs/vue3';
import PublicLayout  from '@/Layouts/PublicLayout.vue';
import { useMainStore } from "@/Stores/main";


const mainStore = useMainStore();
const props = defineProps({

});

const projects = usePage().props.projects;

</script>


<template>
  <div class="">
    <h3  class="text-white sm:text-3xl text-xl font-bold my-2">Project Highlights</h3>
    <p class="text-lg text-white">Discover the transformative projects we've implemented in local schools.</p>

    <div class="my-4  mt-[60px]" v-if="projects.length > 0">
      <div :data-aos="index % 2 === 0 ? 'fade-right' : 'fade-left'" class="grid grid-cols-12 gap-6 sm:my-7 my-[50px]" v-for="(project, index) in projects" :key="index">
        <div class="sm:col-span-5 col-span-12" :class="index % 2 === 0 ? 'order-1' : 'sm:order-2 order-1'">
          <img :src="`images/${project.image}`" alt="" class="rounded-xl hover:scale-105 cursor-pointer transition-all duration-300 ease-in-out">
        </div>

        <div class="sm:col-span-7 col-span-12 text-white py-6" :class="index % 2 != 0 ? 'sm:order-1 order-2' : 'order-2'">
          <h4 class="text-2xl font-bold ">{{ project.title }}</h4>

          <p class="text-sm mt-7 mb-3">{{ project.text }}</p>

          <div class="mt-[40px] text-xs">
            <Link :href="route('projects.show', project.id)" class="font-bold border-b border-white pb-[1px]">Explore Project</Link>
          </div>
        </div>
      </div>


    </div>
  </div>
</template>
