//creation de la carte qui sera integrer dans un contenair(div) dans le html
var chart=am4core.create('carte',am4maps.MapChart);
//ajout du fichier contenant les donne de la localite ici burkina faso
chart.geodata=am4geodata_burkinaFasoHigh;
//attribution de la projection
chart.projection=new am4maps.projections.Miller();

var polygonserie=chart.series.push(new am4maps.MapPolygonSeries());
polygonserie.heatRules.push({
    property: "fill",
    target:polygonserie.mapPolygons.template,
    min:chart.colors.getIndex(1).brighten(1),
    max:chart.colors.getIndex(1).brighten(-0.3)
});
//autorise l'utilisation des fichiers geodata telecharger d'une localite
polygonserie.useGeodata=true;

//creation du text qui apparai lorsque la souri pass au dessu d'une region
var polygonTemplate = polygonserie.mapPolygons.template;
polygonTemplate.tooltipText = "{name}";
polygonTemplate.polygon.fillOpacity = 0.6;


// creer un hover au passage de la souris
var hs = polygonTemplate.states.create("hover");
hs.properties.fill = chart.colors.getIndex(0);

var imageSeries = chart.series.push(new am4maps.MapImageSeries());
imageSeries.mapImages.template.propertyFields.longitude = "longitude";
imageSeries.mapImages.template.propertyFields.latitude = "latitude";
imageSeries.mapImages.template.tooltipText = "{title}";
imageSeries.mapImages.template.propertyFields.url = "url";

var circle = imageSeries.mapImages.template.createChild(am4core.Circle);
circle.radius = 7;
circle.propertyFields.fill = "color";

var circle2 = imageSeries.mapImages.template.createChild(am4core.Circle);
circle2.radius = 7;
circle2.propertyFields.fill = "color";


circle2.events.on("inited", function(event){
  animateBullet(event.target);
})


function animateBullet(circle) {
    var animation = circle.animate([{ property: "scale", from: 1, to: 5 }, { property: "opacity", from: 1, to: 0 }], 1000, am4core.ease.circleOut);
    animation.events.on("animationended", function(event){
      animateBullet(event.target.object);
    })
}

var colorSet = new am4core.ColorSet();
//on prend les donne du model et on les adaptent a la carte dans l'index,c'est la vu(mvc)
$.get('include/datafile.php',function(data){
    console.log($.parseJSON(data));
    imageSeries.data=$.parseJSON(data);
}).fail(function(){
    alert('failled');
});
chart.seriesContainer.events.on("hit",function(ev) {
  console.log(chart.svgPointToGeo(ev.svgPoint));
});
