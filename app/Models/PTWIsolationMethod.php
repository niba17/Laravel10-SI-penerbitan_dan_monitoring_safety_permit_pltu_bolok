<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PTWDescriptionPTWIsolationMethod;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PTWIsolationMethod extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'ptw_isolation_methods';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];

    public function ptw_description_ptw_isolation_method()
    {
        return $this->hasMany(PTWDescriptionPTWIsolationMethod::class, 'ptw_isolation_method_uuid', 'uuid');
    }
}
