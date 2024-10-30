import './bootstrap';

import swipePlugin from 'alpinejs-swipe';

document.addEventListener('alpine:init', () => {
    Alpine.plugin(swipePlugin)
});

import.meta.glob(['../img/**']);
