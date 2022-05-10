import { createApp } from 'vue';

import App from './App.vue';
import { enrutador } from './enrutador';

const aplicacionDeVue = createApp(App);

aplicacionDeVue.use(enrutador);
aplicacionDeVue.mount('#app');
