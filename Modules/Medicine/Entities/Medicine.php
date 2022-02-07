<?php

namespace Modules\Medicine\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'medicine_brand_id', 'medicine_category_id', 'medicine_type_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function medicine_brand()
    {
        return $this->belongsTo(MedicineBrand::class);
    }

    public function medicine_category()
    {
        return $this->belongsTo(MedicineCategory::class);
    }

    public function medicine_type()
    {
        return $this->belongsTo(MedicineType::class);
    }
}
