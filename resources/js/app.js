require('./bootstrap');

import Alpine from 'alpinejs'
 
window.Alpine = Alpine
 
Alpine.start()

import {createApp} from 'vue'
import test from './components/test.vue'
import test2 from './components/test2.vue'
import faq from './components/faq.vue'
import slider from './components/slider.vue'
createApp({
    components:{
test, 
test2,
faq,
slider,}
}).mount('#app')

