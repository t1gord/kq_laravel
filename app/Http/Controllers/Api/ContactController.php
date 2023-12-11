<?php

namespace App\Http\Controllers\Api;

use App\Models\Agency;
use App\Repositories\AgencyRepository;
use App\Repositories\ContactRepository;
use Illuminate\Http\JsonResponse;

class ContactController extends ApiController
{
    /**
     * @param ContactRepository $contactRepository
     * @return JsonResponse
     */
    public function index(ContactRepository $contactRepository, AgencyRepository $agencyRepository): JsonResponse
    {
        $contacts = $contactRepository->forContactsPage();

        $agencies = $agencyRepository->getActive();


        return $this->sendResponse([
            'contacts' => $contacts,
            'agencies' => $agencies,
        ]);
    }
}
