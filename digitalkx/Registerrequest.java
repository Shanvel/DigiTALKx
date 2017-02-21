package com.example.vignesh.digitalkx;

import com.android.volley.Response;
import com.android.volley.toolbox.StringRequest;

import java.util.HashMap;
import java.util.Map;

/**
 * Created by vignesh on 21-02-2017.
 */

public class Registerrequest extends StringRequest {
    private static final String REGISTER_REQUEST_URL = "https://endred.000webhostapp.com/Register.php";
    private Map<String,String> params;

    public Registerrequest(String name, String username, String password, Response.Listener<String> listener)
    {
        super(Method.POST,REGISTER_REQUEST_URL,listener,null);
        params=new HashMap<>();
        params.put("name",name);
        params.put("username",username);
        params.put("password",password);
    }

    @Override
    public Map<String, String> getParams() {
        return params;
    }
}
