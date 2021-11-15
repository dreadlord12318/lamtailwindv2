<template>
  <div class="max-w-7xl mx-auto py-24 px-4 sm:px-6 lg:px-8">
    <TabGroup>
        <div class = "relative self-center mt-6 bg-gray-100 justify-center rounded-lg p-0.5 flex sm:mt-8">
      <TabList class="flex p-1 space-x-1 bg-gray rounded-xl">
        <Tab
          v-for="category in Object.keys(categories)"
          as="template"
          :key="category"
          v-slot="{ selected }"
        >
          <button
            :class="[
              'relative w-1/2 bg-white border-gray-200 rounded-md shadow-sm py-2 text-sm font-medium text-gray-900 whitespace-nowrap',
              'focus:outline-none  focus:ring-2 focus:ring-indigo-500 focus:z-10 sm:w-auto sm:px-8',
              selected
                ? 'bg-gray shadow'
                : 'text-black bg-lambright-500 hover:bg-lambright-600 hover:text-white',
            ]"
          >
            {{ category }}
          </button>
        </Tab>
      </TabList>
        </div>
      <TabPanels class="mt-2">
        <TabPanel
          v-for="(posts, idx) in Object.values(categories)"
          :key="idx"
          :class="[
            'bg-white rounded-xl p-3',
            'focus:outline-none focus:ring-2 ring-offset-2 ring-offset-blue-400 ring-white ring-opacity-60',
          ]"
        >
          
           <div class="mt-12 space-y-4 sm:mt-16 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-6 lg:max-w-4xl lg:mx-auto xl:max-w-none xl:mx-0 xl:grid-cols-4">
        <div v-for="post in posts"
              key="post.id"
              class="relative p-3 rounded-md hover:bg-coolGray-100">
          <div class="p-6">
            <h2 class="text-lg leading-6 font-medium text-gray-900"> {{ post.title }}</h2>
            <p class="mt-4 text-sm text-gray-500"><li>{{ post.date }}</li></p>
            <p class="mt-8">
              <span class="text-4xl font-extrabold text-gray-900">${{ post.commentCount }}</span>
              {{ ' ' }}
              <span class="text-base font-medium text-gray-500">/mo {{ post.shareCount }}</span>
            </p>
     
          </div>
          <div class="pt-6 pb-8 px-6">
            <h3 class="text-xs font-medium text-gray-900 tracking-wide uppercase">What's included</h3>
            <ul role="list" class="mt-6 space-y-4">
            
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
      Recent: [
        {
          id: 1,
          title: 'Does drinking coffee make you smarter?',
          date: '5h ago',
          commentCount: 5,
          shareCount: 2,
        },
        {
          id: 2,
          title: "So you've bought coffee... now what?",
          date: '2h ago',
          commentCount: 3,
          shareCount: 2,
        },
      ],
    
      Trending: [
        {
          id: 1,
          title: 'Ask Me Anything: 10 answers to your questions about coffee',
          date: '2d ago',
          commentCount: 9,
          shareCount: 5,
        },
        {
          id: 2,
          title: "The worst advice we've ever heard about coffee",
          date: '4d ago',
          commentCount: 1,
          shareCount: 2,
        },
        {
          id: 2,
          title: "The worst advice we've ever heard about coffee",
          date: '4d ago',
          commentCount: 1,
          shareCount: 2,
        },
      ],
    })

    return { categories }
  },
}
</script>
