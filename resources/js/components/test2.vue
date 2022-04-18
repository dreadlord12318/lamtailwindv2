<template>
  <div class="max-w-7xl mx-auto py-24 px-4 sm:px-6 lg:px-8">
    <TabGroup>
      <div  class="sm:flex sm:flex-col sm:align-center">
        <h1 class="font-concourset6 text-5xl font-normal tracking-normal leading-tight text-newcolor-50 capitalize sm:text-center">It’s Your Choice</h1>
    
      <p class="mt-5 font-copy text-xl font-normal tracking-normal leading-relaxed text-newcolor-100 normal-case sm:text-center">We’ve got you covered: quick projects or long-term assignments. A complete customer support team or a few hours of virtual assistance. Copywriting or data mining. Building a project team? Let’s talk requirements and pricing. </p>
       
      
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
      <TabPanels  class="mt-12">
          
        <TabPanel
          v-for="(pricings, idx) in Object.values(categories)"
          :key="idx"
         
        >
          
           <div class="mt-12 space-y-4 sm:mt-16 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-6 lg:max-w-4xl lg:mx-auto xl:max-w-none xl:mx-0 xl:grid-cols-4">
        <div v-for="pricing in pricings"
              key="post.id"
              class="border border-gray-200 rounded-lg shadow-sm divide-y divide-gray-200">
          <div class="py-6 px-3">
            <h2 class="font-concourset4 text-2xl font-normal tracking-normal leading-tight text-newcolor-50 capitalize"> {{ pricing.title }}</h2>
             <p class="mt-4 font-copy2 text-base font-normal tracking-normal leading-relaxed text-newcolor-200">{{ pricing.description }}</p>
            <p class="mt-8">
               <span class="font-concoursec6 text-5xl font-normal tracking-normal leading-none uppercase text-lambright-500">{{ pricing.dollar}}</span>
              <span class="font-concoursec6  text-5xl font-normal tracking-normal leading-none uppercase text-lambright-500">{{ pricing.price}}</span>
              <span class="font-concoursec3 text-lg font-normal tracking-normal leading-none uppercase text-lambright-500">{{ pricing.month}}</span>
              
            </p>
             <form  action="/transaction" class="sm:max-w-xl sm:mx-auto lg:mx-0" method="POST">
                  <input type="hidden" name="_token" v-bind:value="csrf">
                  <input type="hidden" placeholder="Last Name" name="last_name" id="last_name" autocomplete="family-name" v-bind:value="pricing.price">
                  <input type="hidden" placeholder="First Name" name="first_name" id="first_name" autocomplete="given-name"  v-bind:value="pricing.title">
                     <div class="bg-lime-500 rounded-md shadow-sm">
              <button type="submit"  class="mt-8 block w-full bg-lime-500 border border-lime-500 rounded-md py-2 font-concourset6 text-lg capitalize font-normal tracking-normal leading-normal text-center text-white hover:bg-lambright-600">Let's talk</button>
                    </div>
             </form>
          </div>
          <div class="pt-6 pb-8 px-6">
            <ul v-for="feature in pricing.includedFeatures" :key="feature" role="list" class="mt-6 space-y-4">
            <li class="flex space-x-3">
              <!-- Heroicon name: solid/check -->
              <svg class="flex-shrink-0 h-8 w-6 text-lambright-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
              <span class="font-copy text-xl font-normal tracking-normal leading-relaxed text-lambright-50">{{feature}}</span>
            </li>
            </ul>
          </div>
        </div>
      </div>
  
        </TabPanel>
      </TabPanels>
    </TabGroup>

