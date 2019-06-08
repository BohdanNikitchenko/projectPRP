package com.example.prp;

import android.app.FragmentTransaction;
import android.app.Fragment;
import android.os.Bundle;
import android.os.Message;
import android.support.design.widget.NavigationView;
import android.support.v4.view.GravityCompat;
import android.support.v4.widget.DrawerLayout;
import android.support.v7.app.ActionBarDrawerToggle;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Spinner;
import android.widget.Toast;

import com.example.prp.fragment.FragmentSpecRate;
import com.example.prp.fragment.FragmentSpecSelect;
import com.example.prp.fragment.FragmentSpecView;
import com.example.prp.fragment.FragmentZnoSubj;
import com.example.prp.fragment.FragmentZnoTest;
import com.example.prp.fragment.FragmentZnoTotalInfo;
import com.example.prp.fragment.FragmentZvoRate;
import com.example.prp.fragment.FragmentZvoView;

public class MainActivity extends AppCompatActivity
        implements NavigationView.OnNavigationItemSelectedListener {

    FragmentZvoView f_zvo_view;
    FragmentZvoRate f_zvo_rate;

    FragmentSpecView f_spec_view;
    FragmentSpecRate f_spec_rate;
    FragmentSpecSelect f_spec_select;

    FragmentZnoTotalInfo f_zno_total_info;
    FragmentZnoSubj f_zno_subj;
    FragmentZnoTest f_zno_test;

   // Spinner zvo_view_spinner;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        Toolbar toolbar = (Toolbar) findViewById(R.id.toolbar);
        setSupportActionBar(toolbar);


        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        ActionBarDrawerToggle toggle = new ActionBarDrawerToggle(
                this, drawer, toolbar, R.string.navigation_drawer_open, R.string.navigation_drawer_close);
        drawer.addDrawerListener(toggle);
        toggle.syncState();

        NavigationView navigationView = (NavigationView) findViewById(R.id.nav_view);
        navigationView.setNavigationItemSelectedListener(this);

        f_zvo_view = new FragmentZvoView();
        f_zvo_rate = new FragmentZvoRate();

        f_spec_view = new FragmentSpecView();
        f_spec_rate = new FragmentSpecRate();
        f_spec_select = new FragmentSpecSelect();

        f_zno_total_info = new FragmentZnoTotalInfo();
        f_zno_subj = new FragmentZnoSubj();
        f_zno_test = new FragmentZnoTest();

        /*zvo_view_spinner = (Spinner)findViewById(R.id.spinner);

        ArrayAdapter<String> adapter = new ArrayAdapter<>(MainActivity.this, R.layout.custom_spinner, getResources().getStringArray(R.array.fragments));
        adapter.setDropDownViewResource(android.R.layout.simple_spinner_item);

       zvo_view_spinner.setAdapter(adapter);

        zvo_view_spinner.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            @Override
            public void onItemSelected(AdapterView<?> parent, View view, int position, long id) {
                switch (position){
                    case 0:
                        break;
                    case 1:
                        break;
                }
            }

            @Override
            public void onNothingSelected(AdapterView<?> parent) {

            }
        });*/
    }

    @Override
    public void onBackPressed() {
        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        if (drawer.isDrawerOpen(GravityCompat.START)) {
            drawer.closeDrawer(GravityCompat.START);
        } else {
            super.onBackPressed();
        }
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement

        return super.onOptionsItemSelected(item);
    }

    @SuppressWarnings("StatementWithEmptyBody")
    @Override
    public boolean onNavigationItemSelected(MenuItem item) {
        // Handle navigation view item clicks here.
        int id = item.getItemId();
        //прописать действия для выбора каждого пункта меню

        FragmentTransaction ftrans = getFragmentManager().beginTransaction();
           if (id == R.id.nav_zvo_view) {
               // Handle the camera action
               //android.support.design.R.id.container
               ftrans.replace(android.support.design.R.id.container, f_zvo_view);
           } else if (id == R.id.nav_zvo_rate) {
               ftrans.replace(android.support.design.R.id.container, f_zvo_rate);
           } else if (id == R.id.nav_spec_view) {
               ftrans.replace(android.support.design.R.id.container, f_spec_view);
           } else if (id == R.id.nav_spec_rate) {
               ftrans.replace(android.support.design.R.id.container, f_spec_rate);
           } else if (id == R.id.nav_spec_select) {
               ftrans.replace(android.support.design.R.id.container, f_spec_select);
           } else if (id == R.id.nav_zno_total_info) {
               ftrans.replace(android.support.design.R.id.container, f_zno_total_info);
           } else if (id == R.id.nav_zno_subj) {
                ftrans.replace(android.support.design.R.id.container, f_zno_subj);
           } else if (id == R.id.nav_zno_test) {
               ftrans.replace(android.support.design.R.id.container, f_zno_test);
           }
           ftrans.commit();

        DrawerLayout drawer = (DrawerLayout) findViewById(R.id.drawer_layout);
        drawer.closeDrawer(GravityCompat.START);
        return true;
    }
}
