if(document.querySelector('#mapa')) {

    const lat = 16.834878
    const lng = -99.898172
    const zoom = 16

    const map = L.map('mapa').setView([lat, lng], zoom);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([lat, lng]).addTo(map)
        .bindPopup(`
            <h2 class="mapa__heading">Cyti BootCamp</h2>
            <p class="mapa__texto">Facultad de Ciencias y Tecnologías de la Información - UAGro</p>
        `)
        .openPopup();
}