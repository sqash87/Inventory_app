<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    use HasFactory;

    protected $fillable = ['name','sales_name','sales_phone','sales_email','techsupport_name','techsupport_phone','techsupport_email'];
    // Every Manufacture has many Equipments & Equipment table has a foreign key of Manufacturer. 
    public function equipment() {
      return $this->hasMany(Equipment::class);
    }
}