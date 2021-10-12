<?php

namespace App\Classes;

use Spatie\Multitenancy\Concerns\UsesMultitenancyConfig;
use Spatie\Multitenancy\Models\Tenant;

trait UseDynamicConnection
{
    use UsesMultitenancyConfig;

    public function getConnectionName(): string
    {

        if(!Tenant::checkCurrent()){
            return $this->landlordDatabaseConnectionName();
        }
        return $this->tenantDatabaseConnectionName();

    }
}
