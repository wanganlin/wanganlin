import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'

// https://vitejs.dev/config/
export default defineConfig({
  // mode: 'production',
  base: '/admin/',
  build: {
    outDir: '../../public/static/admin'
  },
  plugins: [react()]
})
