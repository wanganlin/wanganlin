import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'

// https://vitejs.dev/config/
export default defineConfig({
  // mode: 'production',
  base: '/console/',
  build: {
    outDir: '../../public/console'
  },
  plugins: [react()]
})
