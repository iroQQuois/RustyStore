<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        'model',
        'color',
        'description',
        'brandId',
        'categoryId',
        'prev_image',
        'full_title'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
    ];

    /**
     * Get the brand of this product.
     *
     * @return BelongsTo
     */
    public function brand(): BelongsTo
    {
        return $this->belongsTo('App\Brand');
    }

    /**
     * Get the category of this product.
     *
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * Get all images of this product
     *
     * @return HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}
