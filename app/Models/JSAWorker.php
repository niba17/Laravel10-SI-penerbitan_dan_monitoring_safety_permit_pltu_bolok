<?php

namespace App\Models;

use App\Models\FormJSAWorker;
use Illuminate\Database\Eloquent\Model;
use App\Models\JSAWorkerJSASkillOrPosition;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JSAWorker extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'jsa_workers';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function jsa_jsa_worker()
    {
        return $this->hasMany(JSAJSASafetyPermit::class, 'jsa_worker_uuid', 'uuid');
    }

    public function jsa_worker_jsa_skill_or_position()
    {
        return $this->hasMany(JSAWorkerJSASkillOrPosition::class, 'jsa_worker_uuid', 'uuid');
    }

    public function form_jsa_worker()
    {
        return $this->hasMany(FormJSAWorker::class, 'jsa_worker_uuid', 'uuid');
    }
}
