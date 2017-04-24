package com.example.mendex.dmapp;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.Toast;

public class ChooseResource extends AppCompatActivity {
    private static Button categoryButton;
    private static RadioGroup typeGroup;
    private static RadioButton type;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_choose_resource);
        catagorySelect();

    }

    public void catagorySelect(){
        categoryButton = (Button) findViewById(R.id.cat);
        typeGroup = (RadioGroup) findViewById(R.id.categoryGroup);

        categoryButton.setOnClickListener( new View.OnClickListener() {
                                               @Override
                                               public void onClick(View view) {
                                                   int selected_type = typeGroup.getCheckedRadioButtonId();
                                                   type = (RadioButton) findViewById(selected_type);
                                                   if (selected_type != -1) {
                                                       if (type.getText().toString().equalsIgnoreCase("Vehicles")) {
                                                           Intent categorySelect = new Intent("com.example.mendex.dmapp.AddResourceVehicle");
                                                           startActivity(categorySelect);
                                                       } else if (type.getText().toString().equalsIgnoreCase("doctor")) {
                                                           Intent doctorLogin = new Intent("com.example.mendex.medphil.DoctorReg");
                                                           startActivity(doctorLogin);
                                                       } else if (type.getText().toString().equalsIgnoreCase("Care Taker")) {
                                                           Intent careTakerLogin = new Intent("com.example.mendex.medphil.second_page");
                                                           startActivity(careTakerLogin);
                                                       }
                                                   }else{
                                                       Toast.makeText(ChooseResource.this, "Please select an Option", Toast.LENGTH_SHORT).show();
                                                   }

                                               }
                                           }
        );
    }
}
