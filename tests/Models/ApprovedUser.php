<?php

namespace quickcamx\Comments\Tests\Models;

use Illuminate\Foundation\Auth\User;
use quickcamx\Comments\Contracts\Commentator;

class ApprovedUser extends User implements Commentator
{

    protected $table = 'users';

    /**
     * Check if a comment for a specific model needs to be approved.
     * @param mixed $model
     * @return bool
     */
    public function needsCommentApproval($model): bool
    {
        return false;
    }

}
