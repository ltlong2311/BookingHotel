function initMap() {
    // Map option
    let options = {
    center: {lat: 38.3460 , lng:-0.4907 },
    zoom: 8
}

    //New Map
    let map = new google.maps.Map(document.getElementById("map"),options)
    //listen for click on map location

    let MarkerArray = [ {location:{lat: 37.9922, lng: -1.1307},
    imageIcon: "https://img.icons8.com/nolan/2x/marker.png",
    content: `<h2>Murcia City</h2>`},
    ]

    // loop through marker
    for (let i = 0; i < MarkerArray.length; i++){
    addMarker(MarkerArray[i]);

}

    // Add Marker

    function addMarker(property){

    const marker = new google.maps.Marker({
    position:property.location,
    map:map,
    //icon: property.imageIcon
});

    // Check for custom Icon

    if(property.imageIcon){
    // set image icon
    marker.setIcon(property.imageIcon)
}

    if(property.content){

    const detailWindow = new google.maps.InfoWindow({
    content: property.content
});

    marker.addListener("mouseover", () =>{
    detailWindow.open(map, marker);
})
}
}
}