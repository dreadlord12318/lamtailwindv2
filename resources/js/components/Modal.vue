<template>
    <transition name = "modal-animation">
        <div v-show="modalActive" class = "modal">
            <transition name = "modal-animation-inner">
                <div v-show="modalActive" class = "modal-inner">
                    <!-- Modal Content -->
                    <slot />
                    <button>Close</button>
                </div>
            </transition>
        </div>
    </transition>

    
</template>

<script>


export default ({
   props: ["modalActive"]
})
</script>
