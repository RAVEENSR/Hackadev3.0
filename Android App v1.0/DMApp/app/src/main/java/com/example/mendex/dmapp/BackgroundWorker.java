package com.example.mendex.dmapp;

import android.app.ProgressDialog;
import android.content.Context;
import android.content.Intent;
import android.os.AsyncTask;
import android.widget.Toast;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.io.OutputStream;
import java.io.OutputStreamWriter;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;
import java.net.URLEncoder;

/**
 * Created by Manuka on 3/31/2017.
 */

public class BackgroundWorker extends AsyncTask <String,Void,String> {
    Context thisContext;

    BackgroundWorker(Context ctx) {

        thisContext = ctx;
    }

    @Override
    protected String doInBackground(String... voids) {
        String type = voids[0];
        String login_url = "http://192.168.8.102/disaster/LoginForGov.php";
        if (type.equalsIgnoreCase("Login")) {
            try {
                String user_name = voids[1];
                String password = voids[2];
                URL url = new URL(login_url);
                // bundleForHome.putString("NameForHome", user_name);
                HttpURLConnection httpURLConnection = (HttpURLConnection) url.openConnection();
                httpURLConnection.setRequestMethod("POST");
                httpURLConnection.setDoOutput(true);
                httpURLConnection.setDoInput(true);
                OutputStream outputStream = httpURLConnection.getOutputStream();
                BufferedWriter bufferedWriter = new BufferedWriter(new OutputStreamWriter(outputStream, "UTF-8"));
                String post_data = URLEncoder.encode("user_name", "UTF-8") + "=" + URLEncoder.encode(user_name, "UTF-8") + "&" +
                        URLEncoder.encode("password", "UTF-8") + "=" + URLEncoder.encode(password, "UTF-8");
                bufferedWriter.write(post_data);
                bufferedWriter.flush();
                bufferedWriter.close();
                outputStream.close();

                InputStream inputStream = httpURLConnection.getInputStream();
                BufferedReader bufferedReader = new BufferedReader(new InputStreamReader(inputStream, "iso-8859-1"));
                String result = "";
                String line = "";
                while ((line = bufferedReader.readLine()) != null) {
                    result += line;
                }
                bufferedReader.close();
                inputStream.close();
                httpURLConnection.disconnect();

                /*if (result.equalsIgnoreCase("Login Success"))
                    Toast.makeText(context, "Login Succesful", Toast.LENGTH_SHORT).show();
                else {
                    Toast.makeText(context, "Invalid Login Information", Toast.LENGTH_SHORT).show();
                }*/
                return result;


            } catch (MalformedURLException e) {
                e.printStackTrace();
            } catch (IOException e) {
                e.printStackTrace();
            }
        } else if (type.equalsIgnoreCase("All")) {
            try {
                String vehicle_id = voids[1];
                String vehicle_type = voids[2];
                String selected_owner = voids[3];
                String owner_name = voids[4];
                String mobile = voids[5];
                String longi = voids[6];
                String lati = voids[7];
                URL url = new URL("http://192.168.8.102/Disaster/InsertTransport.php");
                // bundleForHome.putString("NameForHome", user_name);
                HttpURLConnection httpURLConnection = (HttpURLConnection) url.openConnection();
                httpURLConnection.setRequestMethod("POST");
                httpURLConnection.setDoOutput(true);
                httpURLConnection.setDoInput(true);
                OutputStream outputStream = httpURLConnection.getOutputStream();
                BufferedWriter bufferedWriter = new BufferedWriter(new OutputStreamWriter(outputStream, "UTF-8"));
                String post_data = URLEncoder.encode("ownership", "UTF-8") + "=" + URLEncoder.encode(selected_owner, "UTF-8") + "&" +
                        URLEncoder.encode("name", "UTF-8") + "=" + URLEncoder.encode(owner_name, "UTF-8") + "&" +
                        URLEncoder.encode("nic", "UTF-8") + "=" + URLEncoder.encode("961812550V", "UTF-8") + "&" +
                        URLEncoder.encode("vehicle_no", "UTF-8") + "=" + URLEncoder.encode(vehicle_id, "UTF-8") + "&" +
                        URLEncoder.encode("vehicle_type", "UTF-8") + "=" + URLEncoder.encode(vehicle_type, "UTF-8") + "&" +
                        URLEncoder.encode("vehicle_volume", "UTF-8") + "=" + URLEncoder.encode("100", "UTF-8") + "&" +
                        URLEncoder.encode("address", "UTF-8") + "=" + URLEncoder.encode("Colombo", "UTF-8") + "&" +
                        URLEncoder.encode("district", "UTF-8") + "=" + URLEncoder.encode("Colombo", "UTF-8") + "&" +
                        URLEncoder.encode("division", "UTF-8") + "=" + URLEncoder.encode("Union Place", "UTF-8") + "&" +
                        URLEncoder.encode("telno", "UTF-8") + "=" + URLEncoder.encode(mobile, "UTF-8") + "&" +
                        URLEncoder.encode("longi", "UTF-8") + "=" + URLEncoder.encode(longi, "UTF-8") + "&" +
                        URLEncoder.encode("lati", "UTF-8") + "=" + URLEncoder.encode(lati, "UTF-8");
                bufferedWriter.write(post_data);
                bufferedWriter.flush();
                bufferedWriter.close();
                outputStream.close();

                InputStream inputStream = httpURLConnection.getInputStream();
                BufferedReader bufferedReader = new BufferedReader(new InputStreamReader(inputStream, "iso-8859-1"));
                String result = "";
                String line = "";
                while ((line = bufferedReader.readLine()) != null) {
                    result += line;
                }
                bufferedReader.close();
                inputStream.close();
                httpURLConnection.disconnect();

                /*if (result.equalsIgnoreCase("Login Success"))
                    Toast.makeText(context, "Login Succesful", Toast.LENGTH_SHORT).show();
                else {
                    Toast.makeText(context, "Invalid Login Information", Toast.LENGTH_SHORT).show();
                }*/
                return result;


            } catch (MalformedURLException e) {
                e.printStackTrace();
            } catch (IOException e) {
                e.printStackTrace();
            }
            {

            }

        }
        return "";
    }

    @Override
    protected void onPreExecute() {


    }

    @Override
    protected void onPostExecute(String result) {

        if (result.equalsIgnoreCase("Login Success!")) {
            Toast.makeText(thisContext, "Login Success!", Toast.LENGTH_SHORT).show();
            Intent intentForGov = new Intent("com.example.mendex.dmapp.HomeForGov");
            thisContext.startActivity(intentForGov);

        } else if (result.equalsIgnoreCase("Login Unsuccess!")) {
            Toast.makeText(thisContext, "Something went wrong! Try Again!", Toast.LENGTH_SHORT).show();
//                }else if(result.equalsIgnoreCase("You have successfully registered details in the system!")){
//                    Toast.makeText(thisContext, "Succesful", Toast.LENGTH_SHORT).show();
//                }
        }else if(result.equalsIgnoreCase("You have successfully registered details in the system!")){
            Toast.makeText(thisContext, "Your data has been recorded Succesfully!", Toast.LENGTH_SHORT).show();
        }else{
            Toast.makeText(thisContext,"There is something wrong",Toast.LENGTH_SHORT).show();
        }
    }

        @Override
        protected void onProgressUpdate (Void...values){
            super.onProgressUpdate(values);
        }

    }







