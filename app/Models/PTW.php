<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\PTWJSASafetyPermit;
use App\Models\PTWPTWDescription;
use App\Models\PTWPTWNote;

class PTW extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'ptws';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function ptw_jsa_safety_permit()
    {
        return $this->hasMany(PTWJSASafetyPermit::class, 'ptw_uuid', 'uuid');
    }

    public function ptw_ptw_description()
    {
        return $this->hasMany(PTWPTWDescription::class, 'ptw_uuid', 'uuid');
    }

    public function ptw_ptw_note()
    {
        return $this->hasMany(PTWPTWNote::class, 'ptw_uuid', 'uuid');
    }
}
