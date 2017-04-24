<?php 
include ("headfile.php"); 
?>
    <title>Register Details</title>
        <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }
    </style>
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <h2 class="header center orange-text">Enter Details / විස්තර ඇතුලත් කරන්න / விவரங்கள் உள்ளிடவும்

</h2>
            <div class="row center">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="section">

        	<ul id="tabs-swipe-demo" class="tabs center">
    			<li class="tab col s4"><a class="active" href="#transport">Transportation / ප්රවාහන / போக்குவரத்து</a></li>
    			<li class="tab col s4"><a href="#food">Food / ආහාර / உணவு
</a></li>
    			<li class="tab col s4"><a href="#services">Services / සේවා / சேவைகள்</a></li>
  			</ul>
			<br>
  			<div id="transport" class="col s12">
  				<div class="row">
                <div class="col s12 m2 l2"></div>
                <div class="col s12 m8 l8">
                    <div class="row">
                        <form class="col s12" action="getregisterTrans.php" method="post">
                        	<div class="row">
								<div class="input-field col s12">
							    	<select id="ownership" name="ownership" required>
							      		<option value="" selected>Choose your option / වර්ගය තෝරන්න / தேர்வு</option>
							      		<option value="Private">Private</option>
							      		<option value="State">State</option>
							    	</select>
							    	<label for="ownership">Ownership / අයිතිය / ஓனர்ஷிப்</label>
								</div>
							</div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input  id="name" type="text" class="validate" name="name" required> 
                                    <label for="name">Owner Name / අයිතිකරුගේ නම / ஓனர்ஸ் பெயர்

</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input  id="nic" type="text" class="validate" name="nic" required> 
                                    <label for="nic">National Identity Card No (NIC) / ජාතික හැඳුනුම්පත් අංකය / தேசிய அடையாள அட்டை எண்
</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="vehicle_no" type="text" class="validate" name="vehicle_no" required>
                                    <label for="vehicle_no">Vehicle Number / වාහන අංකය / வாகன எண்
</label>
                                </div>
                            </div>
                            <div class="row">
								<div class="input-field col s12">
							    	<select id="vehicle_type" name="vehicle_type" required>
							      		<option value="" selected>Choose your option / වර්ගය තෝරන්න / தேர்வு</option>
							      		<option value="Water Bowser">Water Bowser</option>
							      		<option value="Car">Car</option>
							      		<option value="Van">Van</option>
							      		<option value="Truck">Truck</option>
							    	</select>
							    	<label for="vehicle_type">Vehicle Type/ වාහන වර්ගය
 / வாகன வகை
</label>
								</div>
							</div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="vehicle_volume" type="text" class="validate" name="vehicle_volume" required>
                                    <label for="vehicle_volume">Vehicle Volume / වාහන ධාරිතාවය / வாகன திறன்
</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="address" type="text" class="validate" name="address" required>
                                    <label for="address">Address / ලිපිනය / முகவரி</label>
                                </div>
                            </div>
                            <div class="row">
								<div class="input-field col s12">
							    	<select id="district" name="district" required>
							      		<option value="" selected>Choose your option / වර්ගය තෝරන්න / தேர்வு</option>
							      		<option value="Colombo">Colombo</option>
							      		<option value="Matara">Matara</option>
							      		<option value="Galle">Galle</option>
							    	</select>
							    	<label for="district">Select District/ දිස්ත්රික් තෝරන්න
/ மாவட்டத்தைத் தேர்ந்தெடு
</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
							    	<select id="division" name="division" required>
							      		<option value="" selected>Choose your option / වර්ගය තෝරන්න / தேர்வு</option>
							      		<option value="Division 1">Division 1</option>
							      		<option value="Division 2">Division 2</option>
							      		<option value="Division 3">Division 3</option>
							    	</select>
							    	<label for="division">Select Division / කොට්ඨාශය තෝරන්න/ பிரிவு தேர்வு
</label>
								</div>
							</div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="telno" type="tel" class="validate" name="telno" required>
                                    <label for="telno">Mobile / ජංගම දූරකථන අංකය / மொபைல் எண்

