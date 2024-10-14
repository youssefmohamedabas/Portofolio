<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany; // Ensure this line is present

class Experience extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'experiences';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role',
        'start',
        'nature_work',
        'end',
        'company_name',
        'company_url',
    ];

    /**
     * Get a summary of the work experience.
     *
     * @return string
     */
    public function getSummary(): string
    {
        return "{$this->role} at {$this->company_name} from {$this->start} to {$this->end}. Nature of work: {$this->nature_work}.";
    }

    /**
     * Get the tasks associated with the experience.
     *
     * @return HasMany
     */
    public function tasks(): HasMany
    {
        return $this->hasMany(ExperienceTask::class); // Assuming `ExperienceTask` is the related model
    }

    /**
     * Check if the experience has a company URL.
     *
     * @return bool
     */
    public function hasCompanyUrl(): bool
    {
        return !is_null($this->company_url);
    }
}