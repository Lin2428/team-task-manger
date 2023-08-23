import { defineConfig } from "vite";
import legacy from "@vitejs/plugin-legacy";

export default defineConfig({
  build: {
    emptyOutDir: true,
    outDir: "./webroot/build",
    manifest: true,
    rollupOptions: {
      input: [
        "./resources/js/app.js",
        "./resources/css/app.css"
      ],
    },
  },
});
