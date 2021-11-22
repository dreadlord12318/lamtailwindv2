<template>
  <div class="w-full px-4 pt-4 bg-lamblue-100">
    <div class="max-w-full mx-auto pt-4 pb-16">
        <div class="max-w-7xl mx-auto divide-y-2 divide-lambright-600">
            <h2 class="font-concourset7 text-3xl font-normal trackin-normal leading-snug text-black capitalize text-center">
                Questions?
            </h2>
            <dl class="mt-6 space-y-6 ">
        <div class="pt-6">
      <Disclosure v-slot="{ open }">
           <dt class="text-lg">
        <DisclosureButton
          class="flex justify-between w-full py-2 font-concourset4 text-2xl font-normal tracking-normal leading-snug text-newcolor-50 capitalize"
        >
          <span>Are there term commitments for Lambent’s services?</span>
          <ChevronUpIcon
            :class="open ? 'transform rotate-180' : ''"
            class="w-5 h-5 text-lambright-600"
          />
        </DisclosureButton>
           </dt>
        <DisclosurePanel class=" pt-4 pb-2 font-copy2 text-base font-normal leading-relaxed text-newcolor-50 mt-2 pr-12" >
         <p>There are no term commitments for services. Our cancellation policy <i>requests</i> one month’s notice for a proper transition. 
           We offer an agreement that explains our perspective on the work we do. 
           You can read this in the Terms of Service</p>
        </DisclosurePanel>
      </Disclosure>
        </div>
            </dl>
      <Disclosure as="div" class="mt-2" v-slot="{ open }">
        <DisclosureButton
          class="flex justify-between w-full py-2 font-concourset4 text-2xl font-normal tracking-normal leading-snug text-newcolor-50 capitalize">
          <span>What if I don’t need a full-time employee? </span>
          <ChevronUpIcon
            :class="open ? 'transform rotate-180' : ''"
            class="w-5 h-5 text-lambright-600"
          />
        </DisclosureButton>
        <DisclosurePanel class=" pt-4 pb-2 font-copy2 text-base font-normal leading-relaxed text-newcolor-50">
          Just toggle the slider above to “Shared” to see our pricing for shared resources. 
          In general, we match staff with experience in the clients’ industry or with similar process specifications. 
          Clients can always request additional hours above their initial commitment.
        </DisclosurePanel>
      </Disclosure>
      <Disclosure as="div" class="mt-2" v-slot="{ open }">
        <DisclosureButton
          class="flex justify-between w-full py-2 font-concourset4 text-2xl font-normal tracking-normal leading-snug text-newcolor-50 capitalize"
        >
          <span>What does “documented process” mean?</span>
          <ChevronUpIcon
            :class="open ? 'transform rotate-180' : ''"
            class="w-5 h-5 text-lambright-600"
          />
        </DisclosureButton>
        <DisclosurePanel class=" pt-4 pb-2 font-copy2 text-base font-normal leading-relaxed text-newcolor-50">
          Before we launch a program, we spend time understanding your process and business objectives. 
          We document this information into process maps that drive our hiring profiles, toll specifications, and program training.
        </DisclosurePanel>
      </Disclosure>
      <Disclosure as="div" class="mt-2" v-slot="{ open }">
        <DisclosureButton
          class="flex justify-between w-full py-2 font-concourset4 text-2xl font-normal tracking-normal leading-snug text-newcolor-50 capitalize"
        >
          <span>What is a Dedicated Resource?</span>
          <ChevronUpIcon
            :class="open ? 'transform rotate-180' : ''"
            class="w-5 h-5 text-lambright-600"
          />
        </DisclosureButton>
        <DisclosurePanel class=" pt-4 pb-2 font-copy2 text-base font-normal leading-relaxed text-newcolor-50">
          A Dedicated Resource is a full-time remote worker or a virtual agent/assistant assigned exclusively to your program or project. 
          Your team works on your program with operational management and guidance from Lambent’s managers.
        </DisclosurePanel>
      </Disclosure>
      <Disclosure as="div" class="mt-2" v-slot="{ open }">
        <DisclosureButton
          class="flex justify-between w-full py-2 font-concourset4 text-2xl font-normal tracking-normal leading-snug text-newcolor-50 capitalize"
        >
          <span>What is a Shared Resource?</span>
          <ChevronUpIcon
            :class="open ? 'transform rotate-180' : ''"
            class="w-5 h-5 text-lambright-600"
          />
        </DisclosureButton>
        <DisclosurePanel class=" pt-4 pb-2 font-copy2 text-base font-normal leading-relaxed text-newcolor-50">
          A Shared Resource is a part-time remote worker or a virtual agent/assistant assigned to your program or project. 
          We share staff across similar, but not competitive, projects or programs with operational management and guidance from Lambent’s managers. 
        </DisclosurePanel>
      </Disclosure>
      <Disclosure as="div" class="mt-2" v-slot="{ open }">
        <DisclosureButton
          class="flex justify-between w-full py-2 font-concourset4 text-2xl font-normal tracking-normal leading-snug text-newcolor-50 capitalize"
        >
          <span>What are Calibration Calls?</span>
          <ChevronUpIcon
            :class="open ? 'transform rotate-180' : ''"
            class="w-5 h-5 text-lambright-600"
          />
        </DisclosureButton>
        <DisclosurePanel class=" pt-4 pb-2 font-copy2 text-base font-normal leading-relaxed text-newcolor-50">
          Calibration calls are periodic discussions between our team and the client to align your expectations and requirements to our performance. 
          These calls are critical in the early going for program success.
        </DisclosurePanel>
      </Disclosure>
      <Disclosure as="div" class="mt-2" v-slot="{ open }">
        <DisclosureButton
          class="flex justify-between w-full py-2 font-concourset4 text-2xl font-normal tracking-normal leading-snug text-newcolor-50 capitalize"
        >
          <span>How do you invoice for Shared services?</span>
          <ChevronUpIcon
            :class="open ? 'transform rotate-180' : ''"
            class="w-5 h-5 text-lambright-600"
          />
        </DisclosureButton>
        <DisclosurePanel class=" pt-4 pb-2 font-copy2 text-base font-normal leading-relaxed text-newcolor-50">
          We agree to a minimum hour commitment for your program and invoice at the outset of each month. 
          If your consumed hours exceed the prearranged commitment, we add this to your next invoice (subject to approval, of course). 
          We denominate all invoices in USD.
        </DisclosurePanel>
      </Disclosure>
      <Disclosure as="div" class="mt-2" v-slot="{ open }">
        <DisclosureButton
          class="flex justify-between w-full py-2 font-concourset4 text-2xl font-normal tracking-normal leading-snug text-newcolor-50 capitalize"
        >
          <span>How do you invoice for Dedicated services?</span>
          <ChevronUpIcon
            :class="open ? 'transform rotate-180' : ''"
            class="w-5 h-5 text-lambright-600"
          />
        </DisclosureButton>
        <DisclosurePanel class=" pt-4 pb-2 font-copy2 text-base font-normal leading-relaxed text-newcolor-50">
          For full-time staff, we invoice at the outset of the month for services. 
          The amount varies based on your staffing requirement. We denominatee all invoices in USD.
        </DisclosurePanel>
      </Disclosure>
      <Disclosure as="div" class="mt-2" v-slot="{ open }">
        <DisclosureButton
          class="flex justify-between w-full py-2 font-concourset4 text-2xl font-normal tracking-normal leading-snug text-newcolor-50 capitalize"
        >
          <span>Why do you consider 32 hours full-time?</span>
          <ChevronUpIcon
            :class="open ? 'transform rotate-180' : ''"
            class="w-5 h-5 text-lambright-600"
          />
        </DisclosureButton>
        <DisclosurePanel class=" pt-4 pb-2 font-copy2 text-base font-normal leading-relaxed text-newcolor-50">
          Lambent and its Philippines affiliate work on a four-day, 32-hour workweek. 
          The shortened schedule aligns with our approach to Operational and Human Resource Management, focusing on employee retention for operational efficiency.
        </DisclosurePanel>
      </Disclosure>
      <Disclosure as="div" class="mt-2" v-slot="{ open }">
        <DisclosureButton
          class="flex justify-between w-full py-2 font-concourset4 text-2xl font-normal tracking-normal leading-snug text-newcolor-50 capitalize"
        >
          <span>Can I adjust the scope as needed as my business or program evolve?</span>
          <ChevronUpIcon
            :class="open ? 'transform rotate-180' : ''"
            class="w-5 h-5 text-lambright-600"
          />
        </DisclosureButton>
        <DisclosurePanel class=" pt-4 pb-2 font-copy2 text-base font-normal leading-relaxed text-newcolor-50">
          Occasionally programs change. As schedules or task assignments evolve, we update your SoW to reflect these changes. Updates may have financial implications for lower or higher rates based on changes to the program complexity schedule. 
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