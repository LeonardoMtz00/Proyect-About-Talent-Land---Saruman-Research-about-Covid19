function iniciarMap() {
    console.log('la dirección es: ');
    var texto = "<?php echo $direc; ?>";
    console.log(texto);
    axios.get('https://maps.googleapis.com/maps/api/geocode/json',{
        params:{
            address: '1600 Amphitheatre Parkway, Mountain View, CA',
            key: 'AIzaSyDai40lvZ3-D0bC2Y_VZ8kP_d2OaYwlKQA'
        }
    })
    .then(function(response){
        console.log(response);
    })
    .catch(function(error){
        console.log(error);
    });

    var coord = {lat:-34.5956145 ,lng: -58.4431949};
    var map = new google.maps.Map(document.getElementById('map'),{
        zoom:10,
        center: coord
    });

    var marker = new google.maps.Marker({
        position: coord,
        map: map
      });
}