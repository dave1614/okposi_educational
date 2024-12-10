

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


  <div class="bg-secondary-100 min-h-[300px] text-white px-4 sm:px-6 py-3 sm:py-5">
    <div class="sm:grid sm:grid-cols-12 sm:gap-6">
      <div class="sm:col-span-4 sm:my-0 my-4">
        <h5 class="footer-heading"> About Us</h5>
        <p class="text-sm">In 2011, a group of dedicated professionals from Okposi united with a shared mission to elevate educational standards in their community to the highest possible level. This vision led to the inaugural meeting of the Okposi Education Initiative (OEI) on Sunday, April 24, 2011, held at Romic Hotel in Okposi under the leadership of Dr Laz Ude Eze. Sixteen young men attended the meeting, with nine remaining committed members of the organization to this day.</p>
      </div>

      <div class="sm:col-span-4 sm:my-0 my-4">
        <h5 class="footer-heading">Useful Links</h5>

        <ul class="footer-useful-links">
          <li> <Link href="/" class="text-sm">Home</Link> </li>
          <li> <Link href="/about" class="text-sm">About Us</Link> </li>
          <li> <Link href="/contact" class="text-sm">Contact Us</Link> </li>
          <li> <Link href="/contact" class="text-sm">Our Team</Link> </li>
          <li> <Link href="/contact" class="text-sm">Projects</Link> </li>
          <li> <Link href="/login" class="text-sm">Login</Link> </li>
          <li> <Link href="/register" class="text-sm">Register</Link> </li>
        </ul>
      </div>

      <div class="sm:col-span-4 sm:my-0 my-4">
        <h5 class="footer-heading">Reach Out To Us</h5>

        <p class="my-2"><font-awesome-icon class="mr-2 text-xl" icon="fa-solid fa-location-dot" /> Court Area, Okposi, Ebonyi State.</p>
        <p class="my-2"><font-awesome-icon icon="fa-solid fa-phone" class="mr-2 text-xl" /> 0803 359 4813</p>
        <div class="my-5 ">
          <Link href="https://web.facebook.com/OkposiEducation/" target="_blank" class="hover:text-primary-100" > <font-awesome-icon class="mr-3 text-3xl" icon="fa-brands fa-facebook" /> </Link>
          <Link href="/" class="hover:text-primary-100" target="_blank"> <font-awesome-icon class="mx-3 text-3xl" icon="fa-brands fa-twitter" /> </Link>
          <Link href="/" class="hover:text-primary-100" target="_blank"> <font-awesome-icon class="mx-3 text-3xl" icon="fa-brands fa-instagram" /> </Link>
          <Link :href="'mailto:okposiedu@gmail.com'" class="hover:text-primary-100" target="_blank"> <font-awesome-icon class="mx-3 text-3xl" icon="fa-solid fa-envelope" /> </Link>
        </div>
      </div>
    </div>

    <div class="h-[1px] my-4 mt-8 bg-primary-100">

    </div>


  </div>


</template>
