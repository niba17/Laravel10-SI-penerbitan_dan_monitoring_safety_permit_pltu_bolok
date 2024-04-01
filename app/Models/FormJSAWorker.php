<?php

namespace App\Models;

use App\Models\JSAWorker;
use Illuminate\Database\Eloquent\Model;
use App\Models\Form;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormJSAWorker extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'form_jsa_worker';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function form()
    {
        return $this->belongsTo(Form::class, 'form_uuid');
    }
    public function jsa_worker()
    {
        return $this->belongsTo(JSAWorker::class, 'jsa_worker_uuid');
    }
}
