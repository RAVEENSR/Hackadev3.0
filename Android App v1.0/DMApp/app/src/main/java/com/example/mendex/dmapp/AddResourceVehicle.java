package com.example.mendex.dmapp;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Spinner;
import android.widget.Toast;

public class AddResourceVehicle extends AppCompatActivity {
    private String [] vehicleTypes = {"Van","Fire Truck", "Boat", "Tracktor", "Lorry", "Water Bowser"};
    static String selectedVehicle;
    Button nextGPS;
    EditText IDPlate;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_add_resource_vehicle);
        nextGPS = (Button) findViewById(R.id.NextGPS);
        IDPlate = (EditText) findViewById(R.id.VehicleID);
        vehicleSpinner();
    }

    public void vehicleSpinner(){
        Spinner spinner = (Spinner) findViewById(R.id.vehicleSpinner);
        ArrayAdapter<String> dataAdapter = new ArrayAdapter<String>(AddResourceVehicle.this, android.R.layout.simple_spinner_item, vehicleTypes);
        dataAdapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        spinner.setAdapter(dataAdapter);

        spinner.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {


            @Override
            public void onItemSelected(AdapterView<?> adapter, View v,
                                       int position, long id) {
               selectedVehicle  = adapter.getItemAtPosition(position).toString();
                Toast.makeText(getApplicationContext(),
                        "Selected Vehicle : " + selectedVehicle, Toast.LENGTH_SHORT).show();
            }

            @Override
            public void onNothingSelected(AdapterView<?> arg0) {
                Toast.makeText(getApplicationContext(),
                        "Please Select a Vehicle", Toast.LENGTH_SHORT).show();
            }

        });
    }

    public void nextForGPS(View view){
        String idPlate = IDPlate.getText().toString();
        Intent proceed = new Intent("com.example.mendex.dmapp.LocationVehicle");
        //Bundle allInfo = new Bundle();
        proceed.putExtra("Vehicle Type",selectedVehicle);
        proceed.putExtra("Vehicle ID",idPlate);
        startActivity(proceed);
    }
}
