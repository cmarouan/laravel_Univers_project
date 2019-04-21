<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
	
	
    public function Categorie()
	{
		 return $this->belongsTo('App\Categorie');
	}

	public function Vente()
	{
		 return $this->hasMany('App\Vente');
	}

	
}
