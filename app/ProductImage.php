<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    
	// una imagen le pertenece  aun producto
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
