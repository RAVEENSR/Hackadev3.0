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

public class AddResourceOwner extends AppCompatActivity {
    private String[] owner = {"Private", "State"};
    String selectedOwner;
    EditText ownerName;
    EditText ownerMobile;
    String Vehicle_type;
    String Vehicle_ID;
    String longi;
    String lati;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_add_resource_owner);
        ownerName = (EditText) findViewById(R.id.DriveName);
        ownerMobile = (EditText) findViewById(R.id.OwnerMobile);
        OwnerSpinner();
    }

    public void OwnerSpinner() {
        Spinner spinner = (Spinner) findViewById(R.id.ownerspinner);
        ArrayAdapter<String> dataAdapter = new ArrayAdapter<String>(AddResourceOwner.this, android.R.layout.simple_spinner_item, owner);
        dataAdapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        spinner.setAdapter(dataAdapter);

        spinner.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {


            @Override
            public void onItemSelected(AdapterView<?> adapter, View v,
                                       int position, long id) {
                selectedOwner = adapter.getItemAtPosition(position).toString();
                Toast.makeText(getApplicationContext(),
                        "Selected Owner Type : " + selectedOwner, Toast.LENGTH_SHORT).show();
            }

            @Override
            public void onNothingSelected(AdapterView<?> arg0) {
                Toast.makeText(getApplicationContext(),
                        "Please Select a Vehicle", Toast.LENGTH_SHORT).show();
            }

        });
    }

    public void lastStep(View view){
        String nameForOwner = ownerName.getText().toString();
        String mobile = ownerMobile.getText().toString();

        Intent oneLast = new Intent("com.example.mendex.dmapp.Splash");
         Bundle getAll = getIntent().getExtras();
        if(getAll != null) {
            Vehicle_type = getAll.getString("Vehicle Type");
            Vehicle_ID = getAll.getString("Vehicle ID");
            longi = getAll.getString("Longi");
            lati = getAll.getString("Lati");
        }else{
            Toast.makeText(this, "Get ALL IS NULL", Toast.LENGTH_SHORT).show();
        }
        String type = "All";
        if(longi != null) {
            BackgroundWorker selectDoctor = new BackgroundWorker(this);
            selectDoctor.execute(type, Vehicle_ID, Vehicle_type, selectedOwner, nameForOwner, mobile, longi, lati);
            //Toast.makeText(this,"Your Entry has been recorded! Thank you!",Toast.LENGTH_SHORT).show();
            startActivity(oneLast);
        }else{
            Toast.makeText(this,"Null",Toast.LENGTH_SHORT).show();
        }


    }
}