</label>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="input-field col s12">
    								<select multiple id="comment_option" name="comment_option">
	      								<option value="" disabled selected>Choose your option / වර්ගය තෝරන්න / தேர்வு</option>
									    <option value="Time">Time</option>
									    <option value="Price">Price</option>
									    <option value="Other">Other</option>
    								</select>
    								<label>Please select conditions, if any: / කොන්දේසි / நிபந்தனைகள்
</label>
  								</div>
  							</div>
                            <div class="row">
                                <div class="input-field col s12">
                                	<textarea id="textarea1" class="materialize-textarea" name="textarea1"></textarea>
          							<label for="textarea1">Comments / අදහස් / கருத்துக்கள்</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <div class="pac-card" id="pac-card">
                                        <div>
                                            <div id="title">Autocomplete search</div>
                                            <div id="type-selector" class="pac-controls">
                                              <input type="radio" name="type" id="changetype-all" checked="checked">
                                              <label for="changetype-all">All</label>

                                              <input type="radio" name="type" id="changetype-establishment">
                                              <label for="changetype-establishment">Establishments</label>

                                              <input type="radio" name="type" id="changetype-address">
                                              <label for="changetype-address">Addresses</label>

                                              <input type="radio" name="type" id="changetype-geocode">
                                              <label for="changetype-geocode">Geocodes</label>
                                            </div>
                                            <div id="strict-bounds-selector" class="pac-controls">
                                              <input type="checkbox" id="use-strict-bounds" value="">
                                              <label for="use-strict-bounds">Strict Bounds</label>
                                            </div>
                                        </div>
                                        <div id="pac-container">
                                            <input id="pac-input" type="text" placeholder="Enter a location">
                                        </div>
                                    </div>
                                    <div id="map"></div>
                                    <div id="infowindow-content">
                                        <img src="" width="16" height="16" id="place-icon">
                                        <span id="place-name"  class="title"></span><br>
                                        <span id="place-address"></span>
                                    </div>
                                </div> 
                            </div>
                            <div class="row">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                                <button class="btn waves-effect waves-light" type="reset" name="reset">Reset
                                    <i class="material-icons right">clear_all</i>
                                </button>
                            </div>
        
                        </form>
                      </div>
                </div>
                <div class="col s12 m2 l2"></div>
            </div>
            </div>
  			<div id="food" class="col s12">
  			<div class="row">
                <div class="col s12 m2 l2"></div>
                <div class="col s12 m8 l8">
                    <div class="row">
                        <form class="col s12" action="getregisterFood.php" method="post">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input  id="name" type="text" class="validate" name="name" required> 
                                    <label for="name">Donator Name / නාමය  / பெயர்</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input  id="nic" type="text" class="validate" name="nic" required> 
                                    <label for="nic">National Identity Card No (NIC)/ ජාතික හැඳුනුම්පත් අංකය / தேசிய அடையாள அட்டை எண்</label>
                                </div>
                            </div>
                            <div class="row">
								<div class="input-field col s12">
							    	<select id="ftype" name="ftype">
							      		<option value="" selected>Choose your option / වර්ගය තෝරන්න / தேர்வு</option>
							      		<option value="Rice">Rice</option>
							      		<option value="Dhal">Dhal</option>
							      		<option value="Milk Powder">Milk Powder</option>
							    	</select>
							    	<label for="ftype">Food Type / ආහාර වර්ගය / உணவு வகை</label>
								</div>
							</div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="quantity" type="text" class="validate" name="quantity" required>
                                    <label for="quantity">Quantity(Kgs) / ප්රමාණය (kg) / அளவு (KG)
</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="address" type="text" class="validate" name="address" required>
                                    <label for="address">Address / ලිපිනය / முகவரி</label>
                                </div>
                            </div>
                            <div class="row">
								<div class="input-field col s12">
							    	<select id="district" name="district">
							      		<option value="" selected>Choose your option / වර්ගය තෝරන්න / தேர்வு</option>
							      		<option value="Colombo">Colombo</option>
							      		<option value="Matara">Matara</option>
							      		<option value="Galle">Galle</option>
							    	</select>
							    	<label for="district">Select District / දිස්ත්රික් තෝරන්න
