<template>
  <div class="w-full px-4 pt-4 bg-lamblue-100">
    <div class="max-w-full mx-auto pt-4 pb-16">
        <div class="max-w-7xl mx-auto divide-y divide-lambright-200">
            <h2 class="font-concourset7 text-3xl font-normal trackin-normal leading-snug text-black capitalize text-center">
                Questions?
            </h2>
            <dl class="mt-6 space-y-6 ">
        <div class="pt-1">
      <Disclosure v-slot="{ open }">
           <dt class="text-lg">
        <DisclosureButton
          class="flex justify-between w-full py-2 font-concourset4 text-xl font-normal tracking-normal leading-snug text-newcolor-500 normal-case"
        >
          <span>I don’t know where to start. Can you help me?</span>
          <ChevronUpIcon
            :class="open ? 'transform rotate-180' : ''"
            class="w-5 h-5 text-lambright-600"
          />
        </DisclosureButton>
           </dt>
        <DisclosurePanel class=" pt-4 pb-2 font-copy2 text-base font-normal tracking-normal leading-relaxed text-newcolor-200 mt-2 pr-12 normal-case" >
         <p>We’re happy to hunker down over a Zoom call and learn about your work. With that in mind, we can suggest how to proceed.</p>
        </DisclosurePanel>
      </Disclosure>
        </div>
            </dl>
             <Disclosure as="div" class="mt-0" v-slot="{ open }">
        <DisclosureButton
          class="flex justify-between w-full py-2 font-concourset4 text-xl font-normal tracking-normal leading-snug text-newcolor-500 normal-case"
        >
          <span>Can you explain how the Concierge works?</span>
          <ChevronUpIcon
            :class="open ? 'transform rotate-180' : ''"
            class="w-5 h-5 text-lambright-600"
          />
        </DisclosureButton>
        <DisclosurePanel class=" pt-4 pb-2 font-copy2 text-base font-normal tracking-normal leading-relaxed text-newcolor-200">
       Your Concierge coordinates with you to collect your tasks, expectations, and any other task or process information needed so we can deliver your work. Think of the Concierge as your hands-on, personal guide to getting things done. He marshals the necessary resources reviews your work for quality and accuracy and reports back to you each week. 
        </DisclosurePanel>
      </Disclosure>
       <Disclosure as="div" class="mt-0" v-slot="{ open }">
        <DisclosureButton
          class="flex justify-between w-full py-2 font-concourset4 text-xl font-normal tracking-normal leading-snug text-newcolor-500 normal-case"
        >
          <span>What’s the Weekly Calibration call?</span>
          <ChevronUpIcon
            :class="open ? 'transform rotate-180' : ''"
            class="w-5 h-5 text-lambright-600"
          />
        </DisclosureButton>
        <DisclosurePanel class=" pt-4 pb-2 font-copy2 text-base font-normal tracking-normal leading-relaxed text-newcolor-200">
          These calls start the week to review deliverables and plan the upcoming week. Once you hand the work off to your Concierge, he will assign the right people to your tasks and ensure it’s delivered on time and on spec. 
        </DisclosurePanel>
      </Disclosure>
      
      <Disclosure as="div" class="mt-0" v-slot="{ open }">
        <DisclosureButton
          class="flex justify-between w-full py-2 font-concourset4 text-xl font-normal tracking-normal leading-snug text-newcolor-500 normal-case"
        >
          <span>What’s the Process Wiki?</span>
          <ChevronUpIcon
            :class="open ? 'transform rotate-180' : ''"
            class="w-5 h-5 text-lambright-600"
          />
        </DisclosureButton>
        <DisclosurePanel class=" pt-4 pb-2 font-copy2 text-base font-normal tracking-normal leading-relaxed text-newcolor-200">
         This is a web-based repository of your processes. We publish them for our team and for you to reference, refine, and improve as we supercharge your workflow.  
        </DisclosurePanel>
      </Disclosure>

      <Disclosure as="div" class="mt-0" v-slot="{ open }">
        <DisclosureButton
          class="flex justify-between w-full py-2 font-concourset4 text-xl font-normal tracking-normal leading-snug text-newcolor-500 normal-case">
          <span>Can I cancel? </span>
          <ChevronUpIcon
            :class="open ? 'transform rotate-180' : ''"
            class="w-5 h-5 text-lambright-600"
          />
        </DisclosureButton>
        <DisclosurePanel class=" pt-4 pb-2 font-copy2 text-base font-normal tracking-normal leading-relaxed text-newcolor-200">
          You can cancel anytime. Send us an email or let your Concierge know on your calibration call. When you cancel, you can use any remaining hours and continue your weekly meetings until the end of the current billing cycle. 
        </DisclosurePanel>
      </Disclosure>
     

     <Disclosure as="div" class="mt-0" v-slot="{ open }">
        <DisclosureButton
          class="flex justify-between w-full py-2 font-concourset4 text-xl font-normal tracking-normal leading-snug text-newcolor-500 normal-case"
        >
          <span>Is there a setup fee?</span>
          <ChevronUpIcon
            :class="open ? 'transform rotate-180' : ''"
            class="w-5 h-5 text-lambright-600"
          />
        </DisclosureButton>
        <DisclosurePanel class=" pt-4 pb-2 font-copy2 text-base font-normal tracking-normal leading-relaxed text-newcolor-200">
         Setup is on us! During onboarding, we work with you to design the most efficient approach to your work and then organize documentation and training for the processes you need. We also configure your project tool and reporting dashboard so you can see what’s happening 24x7.
        </DisclosurePanel>
      </Disclosure>

      <Disclosure as="div" class="mt-0" v-slot="{ open }">
        <DisclosureButton
          class="flex justify-between w-full py-2 font-concourset4 text-xl font-normal tracking-normal leading-snug text-newcolor-500 normal-case"
        >
          <span>Do my unused hours carry over?</span>
          <ChevronUpIcon
            :class="open ? 'transform rotate-180' : ''"
            class="w-5 h-5 text-lambright-600"
          />
        </DisclosureButton>
        <DisclosurePanel class=" pt-4 pb-2 font-copy2 text-base font-normal tracking-normal leading-relaxed text-newcolor-200">
         Use them or lose them. This rarely happens since your Concierge will notify you of any unused hours. He will suggest ways to consume your hours based on your historical usage and task requirements. We can always change your plan to reflect fewer hours. 
        </DisclosurePanel>
      </Disclosure>
      
      <Disclosure as="div" class="mt-0" v-slot="{ open }">
        <DisclosureButton
          class="flex justify-between w-full py-2 font-concourset4 text-xl font-normal tracking-normal leading-snug text-newcolor-500 normal-case"
        >
          <span>How are tasks and hours tracked?</span>
          <ChevronUpIcon
            :class="open ? 'transform rotate-180' : ''"
            class="w-5 h-5 text-lambright-600"
          />
        </DisclosureButton>
        <DisclosurePanel class=" pt-4 pb-2 font-copy2 text-base font-normal tracking-normal leading-relaxed text-newcolor-200">
         We give you access to a project portal to review hours and tasks. You can see tasks and attached deliverables whenever the mood strikes you. 
        </DisclosurePanel>
      </Disclosure>
      
        </div>
    </div>
  </div>
</template>

<script>
import { Disclosure, DisclosureButton, DisclosurePanel } from '@headlessui/vue'
import { ChevronUpIcon } from '@heroicons/vue/solid'

export default {
  components: {
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
    ChevronUpIcon,
  },
}
</script>