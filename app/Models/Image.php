<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'images';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'url',
    ];

    /**
     * Get the full URL of the image.
     *
     * @return string
     */
    public function getFullUrl(): string
    {
        return url($this->url);
    }

    /**
     * Get the image file name.
     *
     * @return string
     */
    public function getImageName(): string
    {
        return basename($this->image);
    }
}