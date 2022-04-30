require('./bootstrap');

import { createApp } from 'vue';

import experiances from './pro/experiances/index'
import holidays from './pro/holidays/index'

const app = createApp({})

app.component('experiances-component',experiances)
app.component('holidays-component',holidays)

app.mount('#app')