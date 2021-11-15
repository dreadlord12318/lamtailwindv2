require('./bootstrap');

import Alpine from 'alpinejs'
 
window.Alpine = Alpine
 
Alpine.start()

import {createApp} from 'vue'
import test from './components/test.vue'
import test2 from './components/test2.vue'

createApp({
    components:{
test, 
test2,}
}).mount('#app')

