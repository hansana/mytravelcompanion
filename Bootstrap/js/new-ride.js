/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//function initialize() {
//
//var input = document.getElementById('searchTextField1');
//var autocomplete = new google.maps.places.Autocomplete(input);
//
//var input = document.getElementById('searchTextField2');
//var autocomplete = new google.maps.places.Autocomplete(input);
//
//}
//
//google.maps.event.addDomListener(window, 'load', initialize);

    function initialize() {
        var input = document.getElementById('searchTextField1');
        var autocomplete1 = new google.maps.places.Autocomplete(input);
        google.maps.event.addListener(autocomplete1, 'place_changed', function () {
            var place1 = autocomplete1.getPlace();
            document.getElementById('city1').value = place1.name;
            document.getElementById('city1Lat').value = place1.geometry.location.lat();
            document.getElementById('city1Lng').value = place1.geometry.location.lng();
//            alert("This function1 is working!");
//            alert(place1.name);
//            alert(place1.address_components[0].long_name);
        });
        var input = document.getElementById('searchTextField2');
        var autocomplete2 = new google.maps.places.Autocomplete(input);
        google.maps.event.addListener(autocomplete2, 'place_changed', function () {
            var place2 = autocomplete2.getPlace();
            document.getElementById('city2').value = place2.name;
            document.getElementById('city2Lat').value = place2.geometry.location.lat();
            document.getElementById('city2Lng').value = place2.geometry.location.lng();
//            alert("This function2 is working!");
//            alert(place2.name);
//            alert(place2.address_components[0].long_name);            
         });
    }
    google.maps.event.addDomListener(window, 'load', initialize); 