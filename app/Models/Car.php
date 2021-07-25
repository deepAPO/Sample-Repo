<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'founded', 'description'];

    //Eloquent Serialization
    protected $hidden = ['updated_at'];

    protected $visible = ['name', 'founded', 'description','created_at' ];

    public function carmodels()
    {
        return $this->hasMany(CarModel::class);
    }

    public function headquarter()
    {
        return $this->hasOne(Headquarter::class);
    }
    //Has Many
    public function engines()
    {
        return $this->hasManyThrough(Engine::class, CarModel:: class, 'car_id', 'model_id');
    }
    //Has One

    public function productionDate()
    {
        return $this->hasOneThrough(CarProductionDate::class, CarModel::class, 'car_id','model_id');
    }
}
