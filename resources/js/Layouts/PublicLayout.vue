

<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue';
import { Head, Link, } from '@inertiajs/vue3';
import Header  from '@/Partials/Header.vue';
import Footer  from '@/Partials/Footer.vue';

import { useMainStore } from "@/Stores/main";

const mainStore = useMainStore();
const props = defineProps({

});




</script>


<template>
  <!-- <Head title="Welcome" /> -->

  <div class="">

    <Header />

    <slot />

    <Footer />
  </div>
</template>
