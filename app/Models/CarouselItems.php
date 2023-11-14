<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


//representation of our table : MODELS

class CarouselItems extends Model
{
    use HasFactory;

    //set preferences and option
    //gets data from database
    //pput table's name "carousel_items"
    protected $table = 'carousel_items';

    protected $primaryKey = 'carousel_item_id';

    protected $fillable = [
        'name',
        'image_path',
        'description',
        'user_id',
    ];
}
