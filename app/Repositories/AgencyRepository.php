<?php

namespace App\Repositories;

use App\Models\Agency as Model;
use Illuminate\Database\Eloquent\Collection;

class AgencyRepository extends CoreRepository
{
    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        return Model::class;
    }


    /**
     * @return Collection|array
     */
    public function getActive(): Collection|array
    {
        return $this->startConditions()
            ->query()
            ->where('active', true)
            ->get()
            ->makeHidden(['active']);
    }
}
