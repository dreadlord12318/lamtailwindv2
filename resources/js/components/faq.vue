<template>
  <div class="w-full px-4 pt-4 bg-lamblue-100">
    <div class="max-w-full mx-auto pt-4 pb-16">
        <div class="max-w-7xl mx-auto divide-y-2 divide-lambright-600">
            <h2 class="font-concourset7 text-3xl font-normal trackin-normal leading-snug text-black capitalize text-center">
                Frequently asked questions
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
         <p>There are no term commitments for services. Our cancellation policy 
         requests one month notice for proper transition. We offer an agreement that explains our perspective on the work we do.
          You can read this in the Terms of Service.</p>
        </DisclosurePanel>
      </Disclosure>
        </div>
            </dl>
      <Disclosure as="div" class="mt-2" v-slot="{ open }">
        <DisclosureButton
          class="flex justify-between w-full py-2 font-concourset4 text-2xl font-normal tracking-normal leading-snug text-newcolor-50 capitalize">
          <span>What if I don’t need a full-time employee?</span>
          <ChevronUpIcon
            :class="open ? 'transform rotate-180' : ''"
            class="w-5 h-5 text-lambright-600"
          />
        </DisclosureButton>
        <DisclosurePanel class=" pt-4 pb-2 font-copy2 text-base font-normal leading-relaxed text-newcolor-50">
          Just toggle the slider above to “Shared” to see our pricing for shared resources. In general, we try to match shared staff with programs in the same industry or with similar process requirements. We allow out clients to request additional hours above their initial commitment.
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
          When we start a program, we spend time to understand your process and their business objectives. We document this information in process maps we use to develop training for your team/resource and to specify the tools we use to deliver services.
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