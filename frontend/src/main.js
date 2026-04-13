import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import {router} from './router'
import { initAuth } from './services/Auth'

async function startApp() {
    

await initAuth()
const app = createApp(App)

app.use(createPinia())
app.use(router)
app.mount('#app')
}
startApp()