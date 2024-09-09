import './bootstrap';

import { createApp } from 'vue';
import App from './App.vue';
import RegiForm from './RegiForm.vue';

const app = createApp(App);

// Register the RegiForm component globally if needed
app.component('RegiForm', RegiForm);

app.mount('#app');

// Alternatively, if you want to mount RegiForm to a different element:
const regiFormApp = createApp(RegiForm);
regiFormApp.mount('#RegiForm');
