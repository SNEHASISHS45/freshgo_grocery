const CACHE_NAME = 'freshgo-v1';
const ASSETS = [
    '/',
    '/index.php',
    '/styles.css',
    '/styles2.css',
    '/styles3.css',
    '/styles4.css',
    '/app.js',
    '/manifest.json'
];

self.addEventListener('install', (event) => {
    event.waitUntil(
        caches.open(CACHE_NAME).then((cache) => {
            return cache.addAll(ASSETS);
        })
    );
});

self.addEventListener('fetch', (event) => {
    event.respondWith(
        caches.match(event.request).then((response) => {
            return response || fetch(event.request);
        })
    );
});
