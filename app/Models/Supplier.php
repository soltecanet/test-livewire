<?php

namespace App\Models;

use App\Models\Region;
use App\Models\Commune;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'direction',
        'region_id',
        'commune_id'
    ];


    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }



}
