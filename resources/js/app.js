require('./bootstrap');

import { createApp } from 'vue';

import Form from 'vform';
window.Form = Form;

import experiances from './management/components/experiances'
import holidays from './management/components/holidays'

const app = createApp({})

app.component('experiances-component',experiances)
app.component('holidays-component',holidays)

app.mount('#app')