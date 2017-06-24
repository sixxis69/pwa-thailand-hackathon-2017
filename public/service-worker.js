importScripts('inc/js/serviceworker-cache-polyfill.js');

var CACHE_NAME = 'progressive-time-cache';

self.addEventListener('install', function(e) {
  e.waitUntil(
    caches.open(CACHE_NAME).then(function(cache) {
      return cache.addAll([
        '',
        'login.html',
        'assets/styles.css',
        'assets/scripts.js'
      ]);
    })
  );
});

self.addEventListener('fetch', function(event) {

  event.respondWith(
    caches.match(event.request).then(function(response) {
      return response || fetch(event.request);
    })
  );
});
