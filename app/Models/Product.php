<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';

    protected $table = 'products';
    
    protected $fillable = ['code','name','extra_name','father_product_id','price','import_price','import_price_calc',
    'price_online','image','vat','note','des','long_des','color','size','thumb','link','trash','min_reserve','type','catalog_id','is_like','unit_name'];

    public function product_catalog()
    {
        return $this->belongsTo('App\Models\Catalog','catalog_id','id');
    }
}
