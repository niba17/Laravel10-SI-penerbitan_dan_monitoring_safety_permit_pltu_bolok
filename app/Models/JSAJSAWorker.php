<?php

namespace App\Models;

use App\Models\JSA;
use App\Models\JSAWorker;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JSAJSAWorker extends Model
{
    use HasFactory, HasUuids;
    protected $connection = 'mysql';
    protected $table = 'jsa_jsa_worker';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function jsa()
    {
        return $this->belongsTo(JSA::class, 'jsa_uuid');
    }

    public function jsa_worker()
    {
        return $this->belongsTo(JSAWorker::class, 'jsa_worker_uuid');
    }
}
