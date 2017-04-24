    package com.example.mendex.dmapp;

    import android.content.Intent;
    import android.support.annotation.StringDef;
    import android.support.v4.app.FragmentActivity;
    import android.os.Bundle;
    import android.view.View;
    import android.widget.Button;
    import android.widget.Toast;

    import com.google.android.gms.maps.CameraUpdateFactory;
    import com.google.android.gms.maps.GoogleMap;
    import com.google.android.gms.maps.OnMapReadyCallback;
    import com.google.android.gms.maps.SupportMapFragment;
    import com.google.android.gms.maps.model.LatLng;
    import com.google.android.gms.maps.model.MarkerOptions;

    public class MapsActivity extends FragmentActivity implements OnMapReadyCallback {

        private GoogleMap mMap;
        private Button gpsButton;
        static String lati;
        static String longi;

        @Override
        protected void onCreate(Bundle savedInstanceState) {
            super.onCreate(savedInstanceState);
            setContentView(R.layout.activity_maps);
            // Obtain the SupportMapFragment and get notified when the map is ready to be used.
            SupportMapFragment mapFragment = (SupportMapFragment) getSupportFragmentManager()
                    .findFragmentById(R.id.map);
            gpsButton = (Button) findViewById(R.id.locationbtn);
            mapFragment.getMapAsync(this);
            getGPS();
        }


        /**
         * Manipulates the map once available.
         * This callback is triggered when the map is ready to be used.
         * This is where we can add markers or lines, add listeners or move the camera. In this case,
         * we just add a marker near Sydney, Australia.
         * If Google Play services is not installed on the device, the user will be prompted to install
         * it inside the SupportMapFragment. This method will only be triggered once the user has
         * installed Google Play services and returned to the app.
         */
        @Override
        public void onMapReady(GoogleMap googleMap) {
            mMap = googleMap;

            // Add a marker in Sydney and move the camera
            LatLng colombo =  new LatLng(6.9176993,79.8595133);
            mMap.addMarker(new MarkerOptions().position(colombo).title("Marker in Colombo"));
            mMap.moveCamera(CameraUpdateFactory.newLatLng(colombo));
        }

        public void getGPS(){
        gpsButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                GPSManager gps = new GPSManager(MapsActivity.this);
                if (gps.canGetLocation()) {
                    lati = Double.toString(gps.getLatitude());
                    longi = Double.toString(gps.getLongitude());
                    Toast.makeText(MapsActivity.this, "Your Location has been Added! Longitude: " + longi + " Latitude: "+ lati, Toast.LENGTH_SHORT).show();
                    Intent ownerInfo = new Intent("com.example.mendex.dmapp.AddResourceOwner");
                    Bundle mapsInfo = getIntent().getExtras();
                    String Veh = mapsInfo.getString("Vehicle Type");
                    String veh_id = mapsInfo.getString("Vehicle ID");
    //                if(Veh != null){
    //                    Toast.makeText(MapsActivity.this,"Veh is NOt NULLL",Toast.LENGTH_SHORT).show();
    //                }else{
    //                    Toast.makeText(MapsActivity.this,"Veh is Null",Toast.LENGTH_SHORT).show();
    //                }
                    ownerInfo.putExtra("Longi", longi);
                    ownerInfo.putExtra("Lati",lati);
                    ownerInfo.putExtra("Vehicle Type",Veh);
                    ownerInfo.putExtra("Vehicle ID",veh_id);
                    startActivity(ownerInfo);


                }


            }
        });
        }
    }


