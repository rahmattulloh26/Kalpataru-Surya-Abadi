// resources/js/components/map.js

import L from 'leaflet';
import 'leaflet/dist/leaflet.css';

delete L.Icon.Default.prototype._getIconUrl;
L.Icon.Default.mergeOptions({
    iconRetinaUrl: new URL('/node_modules/leaflet/dist/images/marker-icon-2x.png', import.meta.url).href,
    iconUrl: new URL('/node_modules/leaflet/dist/images/marker-icon.png', import.meta.url).href,
    shadowUrl: new URL('/node_modules/leaflet/dist/images/marker-shadow.png', import.meta.url).href,
});

export function initMap() {
    // disini untuk memanggil map
    const mapElement = document.getElementById('map');

    if (mapElement) {
        // disini untuk titik lokasi
        const latitude = -6.200000;
        const longitude = 106.816666;

        // disini untuk zoom
        const map = L.map('map').setView([latitude, longitude], 13);

        // disini untuk tile layer
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        // disini untuk marker
        L.marker([latitude, longitude]).addTo(map)
            .bindPopup('<b>PT Kalpataru Surya Abadi</b><br>Lokasi kantor kami.')
            .openPopup();
    }
}