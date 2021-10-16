<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'blood_pressure_systolic',
        'blood_pressure_diastolic',
    ];

    protected $table = "patients";

    public static function getPatients(){
        
        $records = DB::table('patients')->select('id','name','blood_pressure_systolic','blood_pressure_diastolic')->get()->toArray();
        
        return $records;
    }

    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('id', 'like', '%'.$search.'%')
                ->orWhere('name', 'like', '%'.$search.'%');
                
    }
}
