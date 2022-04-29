import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';

const cwd = process.cwd();

// https://vitejs.dev/config/
export default defineConfig({
  root: `${cwd}/client`,
  // build: {
  //   manifest: true,
  //   rollupOptions: {
  //     input: `${cwd}/client/main.ts`,
  //   },
  // },
  // server: {
  //   cors: true,
  // },

  plugins: [vue()],
});
