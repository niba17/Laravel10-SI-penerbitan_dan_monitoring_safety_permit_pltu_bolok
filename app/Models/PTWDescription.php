<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PTWPTWDescription;
use App\Models\PTWDescriptionPTWIsolationMethod;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PTWDescription extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'ptw_descriptions';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function ptw_ptw_description()
    {
        return $this->hasMany(PTWPTWDescription::class, 'ptw_description_uuid', 'uuid');
    }

    public function ptw_description_ptw_isolation_method()
    {
        return $this->hasMany(PTWDescriptionPTWIsolationMethod::class, 'ptw_description_uuid', 'uuid');
    }
}
