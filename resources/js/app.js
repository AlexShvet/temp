import './bootstrap';

import { createApp } from "vue/dist/vue.esm-bundler.js";
import PostIndex from "./components/Posts/PostIndex.vue";
const app = createApp({});
app.component("post-index", PostIndex);

app.mount("#app");