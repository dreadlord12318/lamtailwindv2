<template>
  <div class="max-w-7xl mx-auto py-24 px-4 sm:px-6 lg:px-8">
    <TabGroup>
      <div class="sm:flex sm:flex-col sm:align-center">
        <h1 class="font-concourset7 text-3xl font-normal tracking-normal leading-snug capitalize sm:text-center">Staff Your Remote Team Today</h1>
      <p class="mt-5 font-copy text-xl font-normal tracking-normal leading-relaxed text-black normal-case sm:text-center">Select project rates based on short-term projects, shared staff or long-term programs with full-time support</p>
        <div class = "relative self-center mt-6 bg-gray-100 justify-center rounded-lg p-0.5 flex sm:mt-8">
      <TabList class="flex p-0.5  bg-lamblue-100 rounded-lg">
        <Tab
          v-for="category in Object.keys(categories)"
          as="template"
          :key="category"
          v-slot="{ selected }"
        >
          <button
            :class="[
              'relative w-1/2 bg-white border-gray-200 rounded-md shadow-sm py-2 px-4  font-concourset4 text-sm font-normal tracking-normal leading-normal capitalize text-newcolor-50  whitespace-nowrap',
              'focus:outline-none  focus:ring-2 focus:ring-lamblue-100 focus:z-10 sm:w-auto px-12',
              selected
                ? 'bg-gray shadow'
                : 'font-concourset5 text-sm bg-lamblue-100 font-normal tracking-normal leading-relaxed text-newcolor-200 normal-case',
            ]"
          >
            {{ category }}
          </button>
        </Tab>
      </TabList>
        </div>
        </div>
      <TabPanels class="mt-12">
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
              <span class="font-concourset6  text-3xl font-normal tracking-normal leading-normal uppercase text-lambright-600">${{ pricing.price}}</span>
              <span class="font-concourset3 text-xl font-normal tracking-normal leading-relaxed text-newcolor-400 lowercase">/hour</span>
            </p>
     <a   @click="openModal" class="mt-8 block w-full bg-newcolor-300 border border-newcolor-300 rounded-md py-2 font-concourset6 text-lg capitalize font-normal tracking-normal leading-normal text-center text-white hover:bg-lambright-600">Start Today</a>
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
                class="text-lg text-center font-medium leading-6 text-gray-900"
              >
               START TODAY
              </DialogTitle>
              <div class="mt-2">
                
               <form action="/contact" class="sm:max-w-xl sm:mx-auto lg:mx-0" method="POST">
             <input type="hidden" name="_token" v-bind:value="csrf">
                  <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                      <div>
                <div class="mt-1">
                  <input type="text" placeholder="First Name" name="first_name" id="first_name" autocomplete="given-name" class="block w-full py-3.5 px-4 font-concourset3 text-base font-normal-400 tracking-normal leading-relaxed normal-case shadow-sm s focus:ring-grape-500 focus:border-grape-500 border-gray-300 rounded-md">
                </div>
              </div>
              <div>
                <div class="mt-1">
                  <input type="text" placeholder="Last Name" name="last_name" id="last_name" autocomplete="family-name" class="block w-full font-concourset3 text-base font-normal-400 tracking-normal leading-relaxed normal-case  py-3.5 px-4 shadow-sm  focus:ring-grape-500 focus:border-grape-500 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-2">
                <div class="mt-1">
                  <input id="email" placeholder="Email" name="email" type="email" autocomplete="email" class="block w-full font-concourset3 text-base font-normal-400 tracking-normal leading-relaxed normal-case  py-3.5 px-4 shadow-sm  focus:ring-grape-500 focus:border-grape-500 border-gray-300 rounded-md">
                </div>
              </div>
               
              <div class="sm:col-span-2">
                    <div class="mt-1">
                      <button type="submit"  @click="closeModal" class="block w-full py-3 px-6 font-concourset6 text-lg capitalize font-normal tracking-normal leading-normal align-middle px-5 rounded-md shadow bg-newgrowth-300 text-white hover:bg-newgrowth-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300 focus:ring-offset-gray-900">Let's Talk</button>
                    </div>
                </div>
                  </div>
                  <p class="mt-3 font-concourset3 font-normal tracking-normal leading-relaxed normal-case text-xs text-gray-300 sm:mt-4">By providing your email, you agree to our <a href="#" class="font-medium text-black">terms of service</a>.</p>
                </form>
              </div>

              <div class="mt-4">
               
              </div>
            </div>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
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
     const isOpen = ref(false)
    let categories = ref({
      "Dedicated": [
        {
          id: 1,
          title: 'Data Assistant',
          link: '#',
          description: 'Move all things data from manipulation to collection. Data assistants handle ongoing, repetitive tasks that consume your time and attention.',
          price: 4.99,
          includedFeatures: 
          ['Full-time (32 hs/week)',
           'Documented Process',
           'Weekly Calibration',
           'Data Mining',
           'Data Append',
           'Reformatting',
           'Basic Research',
           'Image Tagging',
           'Backlinking'],
        },
        {
          id: 2,
          title: "Process Assistant",
          link: '#',
          description: 'Document your processes and transition them to a focused team of admin pros. Move your day-to-day work to capable, well-managed teams.',
          price: 6.99,
          includedFeatures: 
          ['Full-time (32 hs/week)',
           'Documented Process',
           'Weekly Calibration',
           'Order Tracking',
           'Email Management',
           'CRM Management',
           'Basic Website Updates',
           'Social Posting',
           'Document Processing'],
        },
        {
          id: 3,
          title: "Support Agent",
          link: '#',
          description: 'Build your happy, delighted customer team for organizations that want long-lasting, close customer relationships.',
          price: 11.49,
          includedFeatures: 
          ['Full-time (32 hs/week)',
           'Documented Process',
           'Weekly Calibration',
           'Helpdesk Platform',
           'Chat, Email, Voice, Social',
           'Billing Support',
           'Reservation Support',
           'Helpdesk Platform',
           'Technical Support'],
        },
        {
          id: 4,
          title: "Writer/Designer/Developer",
          link: '#',
          description: 'Content is king. Writers for blog and social copy, designers for engaging infographics and social posts, and developers to create and maintain your site.',
          price: 14.99,
          includedFeatures: 
          ['Full-time (32 hs/week)',
           'Weekly Calibration',
           'Site Updates',
           'Blogging',
           'Presentations',
           'Infographics',
           'Branding',
           'Laravel Development',
           'Ghost Implementation'],
        },
      ],
    
      "Shared": [
        {
          id: 1,
          title: 'Data Admin',
          link: '#',
          description: 'Build a custom list or append existing data. A data admin can finish work on your projects that require focused time and attention.',
          price: 6.99,
          includedFeatures: 
          ['Part-time',
           '4-24 hours/weeks',
           'Process design',
           'Bi-weekly calibration calls',
           'Data mining',
           'Data append ',
           'Reformatting',
           'Research',
           'Image tagging'],
        },
        {
          id: 2,
          title: "Process Assistant",
          link: '#',
          description: 'Engage Lambent to document process flows for complex procedures and support you with a temporary team or part-time assistant.',
          price: 8.49,
          includedFeatures: 
          ['Part-time/Temporary',
           'Documented Process',
           'Weekly Calibration',
           'List Building',
           'Data Migration',
           'Document Organization',
           'CRM Import',
           ],
        },
        {
          id: 2,
          title: "Voice Agent",
          link: '#',
          description: 'Conduct short-term campaigns like tele-surveys, lead generation, appointment setting with all-in pricing for agents, scripts, and telco.',
          price: 12.99,
          includedFeatures: 
          ['Part-time/Temporary',
           'Documented Process',
           'Weekly Calibration',
           'Scripts & Escalations',
           'Telco Platform',
           'Surveys',
           'Reminders',
           'Notifications',
           'Lead Verification'],
        },
        {
          id: 2,
          title: "Writer/Designer/Developer",
          link: '#',
          description: 'Complete quick online marketing projects or engage permanent, part-time support with Lambent’s team of marketing professionals.',
          price: 15.99,
          includedFeatures: 
          ['Part-time/Temporary',
           'Project Planning',
           'Weekly Calibration',
           'Site Updates',
           'Site Copy',
           'Social Templates',
           'Branding',
           'Laravel Development',
           'Ghost Implementation'],
        },
      ],
    })

    return { 
      isOpen,
      closeModal() {
        isOpen.value = false
      },
      openModal() {
        isOpen.value = true
      },
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      
      categories,
    
    
    }
  },
}
</script>
