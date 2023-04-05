<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Permission as ModelsPermission;

class Permission extends ModelsPermission
{
    use HasFactory;

    public function canAccessFilament(): bool
    {
        // return $this->hasRole(['Admin']);
        return true;
    }
}
