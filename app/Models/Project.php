<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

public function Organisme(){
    return $this->belongsTo(Organisme::class);
}

protected $fillable = ['CodeOrg' , 'Nom' ,  'Description' , 'Date_debut' , 'Date_fin'];

}
