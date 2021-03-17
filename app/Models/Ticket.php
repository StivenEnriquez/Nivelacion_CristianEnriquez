<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    public function viaje()
    {
    	return $this->belongsTo(Viaje::class);
    }
    public function cliente()
    {
    	return $this->belongsTo(Cliente::class);
    }
    public function clase()
    {
    	return $this->belongsTo(Clase::class);
    }
    
}
