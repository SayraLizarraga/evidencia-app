<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//model clients
use App\Models\clients;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $client1 = new clients;
        $client1 -> name = "Citrus Fields";
        $client1 -> email = "citrusfields@gmail.com";
        $client1 -> password = "psswd1";
        $client1 -> phone = "7247892345";
        $client1 -> address = "755 Karson Mall New Stephania, NE 05297-3082";
        $client1 -> tax_id = 123456;
        $client1 -> active = 1;
        $client1 -> save();

        $client2 = new clients;
        $client2 -> name = "Viajez Muñoz Canales";
        $client2 -> email = "viajezmu_canales@gmail.com";
        $client2 -> password = "psswd2";
        $client2 -> phone = "6473366874";
        $client2 -> address = "39377 Jameson Shoal North Clevelandmouth, IA 56751";
        $client2 -> tax_id = 234567;
        $client2 -> active = 1;
        $client2 -> save();

        $client3 = new clients;
        $client3 -> name = "Atrix";
        $client3 -> email = "atrix@gmail.com";
        $client3 -> password = "psswd3";
        $client3 -> phone = "7221098754";
        $client3 -> address = "78973 Nelda Islands New Christchester, WV 44094";
        $client3 -> tax_id = 345678;
        $client3 -> active = 1;
        $client3 -> save();

        $client4 = new clients;
        $client4 -> name = "Kaymart";
        $client4 -> email = "kaymart@gmail.com";
        $client4 -> password = "psswd4";
        $client4 -> phone = "731-972-6011";
        $client4 -> address = "724 Maverick Park Suite 474 Effertzview, HI 32501";
        $client4 -> tax_id = 456789;
        $client4 -> active = 1;
        $client4 -> save();

        $client5 = new clients;
        $client5 -> name = "Faber Castell";
        $client5 -> email = "fabercastell@gmail.com";
        $client5 -> password = "psswd5";
        $client5 -> phone = "661-522-8441";
        $client5 -> address = "629 Hank Knolls Suite 425 Skilesside, NM 15767";
        $client5 -> tax_id = 567890;
        $client5 -> active = 1;
        $client5 -> save();

        $client6 = new clients;
        $client6 -> name = "Samsung";
        $client6 -> email = "samsung@gmail.com";
        $client6 -> password = "psswd6";
        $client6 -> phone = "559-594-5719";
        $client6 -> address = "67611 Gusikowski Center Suite 220 North Johnsonber";
        $client6 -> tax_id = 987654;
        $client6 -> active = 1;
        $client6 -> save();

        $client7 = new clients;
        $client7 -> name = "Electro";
        $client7 -> email = "electro@gmail.com";
        $client7 -> password = "psswd7";
        $client7 -> phone = "220-366-7885";
        $client7 -> address = "6262 Bins Road Apt. 880 Haneport, MI 68126";
        $client7 -> tax_id = 876543;
        $client7 -> active = 0;
        $client7 -> save();

        $client8 = new clients;
        $client8 -> name = "Labelmed";
        $client8 -> email = "labelmed@gmail.com";
        $client8 -> password = "psswd8";
        $client8 -> phone = "914-489-8696";
        $client8 -> address = "481 Germaine Tunnel Lake Zitachester, WV 01893-084";
        $client8 -> tax_id = 765432;
        $client8 -> active = 0;
        $client8 -> save();

        $client9 = new clients;
        $client9 -> name = "Blue Strart";
        $client9 -> email = "bluestart@gmail.com";
        $client9 -> password = "psswd9";
        $client9 -> phone = "838-315-2800";
        $client9 -> address = "53359 Connelly Grove Apt. 371 Lake Elissaport, WV ";
        $client9 -> tax_id = 654321;
        $client9 -> active = 1;
        $client9 -> save();

        $client10 = new clients;
        $client10 -> name = "Renegade New";
        $client10 -> email = "renegade_new@gmail.com";
        $client10 -> password = "psswd10";
        $client10 -> phone = "817-680-4370";
        $client10 -> address = "475 Narciso Crossing North Rashadland, OH 59182";
        $client10 -> tax_id = 543210;
        $client10 -> active = 0;
        $client10 -> save();

        $client11 = new clients;
        $client11 -> name = "Create Supply";
        $client11 -> email = "createsupply@gmail.com";
        $client11 -> password = "psswd11";
        $client11 -> phone = "860-509-7487";
        $client11 -> address = "67756 Mueller Mountain South Timmothyton, NH 46078";
        $client11 -> tax_id = 432109;
        $client11 -> active = 1;
        $client11 -> save();

        $client12 = new clients;
        $client12 -> name = "ProvisionA";
        $client12 -> email = "provisiona@gmail.com";
        $client12 -> password = "psswd12";
        $client12 -> phone = "510-553-9648";
        $client12 -> address = "9258 Corwin Key North Durwardborough, KY 64642";
        $client12 -> tax_id = 321098;
        $client12 -> active = 0;
        $client12 -> save();

        $client13 = new clients;
        $client13 -> name = "Up Tech";
        $client13 -> email = "up_tech@gmail.com";
        $client13 -> password = "psswd13";
        $client13 -> phone = "717-249-0718";
        $client13 -> address = "965 Chris Divide West Derickborough, AL 88334";
        $client13 -> tax_id = 246801;
        $client13 -> active = 0;
        $client13 -> save();

        $client14 = new clients;
        $client14 -> name = "Cross User";
        $client14 -> email = "crossuser@gmail.com";
        $client14 -> password = "psswd14";
        $client14 -> phone = "712-734-9703";
        $client14 -> address = "668 Nola Lodge Apt. 270 Lake Ernestmouth, UT 29138";
        $client14 -> tax_id = 135792;
        $client14 -> active = 0;
        $client14 -> save();

        $client15 = new clients;
        $client15 -> name = "Communication Walker";
        $client15 -> email = "commwalker@gmail.com";
        $client15 -> password = "psswd15";
        $client15 -> phone = " 347-257-1213";
        $client15 -> address = "7668 Schumm Avenue Reinaberg, NM 17652-0165";
        $client15 -> tax_id = 147092;
        $client15 -> active = 1;
        $client15 -> save();

        $client16 = new clients;
        $client16 -> name = "Patagonia";
        $client16 -> email = "patagonia@gmail.com";
        $client16 -> password = "psswd16";
        $client16 -> phone = "623-402-8782";
        $client16 -> address = "49890 Crona Underpass Cobyville, NC 12192-7471";
        $client16 -> tax_id = 889123;
        $client16 -> active = 1;
        $client16 -> save();

        $client17 = new clients;
        $client17 -> name = "Dodge User";
        $client17 -> email = "dodge_user@gmail.com";
        $client17 -> password = "psswd17";
        $client17 -> phone = "952-467-3052";
        $client17 -> address = "77753 Rolfson Route Mayerport, TX 20062";
        $client17 -> tax_id = 293847;
        $client17 -> active = 1;
        $client17 -> save();

        $client18 = new clients;
        $client18 -> name = "Pop Track";
        $client18 -> email = "poptrack@gmail.com";
        $client18 -> password = "psswd18";
        $client18 -> phone = "971-840-1146";
        $client18 -> address = "9687 Lowe Union Port Danika, AL 89643-7011";
        $client18 -> tax_id = 109238;
        $client18 -> active = 1;
        $client18 -> save();

        $client19 = new clients;
        $client19 -> name = "Optimal Twist";
        $client19 -> email = "op_twist@gmail.com";
        $client19 -> password = "psswd19";
        $client19 -> phone = "133-226-3683";
        $client19 -> address = "2913 Vernie Cape Apt. 325 Rutheview, SD 87129";
        $client19 -> tax_id = 675894;
        $client19 -> active = 0;
        $client19 -> save();

        $client20 = new clients;
        $client20 -> name = "BoseX";
        $client20 -> email = "bose_x@gmail.com";
        $client20 -> password = "psswd20";
        $client20 -> phone = "458-355-3771";
        $client20 -> address = "4664 Lillie Burgs Eldridgefort, MS 53973-6074";
        $client20 -> tax_id = 409122;
        $client20 -> active = 1;
        $client20 -> save();
    }
}
