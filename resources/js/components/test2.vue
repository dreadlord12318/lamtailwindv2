<template>
  <div class="max-w-7xl mx-auto py-24 px-4 sm:px-6 lg:px-8">
    <TabGroup>
      <div  class="sm:flex sm:flex-col sm:align-center">
        <h1 class="font-concourset7 text-3xl font-normal tracking-normal leading-snug capitalize sm:text-center">How Much More Do Want to Accomplish?</h1>
    
      <p class="mt-5 font-copy text-xl font-normal tracking-normal leading-relaxed text-black normal-case sm:text-center">Hand-off tasks to a pool of crackerjack subject-matter experts managed by your virtual account coordinator. For short-term projects or ongoing support work, Lambent has you covered. Building a project team? Let’s talk about requirements and pricing.</p>
       
        <div class = "relative self-center mt-6  justify-center rounded-lg p-0.5 flex sm:mt-8">
      <TabList class="">
        <Tab
          v-for="category in Object.keys(categories)"
          as="template"
          :key="category"
          v-slot="{ selected }"
        >
          <button hidden
            :class="[
              'relative w-1/2 bg-white border-gray-200 rounded-md shadow-sm py-2 px-4  font-concourset4 text-xs font-normal tracking-normal leading-normal capitalize text-newcolor-200  whitespace-nowrap',
              'focus:outline-none  focus:ring-2 focus:ring-lamblue-100 focus:z-10 sm:w-auto px-12',
              selected
                ? 'bg-gray shadow'
                : 'font-concourset4 text-xs bg-lamblue-100 font-normal tracking-normal leading-relaxed text-newcolor-50 capitalize',
            ]"
          >
            {{ category }}
          </button>
        </Tab>
      </TabList>
        </div>
        </div>
      <TabPanels  class="mt-12">
          
        <TabPanel
          v-for="(pricings, idx) in Object.values(categories)"
          :key="idx"
          :class="[
            ' rounded-xl p-3',
            'focus:outline-none focus:ring-2 ring-offset-2  ring-white ring-opacity-60',
          ]"
        >
          
           <div class="mt-12 space-y-4 sm:mt-16 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-6 lg:max-w-4xl lg:mx-auto xl:max-w-none xl:mx-0 xl:grid-cols-4">
        <div v-for="pricing in pricings"
              key="post.id"
              class="border border-gray-200 rounded-lg shadow-sm divide-y divide-gray-200">
          <div class="py-6 px-3">
            <h2 class="font-concourset4 text-2xl font-normal tracking-normal leading-snug text-newcolor-50 capitalize"> {{ pricing.title }}</h2>
             <p class="mt-4 font-copy text-base font-normal tracking-normal leading-relaxed text-newcolor-200">{{ pricing.description }}</p>
            <p class="mt-8">
              <span class="font-concourset6  text-xl font-normal tracking-normal leading-normal uppercase text-lambright-600">{{ pricing.price}}</span>
              
            </p>
             <form  action="/transaction" class="sm:max-w-xl sm:mx-auto lg:mx-0" method="POST">
                  <input type="hidden" name="_token" v-bind:value="csrf">
                  <input type="hidden" placeholder="Last Name" name="last_name" id="last_name" autocomplete="family-name" v-bind:value="pricing.price">
                  <input type="hidden" placeholder="First Name" name="first_name" id="first_name" autocomplete="given-name"  v-bind:value="pricing.title">
              <button type="submit" class="mt-8 block w-full bg-newcolor-300 border border-newcolor-300 rounded-md py-2 font-concourset6 text-lg capitalize font-normal tracking-normal leading-normal text-center text-white hover:bg-lambright-600">TALK TO US</button>
             </form>
          </div>
          <div class="pt-6 pb-8 px-6">
            <ul v-for="feature in pricing.includedFeatures" :key="feature" role="list" class="mt-6 space-y-4">
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-5 w-5 text-lambright-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="font-copy2 text-base font-normal tracking-normal leading-relaxed text-newcolor-200">{{feature}}</span>
            </li>
            </ul>
          </div>
        </div>
      </div>
  
        </TabPanel>
      </TabPanels>
    </TabGroup>
  </div>



</template>

<script>
import { ref } from 'vue'
import { TabGroup, TabList, Tab, TabPanels, TabPanel, TransitionRoot,
  TransitionChild,
  Dialog,
  DialogOverlay,
  DialogTitle, } from '@headlessui/vue'

export default {
  components: {
    TabGroup,
    TabList,
    Tab,
    TabPanels,
    TabPanel,
    TransitionRoot,
    TransitionChild,
    Dialog,
    DialogOverlay,
    DialogTitle,
  },
  setup() {
  
    let categories = ref({
      "Dedicated": [
        {
          id: 1,
          sub: 'Select project rates based on short-term projects, shared staff or long-term programs with full-time support',
          title: 'Solopreneur',
          link: 'Dedicated',
          description: 'Offload Routine Tasks ',
          price: '$320/month',
          includedFeatures: 
          ['8 hours/week' ,
           'Account Coordinator',
           'Weekly Task Call',
           'Task Platform',
           'Time Tracking',
           'Weekly Activity Report',],
        },
        {
          id: 2,
          title: "Entrepreneur",
          link: 'Dedicated',
          description: 'Optimize Your Day',
          price: '$580/month',
          includedFeatures: 
          ['16 hours/week',
           'Account Coordinator',
           'Weekly Task Call',
           'Task Platform',
           'Time Tracking',
           'Weekly Activity Report',
         ],
        },
        {
          id: 3,
          title: "Startup ",
          link: 'Dedicated',
          description: 'Hack the Future',
          price: '$940/month',
          includedFeatures: 
          ['Full-time (32 hs/week)',
           'Account Coordinator',
           'Weekly Task Call',
           'Task Platform',
           'Time Tracking',
           'Weekly Activity Report',
           ],
        },
        {
          id: 4,
          title: "Accelerator",
          link: 'Dedicated',
          description: 'Build a Team',
          price: 'Tailored Pricing',
          includedFeatures: 
          ['Lead Generation',
           'Online Marketing',
           'Tech Support',
           'Customer Support',
           'Managed CRM',
           'Data Mining',
           'Blogging',
           'Web Development',
           ],
        },
      ],
    
     
    })

    return { 
     

      
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      
      categories,
    
    
    }
  },
}
</script>
