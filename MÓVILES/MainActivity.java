package com.example.sprint1;
import androidx.appcompat.app.AppCompatActivity;
import android.content.Context;
import android.os.Bundle;
import android.view.DragEvent;
import android.view.View;
import android.view.View.OnClickListener;
import android.view.inputmethod.InputMethodManager;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;
public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        Button bPop = (Button) findViewById(R.id.btnPop);
        Button bHipHop = (Button) findViewById(R.id.btnHipHop);
        Button bRock = (Button) findViewById(R.id.btnRock);
        Button bVPB = (Button) findViewById(R.id.btnVPB);

        bPop.setOnClickListener(new OnClickListener() {
            @Override
            public void onClick(View v) {
                String toast = "Si eres alguien extrovertido y divertido, este género te quedara como anillo al dedo, el pop es ideal para gente de todas las edades, y siempre es bailable";
                Toast t = Toast.makeText(MainActivity.this, toast, Toast.LENGTH_LONG);
                t.show();
            }
        });

        bHipHop.setOnClickListener(new OnClickListener() {
            @Override
            public void onClick(View v) {
                String toast = "Si es que te gusta mucho";
                Toast t = Toast.makeText(MainActivity.this, toast, Toast.LENGTH_LONG);
                t.show();
            }
        });

        bRock.setOnClickListener(new OnClickListener() {
            @Override
            public void onClick(View v) {
                String toast = "Si sueles ser creativo y te gusta mucho la música cargada y armónica, el rock es excepcional para alguien como tú, Queen, Aerosmith, The Beatles, y más bandas te esperan";
                Toast t = Toast.makeText(MainActivity.this, toast, Toast.LENGTH_LONG);
                t.show();
            }
        });

        bVPB.setOnClickListener(new OnClickListener() {
            @Override
            public void onClick(View v) {
                String toast = "Si es que te gustan mucho las canciones antiguas, este es tú sección, los mejores hit de 70-80s, se encuentran en estos albumes ";
                Toast t = Toast.makeText(MainActivity.this, toast, Toast.LENGTH_LONG);
                t.show();
            }
        });



    }
}