/ மாவட்டத்தைத் தேர்ந்தெடு</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
							    	<select id="division" name="division">
							      		<option value="" selected>Choose your option / වර්ගය තෝරන්න / தேர்வு</option>
							      		<option value="Division 1">Division 1</option>
							      		<option value="Division 2">Division 2</option>
							      		<option value="Division 3">Division 3</option>
							    	</select>
							    	<label for="division">Select Division / කොට්ඨාශය තෝරන්න/ பிரிவு தேர்வு
</label></label>
								</div>
							</div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="telno" type="tel" class="validate" name="telno" required>
                                    <label for="telno">Mobile / ජංගම දූරකථන අංකය / மொபைல் எண்</label>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="input-field col s12">
    								<select multiple id="comment_option" name="comment_option">
	      								<option value="" disabled selected>Choose your option / වර්ගය තෝරන්න / தேர்வு</option>
									    <option value="Time">Time</option>
									    <option value="Price">Price</option>
									    <option value="Other">Other</option>
    								</select>
    								<label>Please select conditions, if any: / අදහස් / கருத்துக்கள்</label>
  								</div>
  							</div>
                            <div class="row">
                                <div class="input-field col s12">
                                	<textarea id="textarea1" class="materialize-textarea" name="textarea1"></textarea>
          							<label for="textarea1">Comments / අදහස් / கருத்துக்கள்</label>
                                </div>
                            </div>
                            <div class="row">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                                <button class="btn waves-effect waves-light" type="reset" name="reset">Reset
                                    <i class="material-icons right">clear_all</i>
                                </button>
                            </div>
        
                        </form>
                      </div>
                </div>
                <div class="col s12 m2 l2"></div>
            </div>
  			</div>
  			<div id="services" class="col s12">
  			<div class="row">
                <div class="col s12 m2 l2"></div>
                <div class="col s12 m8 l8">
                    <div class="row">
                        <form class="col s12" action="getregisterService.php" method="post">
                            <div class="row">
                                <div class="input-field col s12">
                                    <select id="ownership" name="ownership" required>
                                        <option value="" selected>Choose your option / වර්ගය තෝරන්න / தேர்வு</option>
                                        <option value="Private">Private</option>
                                        <option value="State">State</option>
                                    </select>
                                    <label for="ownership">Service Provider Type / සේවා සපයන්නා / சேவை வழங்குநர்
</label>
                                </div>
                            </div>
                        	<div class="row">
								<div class="input-field col s12">
							    	<select id="service" name="service">
							      		<option value="" selected>Choose your option / වර්ගය තෝරන්න / தேர்வு</option>
							      		<option value="Health">Health</option>
							      		<option value="Food Distribution">Food Distribution</option>
							      		<option value="Cleaning">Cleaning</option>
							      		<option value="Mechanics">Mechanics</option>
							    	</select>
							    	<label for="service">Select Service / සේවා තෝරන්න / சேவை தேர்வு

</label>
								</div>
							</div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input  id="name" type="text" class="validate" name="name" required> 
                                    <label for="name">Resource Person Name / සම්පත් දායකයින් නම / நபரின் பெயர் வள
