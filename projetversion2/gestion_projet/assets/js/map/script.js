
let config = {
    minZoom: 7,
    maxZoom: 18,
};


  
const zoom = 11; 
const lat = 31.630000;
const lng = -8.008889;
  

const map = L.map("map",{fullscreenControl: {pseudoFullscreen: true}, measureControl: true }).setView([lat, lng], zoom);

var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
  maxZoom: 20,
  subdomains:['mt0','mt1','mt2','mt3']
});

googleSat.addTo(map);
var carte= L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
    attribution:
      '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
  }).addTo(map);


function onMapClick(e) {
    popup
    .setLatLng(e.latlng)
    .setContent('You clicked the map at ' + e.latlng.toString())
    .openOn(map);
};

//-------------------------------------------------------
//sidebar------------------------------------------------

const menuItems = document.querySelectorAll(".menu-item");
const sidebar = document.querySelector(".sidebar");
const buttonClose = document.querySelector(".close-button");
  
menuItems.forEach((item) => {
  item.addEventListener("click", (e) => {
  const target = e.target;
  
    if (
        target.classList.contains("active-item") ||
        !document.querySelector(".active-sidebar")
      ) {
        document.body.classList.toggle("active-sidebar");
      }
  
      showContent(target.dataset.item);
      addRemoveActiveItem(target, "active-item");
    });
  });

  buttonClose.addEventListener("click", () => {
    closeSidebar();
  });
  
  
  function addRemoveActiveItem(target, className) {
    const element = document.querySelector(`.${className}`);
    target.classList.add(className);
    if (!element) return;
    element.classList.remove(className);
  }
  
  
  function showContent(dataContent) {
    const idItem = document.querySelector(`#${dataContent}`);
    addRemoveActiveItem(idItem, "active-content");
  }
  
  
  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape") {
      closeSidebar();
    }
  });
  
  
  document.addEventListener("click", (e) => {
    if (!e.target.closest(".sidebar")) {
      closeSidebar();
    }
  });
  
  function closeSidebar() {
    document.body.classList.remove("active-sidebar");
    const element = document.querySelector(".active-item");
    const activeContent = document.querySelector(".active-content");
    if (!element) return;
    element.classList.remove("active-item");
    activeContent.classList.remove("active-content");
  }



  Notiflix.Notify.init({
      width: "280px",
      position: "right-bottom",
      distance: "10px",
    });
  
  
  L.Control.geocoder().addTo(map);
  
  const customControl = L.Control.extend({
    options: {
      position: "topright",
    },
  
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
  
        container.appendChild(button);
      });
  
      return container;
    },
  });
  map.addControl(new customControl());

  //drawitem---------------------------------------------------------------

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
    console.log(layer._latlngs);
    let cord= JSON.stringify(layer.toGeoJSON());
    document.getElementById('geom').value = cord;
    console.log(layer);
    console.log(cord);
    
    
   
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


  // --------------------------------------------------
  // Mesure
  
  
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
    "Google Map":carte,
    
    };
    
    //affichage des projets d'investissement
    var $prj = new L.GeoJSON.AJAX("http://localhost/projectpfe/projetversion2/data_json/data.projet.fetchallgeojson.php",{onEachFeature: function(feature, layer) {
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
  
    