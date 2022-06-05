<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
      'manufacture_id',
      'category_id',
      'model',
      'CPU',
      'memory',
      'storage',
      'invoice_number',
      'price',
      'purchase_date'
    ];

    /* Every Equipment belongs to one manufacturer & Equipment table has a forign key of manufacturer.
     The reason behind defining manufacturer method inside the Equipment model is that so I can access 
     the manufacturer table data from the Equipnent model*/
    public function manufacture() {
      return $this->belongsTo(Manufacture::class);
    }

    // Every Equipment belongs to one category & Equipment table has a forign key of category. 
    public function category() {
      return $this->belongsTo(Category::class);
    }
    
    /*Many Equipments belong to many users & Equipment table has a forign key of users. 
    The reason behind defining notes method inside the Equipment model is that so I can access 
    the notes table data from the Equipment model.*/
    public function notes() {
      return $this->hasMany(Note::class);
    }

    
    public function users() {
      return $this->belongsToMany(User::class);
    }
}