<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'sale'
    ];

    /**
     * Has many Images
     *
     * @return HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany('App\Image');
    }

    /**
     * Has one Category
     *
     * @return HasOne
     */
    public function category(): HasOne
    {
        return $this->hasOne('App\Category');
    }
}
