<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index($type = null)
    {
        
        $medicines = $this->medicines();
        $result = [];

       foreach ($medicines as $medicine) {
                if ($type == null) {
                    $result[] = $medicine;
                } elseif ($medicine['type'] == $type) {
                    $result[] = $medicine;
                }
            }

            return view('medicines.index', [
                'medicines' => $result,
                'filter' => $type,
            ]);

    }
    public function show($id = 5)
    {

        $medicines = $this->medicines();
        
            if(!isset($medicines[$id]))
            {

                abort(404);
            }

            return view('medicines.show', ['medicine' => $medicines[$id]]);

    }

    private function medicines() 
    {
        return [

            
            1 => ['id' => 1, 'name' => 'Paracetamol', 'stock' => 150, 'expiry_date' => '2027-03-15', 'type' => 'Tablet', 'is_available' => true],
            2 => ['id' => 2, 'name' => 'Amoxicillin', 'stock' => 80, 'expiry_date' => '2026-11-20', 'type' => 'Capsule', 'is_available' => true],
            3 => ['id' => 3, 'name' => 'Losartan', 'stock' => 40, 'expiry_date' => '2026-12-25', 'type' => 'Tablet', 'is_available' => true],
            4 => ['id' => 4, 'name' => 'Cetirizine', 'stock' => 60, 'expiry_date' => '2026-09-30', 'type' => 'Tablet', 'is_available' => true],
            5 => ['id' => 5, 'name' => 'Losartan', 'stock' => 200, 'expiry_date' => '2027-01-10', 'type' => 'Tablet', 'is_available' => true],
            6 => ['id' => 6, 'name' => 'Ibuprofen', 'stock' => 100, 'expiry_date' => '2027-02-28', 'type' => 'Tablet', 'is_available' => true],
            7 => ['id' => 7, 'name' => 'Amlodipine', 'stock' => 75, 'expiry_date' => '2027-05-10', 'type' => 'Tablet', 'is_available' => true],
            8 => ['id' => 8, 'name' => 'Omeprazole', 'stock' => 50, 'expiry_date' => '2026-10-15', 'type' => 'Capsule', 'is_available' => false],
            9 => ['id' => 9, 'name' => 'Metformin', 'stock' => 120, 'expiry_date' => '2027-04-20', 'type' => 'Tablet', 'is_available' => true],
            10 => ['id' => 10, 'name' => 'Salbutamol', 'stock' => 90, 'expiry_date' => '2027-06-30', 'type' => 'Syrup', 'is_available' => true],

        ];
    }
}
