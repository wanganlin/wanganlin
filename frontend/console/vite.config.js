import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'

// https://vitejs.dev/config/
export default defineConfig({
  // mode: 'production',
  base: '/static/console/',
  build: {
    outDir: '../../public/static/console'
  },
  plugins: [react()]
})
