<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FunctionariesDataTable extends Model
{
    use HasFactory;
    protected $table = 'functionaries_data_table';
    public function surnames()
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
        );
    }
    public function names()
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
        );
    }
    public function dependency()
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
        );
    }
    public function rank()
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
        );
    }
    public function weaponType()
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
        );
    }
    public function gender()
    {
        return Attribute::make(
            get: fn (string $value) => strtoupper($value),
        );
    }
    public function scopeSearch($query, $value,$columns)
    { 
    //     $string="SELECT * FROM functionaries_data_table";
    // for($i=0;$i==count($value);$i++){

    // }
        foreach($columns as $key => $column){
            if($key==0){
                $query->where(
                    "{$column}",
                    'like',
                    "%{$value}%"
                );
            }else{
                $query->orWhere(
                    "{$column}",
                    'like',
                    "%{$value}%"
                );
            }
        }

        

       
    }

    // GENERAR ACCESO A LA VISTA POR MEDIO DE ELOQUENT Y USARLA EN LUGAR DE EL MODELO FUNCTIONARY
    
}
