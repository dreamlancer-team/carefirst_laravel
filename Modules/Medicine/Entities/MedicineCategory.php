<?php

namespace Modules\Medicine\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\SlugTrait;

class MedicineCategory extends Model
{
    use HasFactory, SlugTrait;

    public $timestamps = false;

    protected $fillable = ['name', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function medicines()
    {
        return $this->hasMany(Medicine::class);
    }
}
