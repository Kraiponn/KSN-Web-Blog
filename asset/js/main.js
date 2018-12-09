function initMap() {
    var myLatLng = {lat: 14.048939, lng: 100.605972};

    // Create a map object and specify the DOM element
    // for display.
    var map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      zoom: 15
    });

    // Create a marker and set its position.
    var marker = new google.maps.Marker({
      map: map,
      position: myLatLng,
      title: 'Welcome to my location!'
    });
}

$(function(){
    $("#home a.nav-link:contains('Home')").parent().addClass("active");
    $("#about a.nav-link:contains('About')").parent().addClass("active");
    $("#blog a.nav-link:contains('Blog')").parent().addClass("active");
    $("#contact a.nav-link:contains('Contact')").parent().addClass("active");

    // $("#home .selmi-footer li > a.nav-link:contains('Home')").parent().addClass("semi-footer-menu-active");
    // $("#about a.nav-link:contains('About')").parent().addClass("semi-footer-menu-active");
    // $("#blog a.nav-link:contains('Blog')").parent().addClass("semi-footer-menu-active");
    // $("#contact a.nav-link:contains('Contact')").parent().addClass("semi-footer-menu-active");
});
