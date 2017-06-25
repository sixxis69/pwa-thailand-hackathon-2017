importScripts('inc/js/serviceworker-cache-polyfill.js');

var CACHE_NAME = 'progressive-time-cache';

self.addEventListener('install', function(e) {
  e.waitUntil(
    caches.open(CACHE_NAME).then(function(cache) {
      return cache.addAll([
        '',
        'login.html',
        'sign-up.html',
        'project-list.html',
        'project-create.html',
        'project-detail.html',
        'task-list.html',
        'task-detail.html',
        'assets/styles.css',
        'assets/scripts.js',
        'assets/images/bg.svg',
        'assets/images/bg2.svg',
        'assets/images/icon-plus.svg'
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
