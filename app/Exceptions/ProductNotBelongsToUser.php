<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsToUser extends Exception
{
    public function render()
    {
        return [
            'errors' => 'Product Does Not Belong to User'
        ];
    }
}
