<?php

use Illuminate\Database\Seeder;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hospitals')->insert([
            ['image'=>'asset/hospital.png', 'name'=>'Rumah Indah Sehat Hospital', 'location'=>'Banten', 'city'=>'Tangerang Selatan', 'test_type'=>'PCR Swab Test', 'price'=>'898000'],
            ['image'=>'asset/hospital.png', 'name'=>'Omni Hospital Alam Sutera', 'location'=>'Banten', 'city'=>'Tangerang Selatan', 'test_type'=>'Rapid Test', 'price'=>'280000'],
            ['image'=>'asset/hospital.png', 'name'=>'Laboratorium Klink Prodia', 'location'=>'Banten', 'city'=>'Tangerang Selatan', 'test_type'=>'PCR Swab Test', 'price'=>'2500000'],
            ['image'=>'asset/hospital.png', 'name'=>'RS Mayapada Jakarta Selatan', 'location'=>'Jakarta', 'city'=>'Jakarta Selatan', 'test_type'=>'PCR Swab Test', 'price'=>'1200000'],
            ['image'=>'asset/hospital.png', 'name'=>'Laboratorium Bumame Farmasi', 'location'=>'Jakarta', 'city'=>'Jakarta Selatan', 'test_type'=>'PCR Swab Test', 'price'=>'968000'],
            ['image'=>'asset/hospital.png', 'name'=>'Klinik Kimia Farma Capital Place', 'location'=>'Jakarta', 'city'=>'Jakarta Selatan', 'test_type'=>'Rapid Test', 'price'=>'250000'],
            ['image'=>'asset/hospital.png', 'name'=>'Mayapada Clinic Central Park', 'location'=>'Jakarta', 'city'=>'Jakarta Barat', 'test_type'=>'Rapid Test', 'price'=>'250000'],
            ['image'=>'asset/hospital.png', 'name'=>'RS Mayapada Tangerang', 'location'=>'Banten', 'city'=>'Tangerang', 'test_type'=>'PCR Swab Test', 'price'=>'900000'],
            ['image'=>'asset/hospital.png', 'name'=>'Tirta Medical Centre Tangerang', 'location'=>'Banten', 'city'=>'Tangerang Selatan', 'test_type'=>'Rapid Test', 'price'=>'250000'],
            ['image'=>'asset/hospital.png', 'name'=>'RS Metro Hospitals Cikupa', 'location'=>'Banten', 'city'=>'Tangerang', 'test_type'=>'Rapid Test', 'price'=>'148000'],
            ['image'=>'asset/hospital.png', 'name'=>'Omni Hospital Alam Sutera', 'location'=>'Banten', 'city'=>'Tangerang Selatan', 'test_type'=>'PCR Swab Test', 'price'=>'1900000'],

        ]);
    }
}
