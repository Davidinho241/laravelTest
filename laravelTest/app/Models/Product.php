<?php

namespace App\Models;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory, softDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'user_id',
        'description',
        'short_desc',
        'price',
        'quantity',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function setImageAttribute($value)
    {
        $this->attributes['image'] = (new Controller())->saveMediaB64($value, Controller::PRODUCTS_IMAGE_PATH);
    }
}
