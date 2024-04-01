<?php

namespace App\Models;

use App\Models\JSA;
use App\Models\JSAWorker;
use App\Models\JSASkillOrPosition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JSAWorkerJSASkillOrPosition extends Model
{
    use HasFactory, HasUuids;
    protected $connection = 'mysql';
    protected $table = 'jsa_worker_jsa_skill_or_position';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function jsa_worker()
    {
        return $this->belongsTo(JSAWorker::class, 'jsa_worker_uuid');
    }

    public function jsa_skill_or_position()
    {
        return $this->belongsTo(JSASkillOrPosition::class, 'jsa_skill_or_position_uuid');
    }
}
