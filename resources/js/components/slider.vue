<template>
<div class="">
<vueper-slides  autoplay fade  :arrows-outside="false"  :bullets="false" class = "no-shadow bg-lime-50 py-24 lg:py-24">
  <vueper-slide
    v-for="(slide, i) in slides"
    :key="i"
    class = "absolute max-w-7xl mx-auto  px-4 sm:px-6 lg:px-8"
    > 
  <template #content >

    <div class="">
      <a target="_blank" :href="slide.link">
      <div class="relative py-36 px-8 bg-lambright-600 rounded-xl  overflow-hidden  lg:grid lg:grid-cols-2 lg:gap-x-8">
        <div class="absolute inset-0 opacity-50 filter rounded-xl saturate-0 mix-blend-multiply">
          <img :src="slide.image" :alt="slide.alt" />
        </div>
        <div class="relative lg:col-span-1">
      
        </div>
        <div class="relative justify-end flex-row lg:col-span-1">
          <blockquote class="mt-6 text-white">
            <p class="font-copy text-xl text-right font-normal tracking-normal leading-normal text-newcolor-700  normal-case">{{slide.title}}</p>
            <footer class="mt-6">
              <p class="flex flex-col text-right  font-concourset3 text-sm font-normal tracking-normal leading-snug  normal-case text-newcolor-700">
                <!-- <span>{{slide.content3}}</span> -->
                <span>{{slide.content2}}</span>
              </p>
            </footer>
          </blockquote>
        </div>
      </div>
      </a>
     </div>
  
    </template>
    </vueper-slide>
</vueper-slides>
</div> 
</template>

<script>
import { VueperSlides, VueperSlide } from 'vueperslides'
import 'vueperslides/dist/vueperslides.css'


export default {
  components: { VueperSlides, VueperSlide },
  data: () => ({
  pauseOnHover: true,
  autoPlaying: true,
  internalAutoPlaying: true,
  slides: [
    {
    title: 'The team blended well into the company that ensured a seamless workflow throughout the collaboration. Above all, their ability to think outside the box was exceptional.',
    content: 'BPO Consulting for Fintech',
    content2: 'Read the Complete Clutch Review',
    link: 'https://clutch.co/profile/lambent-consulting#review-1799292',
    // You can also provide a URL for the image.
    image: '/images/clutch-social-proof-seamless-workflow.jpg',
    alt: 'Above all, Lambent’s ability to think outside the box was exceptional.',
  },
  {
    title: 'Their website has generated more traffic than before, and they’ve experienced no issues or problems with the provider.',
    content: 'Online Marketing Management for Business Process Outsourcing ',
    content2: 'Read the Complete Clutch Review',
    link: 'https://clutch.co/profile/lambent-consulting#review-1795022',
    // You can also provide a URL for the image.
    image: '/images/clutch-social-proof-aligned-with-client.jpg',
    alt: 'Lambent is communicative and manages the project effectively.',
  },
  {
    title: 'Lambent Consulting completes tasks on time and can easily insert other requirements if the client needs them immediately.',
    content: 'Branding and Online Marketing for Financial Consultancy',
    content2: 'Read the Complete Clutch Review',
    link: 'https://clutch.co/profile/lambent-consulting#review-1799292',
    // You can also provide a URL for the image.
    image: '/images/clutch-social-proof-on-time-flexible.jpg',
    alt: 'Lambent Consulting completes tasks on time',
  },
   {
    title: 'Lambent Consulting fostered a positive partnership through consistent communication via Zoom. Overall, they easily grasped the company’s vision and improved it.',
    content: 'Email Marketing, Landing page Design, and Lead Journey Management for B2B Financing',
    content2: 'Read the Complete Clutch Review',
    link: 'https://clutch.co/profile/lambent-consulting#review-1798153',
    // You can also provide a URL for the image.
    image: '/images/clutch-social-proof-positive-partnership.jpg',
    alt: 'Lambent easily grasped our vision and improved it.',
  },
  
  // Other slides.
]
})
}

</script>

<style>


 @media (min-width: 624px) { 
  .vueperslides__parallax-wrapper{
   padding-bottom: 73.3333%  !important; 
}
.img {
  height: 100% !important;
}
 }

  @media (min-width: 768px) { 
    .vueperslides__parallax-wrapper{
   padding-bottom: 56.3333% !important; 
  } 
.img {
  height: 100% !important;
  }
}

  @media (min-width: 1024px) { 
    .vueperslides__parallax-wrapper{
   padding-bottom: 48.3333%  !important; 
  } 
.img {
  height: 100% !important;
  }
}

   @media (min-width: 1280px) { 
    .vueperslides__parallax-wrapper{
          padding-bottom:29.3333% !important; 
    } 
    .img {
          height: 100% !important;
        }
    }
</style>