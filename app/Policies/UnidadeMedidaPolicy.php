<?php

namespace App\Policies;

use App\Models\User;
use App\Models\unidade_medida;
use Illuminate\Auth\Access\Response;

class UnidadeMedidaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, unidade_medida $unidadeMedida): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, unidade_medida $unidadeMedida): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, unidade_medida $unidadeMedida): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, unidade_medida $unidadeMedida): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, unidade_medida $unidadeMedida): bool
    {
        //
    }
}
