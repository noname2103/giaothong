$(document).ready(function(){

    $('[data-toggle="tooltip"]').tooltip();   
    
 
    
     $("#mapm").click(function(){
        $("#showmap").slideToggle();
        $("#showscooter").slideUp();
        $("#showbus").slideUp();
        $("#showcar").slideUp();
        $("#showaccount").slideUp();
         $("#showGopY").slideUp();
    });
    $("#scooter").click(function(){
        $("#showscooter").slideToggle();
        $("#showmap").slideUp();
        $("#showbus").slideUp();
        $("#showaccount").slideUp();
        $("#showaccount").slideUp();
         $("#showGopY").slideUp();
    });

    $("#bus").click(function(){
        $("#showbus").slideToggle();
        $("#showmap").slideUp();
        $("#showscooter").slideUp();
        $("#showcar").slideUp();
        $("#showaccount").slideUp();
         $("#showGopY").slideUp();
    });

    $("#car").click(function(){
        $("#showcar").slideToggle();
        $("#showmap").slideUp();
        $("#showbus").slideUp();
        $("#showscooter").slideUp();
        $("#showaccount").slideUp();
         $("#showGopY").slideUp();
    });

     $("#account").click(function(){
        $("#showaccount").slideToggle();
        $("#showscooter").slideUp();
        $("#showbus").slideUp();
        $("#showcar").slideUp();
        $("#showmap").slideUp();
        $("#showGopY").slideUp();
    });

      $("#GopY").click(function(){
        $("#showGopY").slideToggle();
        $("#showscooter").slideUp();
        $("#showbus").slideUp();
        $("#showcar").slideUp();
        $("#showaccount").slideUp();
        $("#showmap").slideUp();
        
    });

    
    $("#addfriendbtn").click(function(){
        $("#addfriendshow").slideToggle();
        $("#addmessageshow").slideUp();
        $("#addShowThongBao").slideUp();
    })
    $("#addMessagebtn").click(function(){
        $("#addmessageshow").slideToggle();
         $("#addfriendshow").slideUp();
         $("#addShowThongBao").slideUp();
    })
    $("#btnThongBao").click(function(){
        $("#addShowThongBao").slideToggle();
          $("#addfriendshow").slideUp();
          $("#addmessageshow").slideUp();
    })


    
    $(document).ready(function(){
        $("#postcomment5bee9f92fb3f8b16a40079a7").click(function(){
            //$.post('postcomment5bee9f92fb3f8b16a40079a7',function(data){
                alert(1);
                //$("#chatbox").html(data);
            //});
        });
    });

    $("#btn-add-position").click(function(){
    	if(navigator.geolocation){
    		$("#googleMap").css({"width": "100%", "height": "200px", "margin-bottom": "10px"});
            var mapDiv = document.getElementById('googleMap');
            var nav = navigator.geolocation;
            var pos = nav.getCurrentPosition(showPosition);

            function showPosition(position)
            {
            	var lat = position.coords.latitude;
                var lon = position.coords.longitude;

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
    });

    

    $("#pingtraffic").click(function(){
        if(navigator.geolocation){
            var nav = navigator.geolocation;
            var pos = nav.getCurrentPosition(showPosition);

            function showPosition(position)
            {
            	var lat = position.coords.latitude;
                var lon = position.coords.longitude;

                $.post("pingtraffic",
                {
                    rlat: lat,
                    rlon: lon
                },
                function(data){
                    alert(data);
                });
            }
        }
    });

    // $("#googleMapStatus").css({"width": "100%", "height": "200px", "margin-bottom": "10px"});
    // var mapDiv = document.getElementById('googleMapStatus');
									
	// 								var lat = 10.855991;
	// 								var lon = 106.78440479999999;
	// 								var options = { 
	// 									zoom:17,
	// 									center:{lat:lat,lng:lon}
	// 								}
	// 								var map=new google.maps.Map(mapDiv, options);

	// 								var marker = new google.maps.Marker({
	// 									position:{lat:lat,lng:lon},
	// 									map:map
	// 								});


});