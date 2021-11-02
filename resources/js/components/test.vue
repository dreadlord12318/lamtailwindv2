
<template>
  <div class="bg-white py-16 lg:py-24">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
   
        
      <vueper-slides class = "relative py-24 px-8 bg-indigo-500 rounded-xl shadow-2xl overflow-hidden lg:px-16 lg:grid lg:grid-cols-2 lg:gap-x-8"
  :slide-ratio="0.2"
  :infinite="false"
  disable-arrows-on-edges
  bullets-outside
  :disable="slideshowDisabled">
  <vueper-slide
    v-for="(slide, i) in slides"
    :key="i"
    :image="slide.image"
    :title="slide.title"
    :content="slide.content"
     />
</vueper-slides>

        </div>
    </div>
</template>




<script>

import { VueperSlides, VueperSlide } from 'vueperslides'
import 'vueperslides/dist/vueperslides.css'

const slides = [
  {
    image: '/images/LAMB-Site-Image-HeaderAbout_Grey.jpg'
  },
  {
    image: '/images/LAMB-Site-Image-HeaderAbout_Grey.jpg'
  },
  {
    image: '/images/LAMB-Site-Image-HeaderAbout_Grey.jpg'
  },
   {
   image: '/images/LAMB-Site-Image-HeaderAbout_Grey.jpg'
  },
   {
   image: '/images/LAMB-Site-Image-HeaderAbout_Grey.jpg'
  },
]


export default {
  components: {
    VueperSlides,
     VueperSlide,
  },
  setup() {
    return {
      slides,
    }
  },
}
  </script>