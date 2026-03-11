import { fileURLToPath, URL } from 'node:url'
import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import vueJsx from '@vitejs/plugin-vue-jsx'
import vueDevTools from 'vite-plugin-vue-devtools'
import fs from 'fs'
import path from 'path'

export default defineConfig({
  plugins: [
    vue(),
    vueJsx(),
    vueDevTools(),
  ],

  resolve: {
    alias: {
      '@': fileURLToPath(new URL('./src', import.meta.url))
    },
  },

  server: {
    // https: {
    //   key: fs.readFileSync('/etc/certs/key.pem'),
    //   cert: fs.readFileSync('/etc/certs/cert.pem'),
    // },
    https:false,
    port: 5173,
    host: true,
    // watch: {
    //   usePolling: true
    // }
  }
})