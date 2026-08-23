<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index(){

        $medicines = [
            ['name' => 'Paracetamol', 'stock' => 150, 'expiry_date' => '2027-03-15'],
            ['name' => 'Amoxicillin', 'stock' => 80, 'expiry_date' => '2026-11-20'],
            ['name' => 'Losartan', 'stock' => 40, 'expiry_date' => '2026-12-25'],
            ['name' => 'Cetirizine', 'stock' => 60, 'expiry_date' => '2026-09-30'],
            ['name' => 'Losartan', 'stock' => 200, 'expiry_date' => '2027-01-10']
        ];

        return view('medicines.index',['medicines' => $medicines]);
    }
}
