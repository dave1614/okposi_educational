

<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue';
import { Head, Link, } from '@inertiajs/vue3';

import { useMainStore } from "@/Stores/main";

const mainStore = useMainStore();
const props = defineProps({

});




</script>


<template>
  <!-- <Head title="Welcome" /> -->



  <div data-aos="fade-down" class="header font-semibold text-white">
    <div class="bg-primary-100 py-4 px-3">
      <div class="sm:grid sm:grid-cols-12 sm:gap-6">
        <div class="sm:col-span-3 inline-block">
          <h1 class="text-lg"><Link :href="route('home_page')">Okposi Education Initiative</Link></h1>
        </div>

        <button @click="mainStore.show_nav_menu = !mainStore.show_nav_menu" class="inline-block float-right border-2 border-white rounded p-1 w-[35px] sm:hidden ">
          <font-awesome-icon icon="fa-solid fa-bars" />
        </button>

        <div :class="mainStore.show_nav_menu ? 'sm:hidden block' : 'hidden sm:block'" class="sm:col-span-9 transition-all duration-300 ease-in-out">
          <div class="sm:grid sm:grid-cols-12 sm:gap-6">
            <div class="sm:col-span-9">
              <ul class="pages-link">
                <li><Link :href="route('home_page')">Home</Link></li>
                <li><Link :href="route('about_us')">About Us</Link></li>
                <li><Link href="#">Our Team</Link></li>
                <li><Link :href="route('projects')">Projects</Link></li>
                <li><Link :href="route('contact_us')">Contact Us</Link></li>
              </ul>
            </div>

            <div class="sm:col-span-3">
              <button class="flex justify-center border border-white rounded bg-transparent px-4 py-2 text-sm text-white hover:text-primary-100 hover:bg-white transition-all duration-300 ease-in-out">
                Join Our Mission
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</template>
