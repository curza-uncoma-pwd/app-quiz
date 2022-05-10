import { createRouter, createWebHistory, RouteRecordRaw } from 'vue-router';

import HelloWorld from './components/HelloWorld.vue';
import Preguntas from './vistas/Preguntas.vue';
import AcercaDe from './vistas/AcercaDe.vue';

const rutas: RouteRecordRaw[] = [
  { path: '/', component: Preguntas },
  {
    path: '/hola-mundo',
    component: HelloWorld,
    props: { msg: 'Hello Vue 3 + TypeScript + Vite' },
  },
  { path: '/acerca-de', component: AcercaDe },
];

export const enrutador = createRouter({
  history: createWebHistory(),
  routes: rutas,
});
