<?php

namespace Modules\Medicine\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineType extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name', 'slug', 'status', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function medicines()
    {
        return $this->hasMany(Medicine::class);
    }
}
