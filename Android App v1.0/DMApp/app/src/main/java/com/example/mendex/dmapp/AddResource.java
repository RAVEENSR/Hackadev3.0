package com.example.mendex.dmapp;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.RadioButton;
import android.widget.Spinner;
import android.widget.Toast;

import java.lang.reflect.Array;

public class AddResource extends AppCompatActivity {

   private String [] array = {"Colombo","Matara", "Galle", "Jaffna", "Kalutara", "Anuradhapura"};
    private String district;
    private Button mapsButton;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_add_resource);
        spinner();
        mapsButton = (Button)findViewById(R.id.mapsBtn);
        goToMaps();
    }

    public void spinner(){

        Spinner spinner = (Spinner) findViewById(R.id.spinner);
        ArrayAdapter<String> dataAdapter = new ArrayAdapter<String>(AddResource.this, android.R.layout.simple_spinner_item, array);
        dataAdapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        spinner.setAdapter(dataAdapter);

        spinner.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {


            @Override
            public void onItemSelected(AdapterView<?> adapter, View v,
                                       int position, long id) {
                district = adapter.getItemAtPosition(position).toString();
                Toast.makeText(getApplicationContext(),
                        "Selected District : " + district, Toast.LENGTH_SHORT).show();
            }

            @Override
            public void onNothingSelected(AdapterView<?> arg0) {
                Toast.makeText(getApplicationContext(),
                        "Please Select a District", Toast.LENGTH_SHORT).show();
            }

        });
    }

    public void goToMaps(){
        mapsButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent careTakerLogin = new Intent("com.example.mendex.dmapp.MapsActivity");
                startActivity(careTakerLogin);
            }
            });
}
}

