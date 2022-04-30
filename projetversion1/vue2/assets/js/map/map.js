var map = L.map('map', {fullscreenControl: {pseudoFullscreen: true}, measureControl: true }).setView([31.630000,-8.008889], 11);

            

            /*layer google satellites */
            var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
                maxZoom: 20,
                subdomains:['mt0','mt1','mt2','mt3']
            });
            googleSat.addTo(map);

           /*layer googleStreets */
           var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
            });
            googleStreets.addTo(map);

            /*fonction de l'envenement click*/
            function onMapClick(e) {
            popup
            .setLatLng(e.latlng)
            .setContent('You clicked the map at ' + e.latlng.toString())
            .openOn(map);
            };

            // Geosearch
            L.Control.geocoder().addTo(map);

// --------------------------------------------------
// Nofiflix options

Notiflix.Notify.init({
  width: "280px",
  position: "right-bottom",
  distance: "10px",
});

// --------------------------------------------------
// add buttons to map

const customControl = L.Control.extend({
  // button position
  options: {
    position: "topright",
  },

  // method
  onAdd: function () {
    const array = [
      {
        title: "export features geojson",
        html: "<svg class='icon-geojson'><use xlink:href='#icon-export'></use></svg>",
        className: "export link-button leaflet-bar",
      },
      {
        title: "save geojson",
        html: "<svg class='icon-geojson'><use xlink:href='#icon-add'></use></svg>",
        className: "save link-button leaflet-bar",
      },
      {
        title: "remove geojson",
        html: "<svg class='icon-geojson'><use xlink:href='#icon-remove'></use></svg>",
        className: "remove link-button leaflet-bar",
      },
      {
        title: "load gejson from file",
        html: "<input type='file' id='geojson' class='geojson' accept='text/plain, text/json, .geojson' onchange='openFile(event)' /><label for='geojson'><svg class='icon-geojson'><use xlink:href='#icon-import'></use></svg></label>",
        className: "load link-button leaflet-bar",
      },
    ];

    const container = L.DomUtil.create(
      "div",
      "leaflet-control leaflet-action-button"
    );

    array.forEach((item) => {
      const button = L.DomUtil.create("a");
      button.href = "#";
      button.setAttribute("role", "button");

      button.title = item.title;
      button.innerHTML = item.html;
      button.className += item.className;

      // add buttons to container;
      container.appendChild(button);
    });

    return container;
  },
});
map.addControl(new customControl());

// Drow polygon, circle, rectangle, polyline
// --------------------------------------------------

let drawnItems = L.featureGroup().addTo(map);

map.addControl(
  new L.Control.Draw({
    edit: {
      featureGroup: drawnItems,
      poly: {
        allowIntersection: false,
      },
    },
    draw: {
      polygon: {
        allowIntersection: false,
        showArea: true,
      },
    },
  })
);

map.on(L.Draw.Event.CREATED, function (event) {
  let layer = event.layer;
  let feature = (layer.feature = layer.feature || {});
  let type = event.layerType;

  feature.type = feature.type || "Feature";
  let props = (feature.properties = feature.properties || {});

  props.type = type;

  if (type === "circle") {
    props.radius = layer.getRadius();
  }

  drawnItems.addLayer(layer);
});

// --------------------------------------------------
// save geojson to file

const exportJSON = document.querySelector(".export");

exportJSON.addEventListener("click", () => {
  // Extract GeoJson from featureGroup
  const data = drawnItems.toGeoJSON();

  if (data.features.length === 0) {
    Notiflix.Notify.failure("You must have some data to save a geojson file");
    return;
  } else {
    Notiflix.Notify.info("You can save the data to a geojson");
  }

  // Stringify the GeoJson
  const convertedData =
    "text/json;charset=utf-8," + encodeURIComponent(JSON.stringify(data));

  exportJSON.setAttribute("href", "data:" + convertedData);
  exportJSON.setAttribute("download", "data.geojson");
});

// --------------------------------------------------
// save geojson to localstorage
const saveJSON = document.querySelector(".save");

saveJSON.addEventListener("click", (e) => {
  e.preventDefault();

  const data = drawnItems.toGeoJSON();

  if (data.features.length === 0) {
    Notiflix.Notify.failure("You must have some data to save it");
    return;
  } else {
    Notiflix.Notify.success("The data has been saved to localstorage");
  }

  localStorage.setItem("geojson", JSON.stringify(data));
});

// --------------------------------------------------
// remove gojson from localstorage

const removeJSON = document.querySelector(".remove");

removeJSON.addEventListener("click", (e) => {
  e.preventDefault();
  localStorage.removeItem("geojson");

  Notiflix.Notify.info("All layers have been deleted");

  drawnItems.eachLayer(function (layer) {
    drawnItems.removeLayer(layer);
  });
});

// --------------------------------------------------
// load geojson from localstorage

const geojsonFromLocalStorage = JSON.parse(localStorage.getItem("geojson"));

function setGeojsonToMap(geojson) {
  const feature = L.geoJSON(geojson, {
    style: function (feature) {
      return {
        color: "red",
        weight: 2,
      };
    },
    pointToLayer: (feature, latlng) => {
      if (feature.properties.type === "circle") {
        return new L.circle(feature.geometry.coordinates.reverse(), {
          radius: feature.properties.radius,
        });
      } else if (feature.properties.type === "circlemarker") {
        return new L.circleMarker(feature.geometry.coordinates.reverse(), {
          radius: 10,
        });
      } else {
        return new L.Marker(latlng);
      }
    },
    onEachFeature: function (feature, layer) {
      drawnItems.addLayer(layer);
      const coordinates = feature.geometry.coordinates.toString();
      const result = coordinates.match(/[^,]+,[^,]+/g);

      layer.bindPopup(
        "<span>Coordinates:<br>" + result.join("<br>") + "</span>"
      );
    },
  }).addTo(map);

  map.flyToBounds(feature.getBounds());
}

if (geojsonFromLocalStorage) {
  setGeojsonToMap(geojsonFromLocalStorage);
}

// --------------------------------------------------
// get geojson from file

function openFile(event) {
  const input = event.target;

  const reader = new FileReader();
  reader.onload = function () {
    const result = reader.result;
    const geojson = JSON.parse(result);

    Notiflix.Notify.info("The data has been loaded from the file");

    setGeojsonToMap(geojson);
  };
  reader.readAsText(input.files[0]);
}


L.Measure = {
  linearMeasurement: "Distance measurement",
  areaMeasurement: "Area measurement",
  start: "1",
  meter: "m",
  kilometer: "km",
  squareMeter: "m²",
  squareKilometers: "km²",
  };

  var measure = L.control.measure({position: 'topright'}).addTo(map);

  //Print
  L.control.browserPrint().addTo(map);

  //Echelle
  L.control.scale().addTo(map);


  //base layers
  var baseLayers = {
  "Satellite":googleSat,
  "Google Map":googleStreets,
  
  };
  
  //affichage des projests d'inverstissements  
  var $prj = new L.GeoJSON.AJAX("http://localhost/projectpfe/datageojson/data_prj_gejson.php",{onEachFeature: function(feature, layer) {
          layer.bindPopup("<p>"+feature.properties.intitule_projet+"</p>");
  }});
  
  var over_projet = {
      maxZoom: 16,
      tolerance: 1,
      debug: 3,
      style: {
      fillColor: "red",
      color: "red",
      },
  };

  var overlays = {"projet": $prj};
  L.control.layers(baseLayers,overlays).addTo(map);

  // --------------------------------------------------
