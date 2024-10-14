<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tech extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'teches';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'name',
        'url',
    ];

    /**
     * Get the technology's formatted name.
     *
     * @return string
     */
    public function getFormattedName(): string
    {
        return ucfirst($this->name);  // Capitalize the first letter
    }

    /**
     * Set the tech's name.
     *
     * @param string $value
     * @return void
     */
    public function setName(string $value): void
    {
        $this->attributes['name'] = ucfirst($value);  // Capitalize the first letter before saving
    }
}