<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // Import the correct BelongsTo class

class ExperienceTask extends Model
{
use HasFactory;

/**
* The table associated with the model.
*
* @var string
*/
protected $table = 'experience_tasks';

/**
* The attributes that are mass assignable.
*
* @var array
*/
protected $fillable = [
'title',
'description',
'experience_id',
];

/**
* Define the relationship with the Experience model.
*
* @return BelongsTo
*/
public function experience(): BelongsTo
{
return $this->belongsTo(Experience::class);
}

/**
* Get a formatted task summary.
*
* @return string
*/
public function getSummary(): string
{
return "{$this->title}: {$this->description}";
}
}