<?php

namespace App\Models;

use App\Models\PTW;
use App\Models\JSASafetyPermit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PTWJSASafetyPermit extends Model
{
    use HasFactory, HasUuids;
    protected $connection = 'mysql';
    protected $table = 'ptw_jsa_safety_permit';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function ptw()
    {
        return $this->belongsTo(PTW::class, 'ptw_uuid');
    }

    public function jsa_safety_permit()
    {
        return $this->belongsTo(JSASafetyPermit::class, 'jsa_safety_permit_uuid');
    }
}
