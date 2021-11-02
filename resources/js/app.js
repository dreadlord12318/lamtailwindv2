require('./bootstrap');

import Alpine from 'alpinejs'
 
window.Alpine = Alpine
 
Alpine.start()

import {createApp} from 'vue'
import test from './components/test.vue'

createApp({
    components:{
test,}
}).mount('#app')

