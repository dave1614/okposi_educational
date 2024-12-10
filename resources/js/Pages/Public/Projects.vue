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
  about_us_content: {
    type: String,
    default: ''
  }
});



</script>


<template>
  <Head title="All our projects " />

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
          <Projects />
        </section>



      </div>

    </div>

  </PublicLayout>
</template>