</label>
                                </div>
                            </div>
                            <div class="row">
								<div class="input-field col s12">
							    	<select id="profession" name="profession">
							      		<option value="" selected>Choose your option / වර්ගය තෝරන්න / தேர்வு</option>
							      		<option value="Doctor">Doctor</option>
							      		<option value="Engineer">Engineer</option>
							      		<option value="Mechanic">Mechanic</option>
							      		<option value="Nurse">Nurse</option>
							    	</select>
							    	<label for="profession">Profession /වෘත්තිය / தொழில்</label>
								</div>
							</div>
                            <div class="row"><!-- Edit this -->
                                <div class="input-field col s12">
                                    <input  id="nic" type="text" class="validate" name="nic" required> 
                                    <label for="nic">National Identity Card No (NIC) / ජාතික හැඳුනුම්පත් අංකය / தேசிய அடையாள அட்டை எண்</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="address" type="text" class="validate" name="address" required>
                                    <label for="address">Address / ලිපිනය / முகவரி</label>
                                </div>
                            </div>
                            <div class="row">
								<div class="input-field col s12">
							    	<select id="district" name="district">
							      		<option value="" selected>Choose your option / වර්ගය තෝරන්න / தேர்வு</option>
							      		<option value="Colombo">Colombo</option>
							      		<option value="Matara">Matara</option>
							      		<option value="Galle">Galle</option>
							    	</select>
							    	<label for="district">Select District / දිස්ත්රික් තෝරන්න
/ மாவட்டத்தைத் தேர்ந்தெடு</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
							    	<select id="division" name="division">
							      		<option value="" selected>Choose your option / වර්ගය තෝරන්න / தேர்வு</option>
							      		<option value="Division 1">Division 1</option>
							      		<option value="Division ">Division 2</option>
							      		<option value="Division 3">Division 3</option>
							    	</select>
							    	<label for="division">Select Division / කොට්ඨාශය තෝරන්න/ பிரிவு தேர்வு</label>
								</div>
							</div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="telno" type="tel" class="validate" name="telno" required>
                                    <label for="telno">Mobile / ජංගම දූරකථන අංකය / மொபைல் எண்</label>
                                </div>
                            </div>
                            <div class="row">
                            	<div class="input-field col s12">
    								<select multiple id="comment_option" name="comment_option">
	      								<option value="" disabled selected>Choose your option / වර්ගය තෝරන්න / தேர்வு</option>
									    <option value="Time">Time</option>
									    <option value="Price">Price</option>
									    <option value="Other">Other</option>
    								</select>
    								<label>Please select conditions, if any: / අදහස් / கருத்துக்கள்</label>
  								</div>
  							</div>
                            <div class="row">
                                <div class="input-field col s12">
                                	<textarea id="textarea1" class="materialize-textarea" name="textarea1"></textarea>
          							<label for="textarea1">Comments / අදහස් / கருத்துக்கள்</label>
                                </div>
                            </div>
                            <div class="row">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                                <button class="btn waves-effect waves-light" type="reset" name="reset">Reset
                                    <i class="material-icons right">clear_all</i>
                                </button>
                            </div>
        
                        </form>
                      </div>
                </div>
                <div class="col s12 m2 l2"></div>
            </div>
  			</div>

            <!--   Icon Section   -->
            

        </div>
        <div class="section">
        </div>
    </div>
    <script>
    var latitude;
     var longitude;
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

              function getvals(){//!!!!!!!!!!!!!!!!!MEKA CALL KARAPN!!!!!!!!!!!!!!!!
                location.href = "mapDB.php?lat=" + latitude+"&lon="+longitude; 
                  }

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13
        });
        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');
        var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map,
          draggable:true,
         // anchorPoint: new google.maps.Point(0, -29)
        });
    // Add listener on 'drag end' event, add logitude and latitude to beginning of table
            google.maps.event.addListener(marker, 'dragend', function(evt){
                 latitude = evt.latLng.lat().toFixed(5);
                 longitude = evt.latLng.lng().toFixed(5);
                        console.log(evt.latLng.lat());
                console.log(evt.latLng.lng());
                console.log(latitude);
                console.log(longitude);

            });
        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindowContent.children['place-icon'].src = place.icon;
          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-address'].textContent = address;
          infowindow.open(map, marker);
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
          });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);

        document.getElementById('use-strict-bounds')
            .addEventListener('click', function() {
              console.log('Checkbox clicked! New state=' + this.checked);
              autocomplete.setOptions({strictBounds: this.checked});
            });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkJSYuPx0Qr6WxMMlpQJnKbv4OEwG6-8Q&libraries=places&callback=initMap"
        async defer></script>
    <?php include("footfile.html"); ?>