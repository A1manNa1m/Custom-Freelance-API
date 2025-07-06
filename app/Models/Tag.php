<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function projects()
    {
        return $this->morphedByMany(Project::class, 'taggable');
    }

    public function proposals()
    {
        return $this->morphedByMany(Proposal::class, 'taggable');
    }
}