<!-- 
    <TransitionRoot appear :show="isOpen" as="template">
    <Dialog as="div" @close="closeModal">
      <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="min-h-screen px-4 text-center">
          <TransitionChild
            as="template"
            enter="duration-300 ease-out"
            enter-from="opacity-0"
            enter-to="opacity-100"
            leave="duration-200 ease-in"
            leave-from="opacity-100"
            leave-to="opacity-0"
          >
            <DialogOverlay class="fixed inset-0" />
          </TransitionChild>

          <span class="inline-block h-screen align-middle" aria-hidden="true">
            &#8203;
          </span>

          <TransitionChild
            as="template"
            enter="duration-300 ease-out"
            enter-from="opacity-0 scale-95"
            enter-to="opacity-100 scale-100"
            leave="duration-200 ease-in"
            leave-from="opacity-100 scale-100"
            leave-to="opacity-0 scale-95"
          >
            <div
              class="inline-block w-full max-w-md p-6 my-8 overflow-hidden text-left align-middle transition-all transform bg-white shadow-xl rounded-2xl"
            >
              <DialogTitle
                as="h3"
                class="text-lg font-medium leading-6 text-gray-900"
              >
                Payment successful
              </DialogTitle>
              <div class="mt-2">
                <p class="text-sm text-gray-500">
                  Your payment has been successfully submitted. We’ve sent you
                  an email with all of the details of your order.
                </p>
              </div>

              <div class="mt-4">
                <button
                  type="button"
                  class="inline-flex justify-center px-4 py-2 text-sm font-medium text-blue-900 bg-blue-100 border border-transparent rounded-md hover:bg-blue-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-blue-500"
                  @click="closeModal"
                >
                  Got it, thanks!
                </button>
              </div>
            </div>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot> -->
  </div>







</template>

<script>
import { ref } from 'vue'
import { TabGroup, TabList, Tab, TabPanels, TabPanel, TransitionRoot,
  TransitionChild,
  Dialog,
  DialogOverlay,
  DialogTitle, DialogDescription, } from '@headlessui/vue'

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
    DialogDescription,
  },
  setup() {

    let isOpen = ref(false);//Modal
  
    let categories = ref({
      "Dedicated": [
        {
          id: 1,
          sub: 'Select project rates based on short-term projects, shared staff or long-term programs with full-time support',
          title: 'Solopreneur',
          link: 'Dedicated',
          description: 'Optimize Your Week ',
          dollar:'$',
          price: '80',
          month: '/week',
          includedFeatures: 
          ['8 hours/week' ,
           'Dedicated Concierge',
           'Weekly Call',
           'Program Portal',
           'Time Tracking',
           'Weekly Report',
           'Billed Monthly',],
        },
        {
          id: 2,
          title: "Entrepreneur",
          link: 'Dedicated',
          description: 'Time Hack for Success',
          dollar:'$',
          price: '144',
          month: '/week',
          includedFeatures: 
          ['16 hours/week',
           'Process Wiki',
           'Standard SOPs',
           'Dedicated Concierge',
           'Weekly Call',
           'Program Portal',
           'Time Tracking',
           'Weekly Report',
           'Billed Monthly',
         ],
        },
        {
          id: 3,
          title: "Startup ",
          link: 'Dedicated',
          description: 'Invent the Future',
          dollar:'$',
          price: '235',
          month: '/week',
          includedFeatures: 
          ['32 hours/week',
           'Process Wiki',
           'Standard SOPs',
           'Custom SOPs',
           'Dedicated Concierge',
           'Weekly Call',
           'Program Portal',
           'Time Tracking',
           'Weekly Report',
           'Billed Monthly',
           ],
        },
        {
          id: 4,
          title: "Accelerator",
          link: 'Dedicated',
          description: 'Purpose-build your program team',
          month: 'Tailored Pricing',
          includedFeatures: 
          [ 'Data Mining',
            'Lead Generation',
            'Managed CRM',
            'Content Moderation',
            'Online Marketing' ,
            'Tech Support' ,
            'Customer Support',
            'Blogging',
            'Web Development',
           ],
        },
      ],
    
     
    })

    return { 
      isOpen, 
      closeModal() {
        isOpen.value = false
      },
        openModal(value) {
          isOpen.value = true;
        },

      
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      
      categories,
    
    
    }
  },
}
</script>
