<?php

namespace App\Models;

use Laravel\Passport\Client as PassportClient;

class Client extends PassportClient
{
    protected $casts = [
        'grant_types' => 'array',
        'personal_access_client' => 'bool',
        'password_client' => 'bool',
        'revoked' => 'bool',
    ];

    public function skipsAuthorization(): bool
    {
        return $this->requires_authorization === false;
    }

}
