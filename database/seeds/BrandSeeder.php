<?php

use Illuminate\Database\Seeder;


class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert(['name' => 'BMW','created_at'=>now(),'updated_at'=>now()]);
        DB::table('brands')->insert(['name' => 'Mercedes','created_at'=>now(),'updated_at'=>now()]);
        DB::table('brands')->insert(['name' => 'Suzuki','created_at'=>now(),'updated_at'=>now()]);
        DB::table('brands')->insert(['name' => 'Citroen','created_at'=>now(),'updated_at'=>now()]);
        DB::table('brands')->insert(['name' => 'Mazda','created_at'=>now(),'updated_at'=>now()]);
        DB::table('brands')->insert(['name' => 'Peugeot','created_at'=>now(),'updated_at'=>now()]);
        DB::table('brands')->insert(['name' => 'SEAT','created_at'=>now(),'updated_at'=>now()]);
        DB::table('brands')->insert(['name' => 'Fiat','created_at'=>now(),'updated_at'=>now()]);
        DB::table('brands')->insert(['name' => 'Honda','created_at'=>now(),'updated_at'=>now()]);
    }
}
