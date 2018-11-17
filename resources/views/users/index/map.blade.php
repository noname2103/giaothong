@extends('users.layout.navbar')

@section('content')

    <div class="col-12 col-sm-12 col-lg-9 newfeed" style="margin-top: 6.5%;">
        <div id="Map" class="shadow-sm rounded border"></div>
    </div>
    <script type="text/javascript">
    if(navigator.geolocation){
        $('#Map').css({'width': '100%', 'height': '500px', 'margin-bottom': '10px'});
        var mapDiv = document.getElementById('Map');
        var nav = navigator.geolocation;
        var pos = nav.getCurrentPosition(showPosition);

        
        function showPosition(position)
        {
            var lat = position.coords.latitude;
            var lon = position.coords.longitude;
            

            var options = { 
                zoom:17,
                center:{lat:lat,lng:lon}
            }
            var map=new google.maps.Map(mapDiv, options);

            var marker = new google.maps.Marker({
                position:{lat:lat,lng:lon},
                map:map,
                animation:google.maps.Animation.BOUNCE
            });
            @foreach($pingtraffic as $pt)
            var cityCircle = new google.maps.Circle({
                    strokeColor: '#FF0000',
                    strokeOpacity: 0.8,
                    strokeWeight: 0,
                    fillColor: '#FF0000',
                    fillOpacity: 0.35,
                    map: map,
                    center: {lat:{{$pt->lat}}, lng:{{$pt->lon}}},
                    radius: Math.sqrt(40) * 10
                  });
            @endforeach
        }  
    }
    </script>
@endsection