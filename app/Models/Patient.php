<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
{
    use Sluggable;

    protected $guarded = [];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'full_name'
            ]
        ];
    }

    public function vitals(): HasMany
    {
        return $this->hasMany(Vital::class);
    }


    /**
     * Get the user's most recent order.
     */
    public function latestVital(): HasOne
    {
        return $this->hasOne(Vital::class)->latestOfMany();
    }

    public function treatment(): HasMany
    {
        return $this->hasMany(treatment::class);
    }
}
