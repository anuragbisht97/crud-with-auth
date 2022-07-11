<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $primaryKey = 'pki_product_id';

	protected $fillable = [
		'product_name', 'category', 'description', 'price'
	];
}
