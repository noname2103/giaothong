@extends('users.layout.navbar')

@section('content')

    <div class="col-12 col-sm-12 col-lg-9 newfeed" style="margin-top: 6.5%;">
        <div id="Map" class="shadow-sm rounded border"></div>
    </div>
    <script>
    if(navigator.geolocation){
        $("#Map").css({"width": "100%", "height": "500px", "margin-bottom": "10px"});
        var mapDiv = document.getElementById('Map');
        var nav = navigator.geolocation;
        var pos = nav.getCurrentPosition(showPosition);

        function showPosition(position)
        {
            var lat = position.coords.latitude;
            var lon = position.coords.longitude;
            
            var map;

            $("#lat").val(lat);
            $("#lon").val(lon);
            
            console.log(lat + ":" + lon);

            var options = { 
                zoom:17,
                center:{lat:lat,lng:lon}
            }
            var map=new google.maps.Map(mapDiv, options);

            var marker = new google.maps.Marker({
                position:{lat:lat,lng:lon},
                map:map
            });
        }

        
        
        
    }
    </script>
    @foreach($pingtraffic as $pt)
    <script>
                // Các tọa độ của đường thẳng sẽ đi qua
                var flightPlanCoordinates = [
                    new google.maps.LatLng($pt->lat, $pt->lon),
                    new google.maps.LatLng($pt->lat - 3, $pt->lon - 3),
                ];
                 
                // Tạo polyline
                var flightPath = new google.maps.Polyline({
                    path: flightPlanCoordinates,
                    geodesic: true,
                    strokeColor: '#dc3545',
                    strokeOpacity: 1.0,
                    strokeWeight: 4
                });
                 
                // Dùng hàm setMap để gắn vào bản đồ
                flightPath.setMap(map);
    </script>
    @endforeach
@endsection