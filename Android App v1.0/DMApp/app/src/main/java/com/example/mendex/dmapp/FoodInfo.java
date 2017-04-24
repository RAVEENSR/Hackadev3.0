package com.example.mendex.dmapp;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

public class FoodInfo extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_add_resource_owner);

        AddResourceOwner ownerForFood = new AddResourceOwner();
        ownerForFood.OwnerSpinner();
    }
}
