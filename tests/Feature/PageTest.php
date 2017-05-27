<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testButton()
    {
        $this->visit('/login')
             ->click('Submit')
             ->seePageIs('/home');
    }
	
	public function testNewUser()
    {
        $this->visit('/login')
            ->type('bob', 'name')
            ->press('Submit')
            ->seePageIs('/home')
			->see('Welcome Bob');
    }

}
