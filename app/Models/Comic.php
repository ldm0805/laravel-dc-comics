<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    //Dichiariamo una propietà prodected al quale assegnamo un'array di stringe [singole_propietà];
    //Bisogna chiamarlo così, è sintassi.
    protected $fillable = ['title','description','thumb','price','series','type','sale_date'];

}
