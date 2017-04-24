package com.example.mendex.dmapp;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.EditText;

public class LoginForGov extends AppCompatActivity {
    EditText username;
    EditText pass;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login_for_gov);


    }

    public void LoginAction(View view){
        username = (EditText) findViewById(R.id.user_name);
        pass = (EditText) findViewById(R.id.pass);
        String user_name = username.getText().toString();
        Log.d("UserName", user_name);
        String password = pass.getText().toString();
        String type = "Login";
        BackgroundWorker backgroundWorker = new BackgroundWorker(this);
        backgroundWorker.execute(type,user_name,password);
    }
}
