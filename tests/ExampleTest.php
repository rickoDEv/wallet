<?php

namespace Rickodev\Wallet\Tests;

use Orchestra\Testbench\TestCase;
use Rickodev\Wallet\WalletServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [WalletServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
