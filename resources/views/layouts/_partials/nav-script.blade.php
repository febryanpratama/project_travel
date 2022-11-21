        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFIqcyfKaVoWhs4zGxkxqUaLKWl_e1ZgM&callback=initMap&v=weekly" defer></script>


<script>

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            var accuracy = position.coords.accuracy;
            var coords = new google.maps.LatLng(latitude, longitude);
            var mapOptions = {
                zoom: 15,
                center: coords,
                mapTypeControl: true,
                navigationControlOptions: {
                    style: google.maps.NavigationControlStyle.SMALL
                },
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            $('#latitude').val(latitude);
            $('#longitude').val(longitude);

            // console.log(latitude);

            localStorage.setItem('latitude', latitude);
            localStorage.setItem('longitude', longitude);


            map = new google.maps.Map(document.getElementById("map"), mapOptions);
            var marker = new google.maps.Marker({
                position: coords,
                map: map,
                title: "ok"
            });

        },
        function error(msg) {
          // console.log(msg);
                  Swal.fire({
                    title: 'Location Not Allowed',
                    text: "Please turn on your location",
                    icon: 'error',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      window.location.reload();
                    }
                  })

                  // window.location.reload();
        },
        {
          maximumAge:10000, 
          timeout:5000, 
          enableHighAccuracy: true
        }
      );
    } else {
        alert("Geolocation API is not supported in your browser.");
    }

    navigator.permissions && navigator.permissions.query({name: 'geolocation'})
      .then(function(PermissionStatus) {
          if (PermissionStatus.state == 'granted') {
                //allowed
                // console.log("allowed");
          } else if (PermissionStatus.state == 'prompt') {
                // prompt - not yet grated or denied
                // console.log("prompt");
          } else {
              //denied
              //  console.log("denied");
          }
      })

</script>