import axios from 'axios';
import 'bootstrap-icons/font/bootstrap-icons.min.css';
import hljs from 'highlight.js/lib/core';
import php from 'highlight.js/lib/languages/php';
import 'highlight.js/styles/atom-one-dark.min.css';

hljs.registerLanguage('php', php);

document.addEventListener('DOMContentLoaded', () => {
    hljs.highlightAll();
});

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
