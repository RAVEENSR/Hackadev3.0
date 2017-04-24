package com.example.mendex.dmapp;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.os.Handler;
import android.text.Html;
import android.text.method.LinkMovementMethod;
import android.view.Menu;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

import static com.example.mendex.dmapp.R.id.textView;

public class Splash extends Activity {
    Button addResource;
    Button loginforgovernment;
    TextView link;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_splash);
        addResource = (Button)findViewById(R.id.addResourcebtn);
        TextView t2 = (TextView) findViewById(R.id.link);
        t2.setClickable(true);
        t2.setMovementMethod(LinkMovementMethod.getInstance());
        String text = "<a href='http://www.dmc.gov.lk/'> http://www.dmc.gov.lk </a>";
        t2.setText(Html.fromHtml(text));
        loginforgovernment = (Button) findViewById(R.id.loginforgov);
        goNext();
        goForGov();

    }

    public void goNext(){
        addResource.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intentToResource = new Intent("com.example.mendex.dmapp.ChooseResource");
                startActivity(intentToResource);
            }
        });
    }

    public void goForGov(){
        loginforgovernment.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intentForGovLogin = new Intent("com.example.mendex.dmapp.LoginForGov");
                startActivity(intentForGovLogin);
            }
        });
    }

}