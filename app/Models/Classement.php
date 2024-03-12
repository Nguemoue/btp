<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classement extends Model
{
    protected $fillable = ['nom','ordre'];

    public function sousCLassements(): HasMany
    {
        return $this->hasMany(SousClassement::class,"classement_id");
    }
}