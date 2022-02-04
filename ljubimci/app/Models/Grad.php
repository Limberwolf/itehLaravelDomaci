<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Vlasnik;

class Grad extends Model
{
    use HasFactory;
    
    public function vlascnici(){
    return $this->hasMany(Vlasnik::class);
}

}
