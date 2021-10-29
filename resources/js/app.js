
require('./bootstrap');
import Vue from 'vue';

import { BootstrapVue, IconsPlugin ,ModalPlugin } from 'bootstrap-vue'
// Import Bootstrap an BootstrapVue CSS files (order is important)
import 'bootstrap-vue/dist/bootstrap-vue.css'



// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)
Vue.use(ModalPlugin)
Vue.component('medidas', require('./components/medidas.vue').default);


const app = new Vue({
    el :"#app",
}
);

