function iniciarMap(){
    var coord = {lat:40.5829354 ,lng:-4.0141403};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}