package com.example.mendex.dmapp;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.Spinner;
import android.widget.Toast;

public class LocationVehicle extends AppCompatActivity {
    private String[] Districts = {"Colombo", "Matara" , "Galle", "Anuradhapura", "Jaffna"};
    private String[] divisions = {"Division1", "Division2"};
    String selectedDistrict;
    String division;
    Button btnforLication;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_location_vehicle);
        btnforLication = (Button)findViewById(R.id.locationBtn);
        DistrictSpinner();
        divisionSpinner();
        goNext();
    }


    public void DistrictSpinner() {
        Spinner spinner = (Spinner) findViewById(R.id.districtSpinner);
        ArrayAdapter<String> dataAdapter = new ArrayAdapter<String>(LocationVehicle.this, android.R.layout.simple_spinner_item, Districts);
        dataAdapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        spinner.setAdapter(dataAdapter);

        spinner.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {


            @Override
            public void onItemSelected(AdapterView<?> adapter, View v,
                                       int position, long id) {
                selectedDistrict = adapter.getItemAtPosition(position).toString();
                Toast.makeText(getApplicationContext(),
                        "Selected District : " + selectedDistrict, Toast.LENGTH_SHORT).show();
            }

            @Override
            public void onNothingSelected(AdapterView<?> arg0) {
                Toast.makeText(getApplicationContext(),
                        "Please Select a District", Toast.LENGTH_SHORT).show();
            }

        });
    }

    public void divisionSpinner() {
        Spinner spinner = (Spinner) findViewById(R.id.divisionSpinner);
        ArrayAdapter<String> dataAdapter = new ArrayAdapter<String>(LocationVehicle.this, android.R.layout.simple_spinner_item, divisions);
        dataAdapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        spinner.setAdapter(dataAdapter);

        spinner.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {


            @Override
            public void onItemSelected(AdapterView<?> adapter, View v,
                                       int position, long id) {
                division = adapter.getItemAtPosition(position).toString();
                Toast.makeText(getApplicationContext(),
                        "Selected Division : " + division, Toast.LENGTH_SHORT).show();
            }

            @Override
            public void onNothingSelected(AdapterView<?> arg0) {
                Toast.makeText(getApplicationContext(),
                        "Please Select a Division", Toast.LENGTH_SHORT).show();
            }

        });
    }

public void goNext(){
    btnforLication.setOnClickListener(new View.OnClickListener() {
        @Override
        public void onClick(View view) {
            Intent intentForMaps = new Intent("com.example.mendex.dmapp.MapsActivity");
            Bundle getTemp = getIntent().getExtras();
            String VehicleType = getTemp.getString("Vehicle Type");
            String Vehicleid = getTemp.getString("Vehicle ID");

            intentForMaps.putExtra("Vehicle Type", VehicleType) ;
            intentForMaps.putExtra("Vehicle ID", Vehicleid);
            startActivity(intentForMaps);
        }
    });
}


}
