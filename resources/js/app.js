import './bootstrap';

import { initHeroSwiper } from './components/swiper';
import { initMap } from './components/map';

// Jalankan semua script inisialisasi saat DOM sudah siap dimuat
document.addEventListener('DOMContentLoaded', () => {
    initHeroSwiper();
    initMap();
});