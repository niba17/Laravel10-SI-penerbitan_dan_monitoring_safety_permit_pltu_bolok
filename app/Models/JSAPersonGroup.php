<?php

namespace App\Models;

use App\Models\JSA;
use App\Models\FormJSAWorker;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JSAPersonGroup extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'jsa_person_groups';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function jsa()
    {
        return $this->hasMany(JSA::class, 'person_group_uuid', 'uuid');
    }

    public function form_jsa_worker()
    {
        return $this->hasOne(FormJSAWorker::class, 'jsa_person_group_uuid', 'uuid');
    }
}
