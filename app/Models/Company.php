<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    // protected $guarded=[];
    protected $fillable=['name','address','website'];
    public function contact()
    {
        return $this->hasMany(Contact::class);
    }
    public function user()
    {
      $this->belongsTo(User::class);
    }
}
