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
import Projects  from '@/Components/AllProjects.vue';
import { useMainStore } from "@/Stores/main";

const mainStore = useMainStore();
const props = defineProps({
  projects: {
    type: Array,
    default: []
  }
});

// const items = ref([...Array(20).keys()].map((i) => {
//         return {title: `Item ${i}`, content: `🚀 Content ${i}`};
// }));

const items = ref(['3d43dc55-54f1-44ab-bdd7-1366b8437694.png', '5fc1ade7-171a-43ad-9d3b-7ff8d3535538.png', '9780d80a-a368-48fd-b6bd-93c879503d08.png', 'b94b3111-d7a4-4159-abac-e4c4888279c9.png', 'ef271229-ea38-47e0-947b-5ab21880c6a3.png', 'f88c396d-3514-48da-8028-8f0d91777357.png']);

const hasPrev =  ref(false)
const hasNext =  ref(false)
const interval =  ref(null)
const scrollWidth =  ref(0)
const left =  ref(0)
const progress =  ref(0)
const index =  ref(0)

const horizontal = ref(null);

const onScrollDebounce = ({hasNextP, hasPrevP, scrollWidthP, widthP, leftP}) =>  {
  hasPrev.value = hasPrevP
  hasNext.value = hasNextP
  scrollWidth.value = scrollWidthP
  left.value = leftP
  progress.value = leftP / scrollWidthP
  // index.value = Math.round(leftP / widthP)
}


function observeVisibility(element, callback) {
  const observer = new IntersectionObserver((records) => {
    callback(records.find(record => record.isIntersecting))
  }, {rootMargin: '10% 0% 10% 0%', threshold: 0.5});
  observer.observe(element);
}

const onIndexClick = (i) => {
  horizontal.value.scrollToIndex(i)
}

// const play = () => {
//   console.log(hasNext.value)

// };

onMounted(() => {
  // console.log(horizontal.value.$el)
  observeVisibility(horizontal.value.$el, (visible) => {
    // console.log(visible)
    if (visible) {
      // horizontal.value.next()
      // interval.value = setInterval(play, 3000)

      // interval.value = setInterval(() => {
      //   if (!hasNext.value && hasPrev.value) {
      //     horizontal.value.scrollToIndex(0)
      //     return
      //   }

      //   if (hasNext.value) {
      //     // horizontal.value.next()
      //     horizontal.value.scrollToIndex(1)
      //   }
      // }, 3000);
      // console.log(interval.value)
      console.log(index.value)
      setInterval(() => {
        if(index.value == items.value.length - 1){
          index.value = 0
          horizontal.value.scrollToIndex(0)
        }else{
          index.value = index.value + 1
          horizontal.value.scrollToIndex(index.value)

          console.log(index.value)
        }
      }, 5000);
    } else {
      clearInterval(interval.value)
    }
  })
})

onUnmounted(() => {
  clearInterval(interval.value)
})
</script>


<template>
  <Head title="Welcome To " />

  <PublicLayout>
    <div class="">

      <!-- <vue-horizontal responsive>
        <section v-for="item in items" :key="item.title">
          <h3>{{ item.title }}</h3>
          <p>{{ item.content }}</p>
        </section>
      </vue-horizontal> -->

      <div class="carousel relative">
        <div data-aos="fade-right" class="absolute max-w-[500px] h-fit top-0 bottom-0 bg-black/70  rounded-lg mx-3 z-30 my-auto px-6 py-6 text-white">
          <h2 class="sm:text-5xl text-3xl  font-bold !leading-relaxed">Empowering Education For All</h2>

          <h5 class="text-lg font-semibold my-3 mt-8">Quality resources for public schools</h5>

          <div class="grid grid-cols-12 gap-6 mt-7 mb-2 font-semibold sm:text-lg text-sm">
            <button class="col-span-6 rounded-lg py-3 px-3 border border-secondary-100 bg-secondary-100 hover:bg-white hover:text-secondary-100 transition-all duration-300 ease-in-out">Get Involved</button>

            <button class="col-span-6 rounded-lg py-3 px-3 border border-white bg-transparent">Donate Now</button>
          </div>
        </div>

        <vue-horizontal ref="horizontal" class="horizontal absolute"  :button="false" :button-between="false" @scroll-debounce="onScrollDebounce">
          <div class="item" v-for="(item, i) in items" :key="i">
            <!-- <img class="w-screen h-screen" :src="`/images/${item}`"> -->
             <div class="w-screen h-[80vh]" :style="`background:linear-gradient(rgba(0, 0, 0,0.3),rgba(0, 0, 0,0.3)), url('/images/${item}') no-repeat center center; -webkit-background-size:cover; -moz-background-size:cover; background-size: cover; -o-background-size:cover;`">

             </div>

          </div>
        </vue-horizontal>

        <!-- <div class="dots">
          <div class="dot" :class="{current: i === index}" v-for="(item, i) in items" :key="i"
              @click="onIndexClick(i)">
            <div></div>
          </div>
        </div> -->
      </div>

      <div class="bg-primary-100 py-3">
        <section class=" px-9 py-8">
          <h3 data-aos="zoom-in" class="text-black sm:text-2xl text-xl font-semibold my-4">Our Vision</h3>
          <h5 data-aos="zoom-in" class="text-3xl sm:text-5xl text-white font-bold my-3 !leading-snug">An Okposi where every child has access
            to high-quality education. </h5>
        </section>

        <div class="section-divider"></div>



        <section class="mt-[40px] px-[40px]">

          <Projects />
          <a :href="route('projects')" class="hover:bg-secondary-100 hover:text-primary-100 bg-transparent uppercase border border-secondary-100 px-9 py-3 text-secondary-100 font-bold flex justify-center mx-auto text-sm mt-[75px] transition-all duration-300 ease-in-out">View all</a>
        </section>

      </div>

    </div>

  </PublicLayout>
</template>
