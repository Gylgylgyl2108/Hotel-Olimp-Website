<?php
    // AI GRIJA SA NU STERGI SIMBOLUL ";" 
    // Preturile afisate pe website (inlocuiesti ce e dupa egal, altfel ii schimbi valoarea pretului)
    $camera_single = 200;
    $camera_double_deluxe = 300;
    $camera_triple = 400;
    $camera_double_simple = 250;
    $camera_twin = 250;
    $camera_four_guests = 450;

    // Orarul pentru mic-dejun (inlocuiesti ce e in Ghilimele)
    $mic_dejun = "7:30AM - 9:30AM";
    
    // ==========================================================================
    // DESPRE POZE!!!
    // SA FIE TOATE IN FORMAT JPG, (adica sa se termine numele pozei in .jpg)

    // (Aici ma refer la cantitatea de poze in fiecare folder)
    // Minim una cover
    // Minim una main si una normala in perechi, 3 maxim
    // Daca ai 1 cover, si 3 poze main si 3 poze normale, atunci poti adauga cate una normala fara sa mai fie nevoie de cele ce contin "main" in nume

    // REZOLUTIE LA POZE
    // Poza "cover.jpg" = 471x220px
    // Poza "room_single_1.jpg =" poate sa fie oricare rezolutie aici.
    // Poza "room_single_1-main.jpg" = 810x356px
    // Poza "room_single_2-main.jpg" = 396x164px
    // Poza "room_single_3-main.jpg" = 396x164px
    // Poza "room_single_3.jpg" = poate sa fie oricare rezolutie aici.
    // Poza "room_single_4.jpg" = poate sa fie oricare rezolutie aici.
    // Poza "room_single_5.jpg" = poate sa fie oricare rezolutie aici.
    // Si asa mai departe...

    // Pozele TREBUIE intai compresate ca sa nu ocupe multa memorie, apoi trebuie decupate fiecare la rezolutia corespunzatoare.

?>