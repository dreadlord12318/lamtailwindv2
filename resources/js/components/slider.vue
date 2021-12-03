<template>
<div class="">
<vueper-slides  autoplay fade  :arrows-outside="false"  :bullets="false" class = "no-shadow bg-white py-9 lg:py-9">
  <vueper-slide
    v-for="(slide, i) in slides"
    :key="i"
    class = "relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"
    > 
  <template #content >

    <div class="">
      <div class="relative py-20 px-8 bg-lambright-600 rounded-xl  overflow-hidden  lg:grid lg:grid-cols-2 lg:gap-x-8">
        <div class="absolute inset-0 opacity-50 filter saturate-0 mix-blend-multiply">
          <img :src="slide.image" />
        </div>
        <div class="relative lg:col-span-1">
          <blockquote class="mt-6 text-white">
            <p class="font-copy text-xl font-normal tracking-normal leading-relaxed normal-case">{{slide.title}}</p>
            <footer class="mt-6">
              <p class="flex flex-col font-concourset3 text-xs font-normal tracking-normal leading-relaxed text-left normal-case text-lamblue-100">
                <span>{{slide.content}}</span>
                <span><a :href="slide.link">{{slide.content2}}</a></span>
              </p>
            </footer>
          </blockquote>
        </div>
      </div>
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
    title: 'Lambent Consulting successfully obtained licenses from SEC and Central Bank and made the company functional in the Philippines. The team blended well into the company that ensured a seamless workflow throughout the collaboration. Above all, their ability to think outside the box was exceptional.',
    content: 'BPO Consulting for Fintech',
    content2: 'Read the Complete Clutch Review',
    link: 'https://clutch.co/profile/lambent-consulting#review-1799292',
    // You can also provide a URL for the image.
    image: '/images/LAMB-Site-Image-Home_Testimonial_Finefectivo.jpg',
  },
  {
    title: 'Stakeholders are happy with Lambent Consulting’s work. Their website has generated more traffic than before, and they’ve experienced no issues or problems with the provider. The team is communicative and manages the project effectively. Overall, they align themselves well with the client’s goals.',
    content: 'Online Marketing Management for Business Process Outsourcing ',
    content2: 'Read the Complete Clutch Review',
    link: 'https://clutch.co/profile/lambent-consulting#review-1795022',
    // You can also provide a URL for the image.
    image: '/images/LAMB-Site-Image-Home_Testimonial_OpenAccess.jpg',
  },
  {
    title: 'Lambent Consulting successfully obtained licenses from SEC and Central Bank and made the company functional in the Philippines. The team blended well into the company that ensured a seamless workflow throughout the collaboration. Above all, their ability to think outside the box was exceptional.',
    content: 'Branding and Online Marketing for Financial Consultancy',
    content2: 'Read the Complete Clutch Review',
    link: 'https://clutch.co/profile/lambent-consulting#review-1799292',
    // You can also provide a URL for the image.
    image: '/images/LAMB-Site-Image-Home_Testimonial_Wescott.jpg',
  },
   {
    title: 'The results were confidential, but the client was happy with the outcomes. Lambent Consulting fostered a positive partnership through consistent communication via Zoom. Overall, they easily grasped the company’s vision and improved it. ',
    content: 'Email Marketing, Landing page Design, and Lead Journey Management for B2B Financing',
    content2: 'Read the Complete Clutch Review',
    link: 'https://clutch.co/profile/lambent-consulting#review-1798153',
    // You can also provide a URL for the image.
    image: '/images/LAMB-Site-Image-Home_Testimonial_FinancingCommittee.jpg'
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
          padding-bottom: 28.3333% !important; 
    } 
    .img {
          height: 100% !important;
        }
    }
</style>