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
  team: {
    type: Array,
    default: []
  }
});



</script>


<template>
  <Head :title="`Our Team`" />

  <PublicLayout>
    <div class="text-white">

      <!-- <vue-horizontal responsive>
        <section v-for="item in items" :key="item.title">
          <h3>{{ item.title }}</h3>
          <p>{{ item.content }}</p>
        </section>
      </vue-horizontal> -->



      <div class="bg-primary-100 py-3">
        <h2 class="text-3xl font-bold text-center mt-[40px] mb-[30px]">Meet Our Team</h2>


        <section data-aos="zoom-in" class="text-white px-9 py-8">

          <div class="sm:grid sm:grid-cols-12 sm:gap-6 text-primary-100" v-if="team.length > 0">
            <div class="sm:col-span-3 bg-white rounded px-2 py-2 sm:my-1 my-4" v-for="(member, index) in team" :key="index">
              <img :src="`/images/teams/${member.image}`" alt="" class="w-full h-[250px] rounded-md hover:scale-105  transition-all duration-300 ease-in-out">
              <div class="text-center mt-2">
                <h3 class="text-xl font-bold">{{ member.name }}</h3>
                <p class="text-sm">{{ member.position }}</p>
              </div>
            </div>
          </div>
        </section>



      </div>

    </div>

  </PublicLayout>
</template>
