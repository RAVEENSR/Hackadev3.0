    package com.example.mendex.dmapp;

    import android.content.Context;
    import android.os.AsyncTask;
    import android.os.Bundle;
    import android.os.Handler;
    import android.support.v7.app.AppCompatActivity;
    import android.util.Log;
    import android.widget.TextView;

    import org.json.JSONArray;
    import org.json.JSONObject;

    import java.io.BufferedReader;
    import java.io.IOException;
    import java.io.InputStream;
    import java.io.InputStreamReader;
    import java.net.HttpURLConnection;
    import java.net.URL;

    public class HomeForGov extends AppCompatActivity {
        Context context;
        String array[];
        String name;
        TextView FullName;
        static int dosageNo = 0;
        private int mInterval = 18000; // 18 seconds by default, can be changed later
        private Handler mHandler;


        @Override
        protected void onCreate(Bundle savedInstanceState) {
            super.onCreate(savedInstanceState);
            setContentView(R.layout.activity_home_for_gov);
            // Intent b = new Intent();
            Bundle bun = getIntent().getExtras();
            //String nam = bun.getString("NameForHome");
            // Log.d("TestUser", nam);
            FullName = (TextView) findViewById(R.id.test);
           // TextView Medicine = (TextView) findViewById(R.id.Med);
            FullName.setText(name);
            //Medicine.setText("Panadols");
            ProfileLoad load = new ProfileLoad(context);
            load.execute();
            mHandler = new Handler();
         //   startRepeatingTask();

        }


        private class ProfileLoad extends AsyncTask<Void, Void, String> {

            Context context;

            ProfileLoad(Context ctx) {
                context = ctx;
            }

            @Override
            protected String doInBackground(Void... params) {
                // These two need to be declared outside the try/catch
                // so that they can be closed in the finally block.
                HttpURLConnection urlConnection = null;
                BufferedReader reader = null;

                // Will contain the raw JSON response as a string.
                String forecastJsonStr = null;
                try {
                    // Construct the URL for the OpenWeatherMap query
                    // Possible parameters are avaiable at OWM's forecast API page, at
                    // http://openweathermap.org/API#forecast
                    URL url = new URL("http://192.168.43.248/profileLoad.php");

                    // Create the request to OpenWeatherMap, and open the connection
                    urlConnection = (HttpURLConnection) url.openConnection();
                    urlConnection.setRequestMethod("GET");
                    urlConnection.connect();

                    // Read the input stream into a String
                    InputStream inputStream = urlConnection.getInputStream();
                    StringBuffer buffer = new StringBuffer();
                    if (inputStream == null) {
                        // Nothing to do.
                        Log.d("Stream", "Empty");
                        return null;
                    }
                    reader = new BufferedReader(new InputStreamReader(inputStream));

                    String line;
                    while ((line = reader.readLine()) != null) {
                        // Since it's JSON, adding a newline isn't necessary (it won't affect parsing)
                        // But it does make debugging a *lot* easier if you print out the completed
                        // buffer for debugging.
                        buffer.append(line + "\n");
                    }

                    if (buffer.length() == 0) {
                        // Stream was empty.  No point in parsing.
                        Log.d("Empty", "No");
                        return "No";
                    }
                    forecastJsonStr = buffer.toString();
                    int length = buffer.length();
                    // public String[] array = new String[length];
                    JSONObject o = new JSONObject(forecastJsonStr);
                    JSONArray a = o.getJSONArray("result");
                    array = new String[a.length()];
                    for (int i = 0; i <= 1; i++) {
                        JSONObject object = a.getJSONObject(i);
                        array[i] = object.getString("FullName");
                        name = array[i];
                        Log.d("Here",name);
                    }
                    return name;
                } catch (Exception e) {
                    Log.e("PlaceholderFragment", "Error ", e);
                    return null;
                } finally {
                    if (urlConnection != null) {
                        urlConnection.disconnect();
                    }
                    if (reader != null) {
                        try {
                            reader.close();
                        } catch (final IOException e) {
                            Log.e("PlaceholderFragment", "Error closing stream", e);
                        }
                    }
                }
            }

            protected void onPostExecute(String e) {
                FullName = (TextView) findViewById(R.id.test);
               // TextView Medicine = (TextView) findViewById(R.id.Med);
                //  FullName.setText("Darth Vadar");
               // Medicine.setText("Panadols");
            }
        }

        @Override
        public void onDestroy() {
            super.onDestroy();
          //  stopRepeatingTask();
        }
    }