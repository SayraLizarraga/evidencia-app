<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //0 - admin
        //1 - sales
        //2 - warehouse
        //3 - purchaising
        //4 - routes
        //5 - clientes

        $admin1 = new User;
        $admin1 -> name = "Admin";
        $admin1 -> email = "admin@gmail.com";
        $admin1 -> password = Hash::make("admin");
        $admin1 -> phone = "";
        $admin1 -> address = "";
        $admin1 -> tax_id = 680524;
        $admin1 -> active = 1;
        $admin1 -> role = 0;
        $admin1 -> save();

        $staff1 = new User;
        $staff1 -> name = "Marcela Gutierrez";
        $staff1 -> email = "marc.gutierrez@gmail.com";
        $staff1 -> password = Hash::make("pswd1");
        $staff1 -> phone = "";
        $staff1 -> address = "";
        $staff1 -> tax_id = 680524;
        $staff1 -> active = 1;
        $staff1 -> role = 1;
        $staff1 -> save();

        $staff2 = new User;
        $staff2 -> name = "Brian Orellana";
        $staff2 -> email = "brian.orellana@gmail.com";
        $staff2 -> password = Hash::make("pswd2");
        $staff2 -> phone = "";
        $staff2 -> address = "";
        $staff2 -> tax_id = 827503;
        $staff2 -> active = 1;
        $staff2 -> role = 2;
        $staff2 -> save();

        $staff3 = new User;
        $staff3 -> name = "Evangelina Moreira";
        $staff3 -> email = "eva.moreira@gmail.com";
        $staff3 -> password = Hash::make("pswd3");
        $staff3 -> phone = "";
        $staff3 -> address = "";
        $staff3 -> tax_id = 163046;
        $staff3 -> active = 1;  
        $staff3 -> role = 3;
        $staff3 -> save();

        $staff4 = new User;
        $staff4 -> name = "Isidro Alvarez";
        $staff4 -> email = "isd.alvarez@gmail.com";
        $staff4 -> password = Hash::make("pswd4");
        $staff4 -> phone = "";
        $staff4 -> address = "";
        $staff4 -> tax_id = 432850;
        $staff4 -> active = 1;
        $staff4 -> role = 4;
        $staff4 -> save();

        $staff5 = new User;
        $staff5 -> name = "Erika Murcia";
        $staff5 -> email = "erika.murcia@gmail.com";
        $staff5 -> password = Hash::make("pswd5");
        $staff5 -> phone = "";
        $staff5 -> address = "";
        $staff5 -> tax_id = 127500;
        $staff5 -> active = 1;
        $staff5 -> role = 1;
        $staff5 -> save();

        $staff6 = new User;
        $staff6 -> name = "Luz Maroto";
        $staff6 -> email = "luz.maroto@gmail.com";
        $staff6 -> password = Hash::make("pswd6");
        $staff6 -> phone = "";
        $staff6 -> address = "";
        $staff6 -> tax_id = 923485;
        $staff6 -> active = 1;
        $staff6 -> role = 2;
        $staff6 -> save();

        $staff7 = new User;
        $staff7 -> name = "Naima Rojo";
        $staff7 -> email = "naima.rojo@gmail.com";
        $staff7 -> password = Hash::make("pswd7");
        $staff7 -> phone = "";
        $staff7 -> address = "";
        $staff7 -> tax_id = 539673;
        $staff7 -> active = 1;
        $staff7 -> role = 3;
        $staff7 -> save();

        $staff8 = new User;
        $staff8 -> name = "Elisa Dieguez";
        $staff8 -> email = "el.dieguez@gmail.com";
        $staff8 -> password = Hash::make("pswd8");
        $staff8 -> phone = "";
        $staff8 -> address = "";
        $staff8 -> tax_id = 617839;
        $staff8 -> active = 1;
        $staff8 -> role = 4;
        $staff8 -> save();

        $client1 = new User;
        $client1 -> name = "Citrus Fields";
        $client1 -> email = "citrusfields@gmail.com";
        $client1 -> password = Hash::make("Psswd12");
        $client1 -> phone = "7247892345";
        $client1 -> address = "755 Karson Mall New Stephania, NE 05297-3082";
        $client1 -> tax_id = 123456;
        $client1 -> active = 1;
        $client1 -> role = 5;
        $client1 -> save();

        $client2 = new User;
        $client2 -> name = "Viajez Muñoz Canales";
        $client2 -> email = "viajezmu_canales@gmail.com";
        $client2 -> password = Hash::make("Psswd22");
        $client2 -> phone = "6473366874";
        $client2 -> address = "39377 Jameson Shoal North Clevelandmouth, IA 56751";
        $client2 -> tax_id = 234567;
        $client2 -> active = 1;
        $client2 -> role = 5;
        $client2 -> save();

        $client3 = new User;
        $client3 -> name = "Atrix";
        $client3 -> email = "atrix@gmail.com";
        $client3 -> password = Hash::make("Psswd32");
        $client3 -> phone = "7221098754";
        $client3 -> address = "78973 Nelda Islands New Christchester, WV 44094";
        $client3 -> tax_id = 345678;
        $client3 -> active = 1;
        $client3 -> role = 5;
        $client3 -> save();

        $client4 = new User;
        $client4 -> name = "Kaymart";
        $client4 -> email = "kaymart@gmail.com";
        $client4 -> password = Hash::make("Psswd42");
        $client4 -> phone = "731-972-6011";
        $client4 -> address = "724 Maverick Park Suite 474 Effertzview, HI 32501";
        $client4 -> tax_id = 456789;
        $client4 -> active = 1;
        $client4 -> role = 5;
        $client4 -> save();

        $client5 = new User;
        $client5 -> name = "Faber Castell";
        $client5 -> email = "fabercastell@gmail.com";
        $client5 -> password = Hash::make("Psswd52");
        $client5 -> phone = "661-522-8441";
        $client5 -> address = "629 Hank Knolls Suite 425 Skilesside, NM 15767";
        $client5 -> tax_id = 567890;
        $client5 -> active = 1;
        $client5 -> role = 5;
        $client5 -> save();
    }
}
