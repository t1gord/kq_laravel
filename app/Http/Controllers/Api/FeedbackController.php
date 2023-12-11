<?php

namespace App\Http\Controllers\Api;

use App\Actions\FeedbackStoreAction;
use App\Http\Requests\FeedbackRequest;
use App\Mail\FeedbackMail;
use Illuminate\Http\JsonResponse;

class FeedbackController extends ApiController
{
    /**
     * @param FeedbackRequest $request
     * @param FeedbackStoreAction $feedbackStoreAction
     * @return JsonResponse
     */
    public function handler(FeedbackRequest $request, FeedbackStoreAction $feedbackStoreAction): JsonResponse
    {
        $feedback = $feedbackStoreAction->handle($request->all());

        try {
            \Mail::to(config('mail.feedback.receiver'))->send(new FeedbackMail($feedback));
        } catch (\Exception $e) {
            \Log::error($e->getMessage());

            return $this->sendError($e->getMessage(), $e->getCode());
        }

        return $this->sendResponse('Feedback was successfully sent!');
    }
}
