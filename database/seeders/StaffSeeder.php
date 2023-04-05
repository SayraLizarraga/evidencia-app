<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//model staff
use App\Models\staff;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //
        $staff1 = new staff;
        $staff1 -> active = 1;
        $staff1 -> name = "Marcela Gutierrez";
        $staff1 -> tax_id = 680524;
        $staff1 -> role = "Sales";
        $staff1 -> email = "marc.gutierrez@gmail.com";
        $staff1 -> password = "pswd1";
        $staff1 -> save();

        $staff2 = new staff;
        $staff2 -> active = 1;
        $staff2 -> name = "Brian Orellana";
        $staff2 -> tax_id = 827503;
        $staff2 -> role = "Purchaising";
        $staff2 -> email = "brian.orellana@gmail.com";
        $staff2 -> password = "pswd2";
        $staff2 -> save();

        $staff3 = new staff;
        $staff3 -> active = 0;
        $staff3 -> name = "Evangelina Moreira";
        $staff3 -> tax_id = 163046;
        $staff3 -> role = "Warehouse";
        $staff3 -> email = "eva.moreira@gmail.com";
        $staff3 -> password = "pswd3";
        $staff3 -> save();

        $staff4 = new staff;
        $staff4 -> active = 1;
        $staff4 -> name = "Isidro Alvarez";
        $staff4 -> tax_id = 432850;
        $staff4 -> role = "Route";
        $staff4 -> email = "isd.alvarez@gmail.com";
        $staff4 -> password = "pswd4";
        $staff4 -> save();

        $staff5 = new staff;
        $staff5 -> active = 0;
        $staff5 -> name = "Erika Murcia";
        $staff5 -> tax_id = 127500;
        $staff5 -> role = "Sales";
        $staff5 -> email = "erika.murcia@gmail.com";
        $staff5 -> password = "pswd5";
        $staff5 -> save();

        $staff6 = new staff;
        $staff6 -> active = 0;
        $staff6 -> name = "Luz Maroto";
        $staff6 -> tax_id = 923485;
        $staff6 -> role = "Purchaising";
        $staff6 -> email = "luz.maroto@gmail.com";
        $staff6 -> password = "pswd6";
        $staff6 -> save();

        $staff7 = new staff;
        $staff7 -> active = 1;
        $staff7 -> name = "Naima Rojo";
        $staff7 -> tax_id = 539673;
        $staff7 -> role = "Warehouse";
        $staff7 -> email = "naima.rojo@gmail.com";
        $staff7 -> password = "pswd7";
        $staff7 -> save();

        $staff8 = new staff;
        $staff8 -> active = 0;
        $staff8 -> name = "Elisa Dieguez";
        $staff8 -> tax_id = 617839;
        $staff8 -> role = "Routes";
        $staff8 -> email = "el.dieguez@gmail.com";
        $staff8 -> password = "pswd8";
        $staff8 -> save();

        $staff9 = new staff;
        $staff9 -> active = 0;
        $staff9 -> name = "Alexandro Muñiz";
        $staff9 -> tax_id = 238476;
        $staff9 -> role = "Sales";
        $staff9 -> email = "alex.muñiz@gmail.com";
        $staff9 -> password = "pswd9";
        $staff9 -> save();

        $staff10 = new staff;
        $staff10-> active = 1;
        $staff10 -> name = "Augusto Ferreiro";
        $staff10 -> tax_id = 134873;
        $staff10 -> role = "Purchaising";
        $staff10 -> email = "aug.ferreiro@gmail.com";
        $staff10 -> password = "pswd10";
        $staff10 -> save();

        $staff11 = new staff;
        $staff11-> active = 0;
        $staff11 -> name = "Desiree Santamaria";
        $staff11 -> tax_id = 983456;
        $staff11 -> role = "Warehouse";
        $staff11 -> email = "desi.santamaria@gmail.com";
        $staff11 -> password = "pswd11";
        $staff11 -> save();

        $staff12 = new staff;
        $staff12-> active = 1;
        $staff12 -> name = "Constantino Viera";
        $staff12 -> tax_id = 734854;
        $staff12 -> role = "Route";
        $staff12 -> email = "const.viera@gmail.com";
        $staff12 -> password = "pswd12";
        $staff12 -> save();
    }
}
