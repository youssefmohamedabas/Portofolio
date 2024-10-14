<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'projects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'keywords', 
        'image', 
        'title', 
        'description', 
        'url'
    ];

    /**
     * Get the short description (limit to 100 characters).
     *
     * @return string
     */
    public function getShortDescription(): string
    {
        return strlen($this->description) > 100 
            ? substr($this->description, 0, 100) . '...' 
            : $this->description;
    }

    /**
     * Set the project's title.
     *
     * @param string $value
     * @return void
     */
    public function setTitle(string $value): void
    {
        $this->attributes['title'] = ucfirst($value);  // Capitalize the first letter of title
    }
}