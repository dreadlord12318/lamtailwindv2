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
              'relative w-1/2 bg-white border-gray-200 rounded-md shadow-sm py-2 font-concourset3 text-xs font-normal tracking-normal leading-relaxed text-lamblue-500 normal-case whitespace-nowrap',
              'focus:outline-none  focus:ring-2 focus:ring-lamblue-100 focus:z-10 sm:w-auto sm:px-8',
              selected
                ? 'bg-gray shadow'
                : 'text-black bg-lamblue-100 hover:bg-lambright-600 hover:text-white',
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
            'focus:outline-none focus:ring-2 ring-offset-2 ring-offset-blue-400 ring-white ring-opacity-60',
          ]"
        >
          
           <div class="mt-12 space-y-4 sm:mt-16 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-6 lg:max-w-4xl lg:mx-auto xl:max-w-none xl:mx-0 xl:grid-cols-4">
        <div v-for="pricing in pricings"
              key="post.id"
              class="border border-gray-200 rounded-lg shadow-sm divide-y divide-gray-200">
          <div class="py-6 px-3">
            <h2 class="font-concourset4 text-2xl font-normal tracking-normal leading-snug text-newcolor-50 capitalize"> {{ pricing.title }}</h2>
            <p class="mt-8">
              <span class="font-concourset6  text-base font-normal tracking-normal leading-normal uppercase text-lambright-600">${{ pricing.price}}</span>
              <span class="text-base font-medium text-gray-500">/hour</span>
            </p>
     <a :href="pricing.link" class="mt-8 block w-full bg-newcolor-300 border border-newcolor-300 rounded-md py-2 font-concourset6 text-lg capitalize font-normal tracking-normal leading-normal text-center text-white hover:bg-lambright-600">Start Today</a>
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
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue'

export default {
  components: {
    TabGroup,
    TabList,
    Tab,
    TabPanels,
    TabPanel,
  },
  setup() {
    let categories = ref({
      "Full-time": [
        {
          id: 1,
          title: 'Data Assistant',
          link: '#',
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
          date: '2h ago',
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
          date: '2h ago',
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
          date: '2h ago',
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
    
      "Part-time": [
        {
          id: 1,
          title: 'Data Admin',
          link: '#',
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
          date: '2h ago',
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
          date: '2h ago',
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
          date: '2h ago',
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

    return { categories }
  },
}
</script>
