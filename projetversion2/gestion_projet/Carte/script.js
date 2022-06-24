var map = L.map('map').setView([51.505, -0.09], 13);

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

$('button.go').on('click', function() {
  $(this).parents('.request').hide();
  $('.modal').show();
  
  var markerLayer = L.marker([51.5, -0.09]);
  markerLayer
    .addTo(map)
    .bindPopup(
    `<div class="popup-content">
     <div class="popup-header">
     <a>Kevin Hougasian</a>
     </div>
      email@email.com<br>
      7946 0234
      </div>
      <div class="popup-address">
      Sterry Street Street<br>
      London SE1, UK
      </div>`)
    .openPopup();
});

$('.close-modal').on('click', function() {
  $(this).parents('.modal').hide();
  $('.request').show();
  
  map.closePopup();
});