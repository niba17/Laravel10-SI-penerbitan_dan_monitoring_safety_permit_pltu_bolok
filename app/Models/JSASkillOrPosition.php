<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\JSAWorkerJSASkillOrPosition;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JSASkillOrPosition extends Model
{
    use HasFactory, HasUuids;
    protected $connection = 'mysql';
    protected $table = 'jsa_skills_or_positions';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function jsa_worker_jsa_skill_or_position()
    {
        return $this->hasMany(JSAWorkerJSASkillOrPosition::class, 'jsa_skill_or_position_uuid', 'uuid');
    }
}
