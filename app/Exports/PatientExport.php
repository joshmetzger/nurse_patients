<?php

namespace App\Exports;

use App\Models\Patient;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PatientExport implements FromCollection,WithHeadings
{

    public function headings():array{

        return[
            'id',
            'name',
            'blood_pressure_systolic',
            'blood_pressure_diastolic',
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return AppModelsPatient::all();
        return collect(Patient::getPatients());
    }
}
