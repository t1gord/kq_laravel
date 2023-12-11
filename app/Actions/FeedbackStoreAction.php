<?php

namespace App\Actions;

use App\Models\Feedback;

class FeedbackStoreAction
{
    /**
     * @param array $data
     * @return Feedback
     */
    public function handle(array $data): Feedback
    {
        return Feedback::create($data);
    }
}
