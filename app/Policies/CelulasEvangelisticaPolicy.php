<?php

namespace App\Policies;

use App\Models\CelulasEvangelistica;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CelulasEvangelisticaPolicy
{
    use HandlesAuthorization;

    public function publicado(?User $user, $id){
        $celula=CelulasEvangelistica::where('id',$id)->where('user_id',$user->id)->first();
        if($celula)
            return true;
        return false;
    }
}
