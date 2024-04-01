<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JSAK3LAppealOfRegulation extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'jsa_k3l_appeal_of_regulations';
    protected $primaryKey = 'uuid';
    public $incrementing = false;

    protected $guarded = [
        'uuid',
    ];
}
