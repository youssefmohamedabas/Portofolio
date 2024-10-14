<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'educations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'education_degree',
        'education_location',
        'achievements',
        'url',
    ];

    /**
     * Get a summary of the education.
     *
     * @return string
     */
    public function getSummary(): string
    {
        return "{$this->education_degree} from {$this->education_location}. Achievements: {$this->achievements}";
    }

    /**
     * Check if the education has a URL.
     *
     * @return bool
     */
    public function hasUrl(): bool
    {
        return !is_null($this->url);
    }
}