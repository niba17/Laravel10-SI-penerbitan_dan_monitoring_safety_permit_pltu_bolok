<?php

namespace App\Models;

use App\Models\JSA;
use App\Models\JSASafetyPermit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JSAJSASafetyPermit extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'jsa_jsa_safety_permit';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function jsa()
    {
        return $this->belongsTo(JSA::class, 'jsa_uuid');
    }

    public function jsa_safety_permit()
    {
        return $this->belongsTo(JSASafetyPermit::class, 'jsa_safety_permit_uuid');
    }
}
