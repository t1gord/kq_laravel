<?php

namespace App\Repositories;

use App\Models\Contact as Model;

class ContactRepository extends CoreRepository
{
    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        return Model::class;
    }


    /**
     * @return Model|null
     */
    public function forContactsPage(): ?Model
    {
        /**
         * @var Model $result
         */
        $result = $this->startConditions()->query()->first();

        $result->phones = json_decode($result->phones);
        $result->emails = json_decode($result->emails);

        return $result;
    }
}
