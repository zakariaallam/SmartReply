import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import {router} from './router'
import { initAuth } from './services/Auth'

const app = createApp(App)

app.use(createPinia())
app.use(router)

initAuth()
app.mount('#app')
