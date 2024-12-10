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

});



</script>


<template>
  <Head title="Contact Us Page " />

  <PublicLayout>
    <div class="">

      <!-- <vue-horizontal responsive>
        <section v-for="item in items" :key="item.title">
          <h3>{{ item.title }}</h3>
          <p>{{ item.content }}</p>
        </section>
      </vue-horizontal> -->



      <div class="bg-primary-100 py-3">
        <h2 class="text-3xl font-bold text-center mb-8 text-secondary-100 ">Contact Us</h2>
        <section data-aos="zoom-in" class="text-white px-9 py-8">
          <div class="bg-secondary-100 rounded-2xl px-5 sm:grid sm:grid-cols-12 sm:gap-6 mb-7 py-9">
            <form class="col-span-6 text-white px-4">
              <h4 class="text-2xl font-bold my-4 mb-9">Reach out to us</h4>

              <form class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <div>
                    <label class="block text-sm font-medium ">First Name</label>
                    <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                  </div>

                  <div>
                    <label class="block text-sm font-medium ">Last Name</label>
                    <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                  </div>
                </div>

                <div>
                  <label class="block text-sm font-medium ">Email</label>
                  <input type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                </div>

                <div>
                  <label class="block text-sm font-medium ">Subject</label>
                  <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                </div>

                <div>
                  <label class="block text-sm font-medium ">Message</label>
                  <textarea rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500"></textarea>
                </div>

                <div class="text-center">
                  <button type="submit" class="block px-4 py-3 border border-white bg-transparent rounded-md w-full hover:bg-white hover:text-secondary-100 transition-all ease-in-out duration-300">
                    Send Message
                  </button>
                </div>
              </form>


            </form>

            <div class="sm:col-span-6 sm:mt-0 mt-[80px]  px-3 text-sm">
              <div class="grid grid-cols-12 gap-6">
                <div class="col-span-4">
                  <div class="text-center">
                    <div class="p-5 bg-primary-100 rounded-full flex justify-center mx-auto relative w-[60px] h-[60px] my-4">
                      <font-awesome-icon class="absolute left-0 top-0 right-0 bottom-0 m-auto text-xl" icon="fa-solid fa-location-dot" />
                    </div>
                    <p>
                      <b>Address</b> <br>
                      Court Area, Okposi, Ebonyi State.
                    </p>
                  </div>
                </div>

                <div class="col-span-4">
                  <div class="text-center">
                    <div class="p-5 bg-primary-100 rounded-full flex justify-center mx-auto relative w-[60px] h-[60px] my-4">
                      <font-awesome-icon class="absolute left-0 top-0 right-0 bottom-0 m-auto text-xl" icon="fa-solid fa-microphone" />
                    </div>
                    <p>
                      <b>Phones</b> <br>
                      Tel(1): 0803 359 4813
                    </p>
                  </div>
                </div>

                <div class="col-span-4">
                  <div class="text-center">
                    <div class="p-5 bg-primary-100 rounded-full flex justify-center mx-auto relative w-[60px] h-[60px] my-4">
                      <font-awesome-icon class="absolute left-0 top-0 right-0 bottom-0 m-auto text-xl" icon="fa-solid fa-envelope" />

                    </div>
                    <p>
                      <b>Email Address</b> <br>
                      <Link :href="'mailto:okposiedu@gmail.com'" class="underline">okposiedu@gmail.com</Link>
                    </p>
                  </div>
                </div>




              </div>

              <div class="my-3 mt-[60px]">

                <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.7114320762644!2d7.818188674042967!3d6.0342821286569865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105cb50ce0b88fb9%3A0xc76b6334b895ac4e!2sCourt%20Area%20Okposi!5e0!3m2!1sen!2sng!4v1731396090570!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </section>



      </div>

    </div>

  </PublicLayout>
</template>
