<?php

namespace App\Policies;

use App\Models\CelulasEvangelistica;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class VisitaPolicy
{
    use HandlesAuthorization;


    public function publicado(?User $user, $id){
        return true;
    }
}
