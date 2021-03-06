<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Laravel 5');
    }
    // // creating Route
    // /**
    //  * A Product List test example.
    //  *
    //  * @return void
    //  */
    // public function testProductsList()
    // {
    //     $this->get(route('products'))
    //          ->assertResponseOk();
    // }
    // //

    // creating Controller
    /**
     * A Product List test example.
     *
     * @return void
     */
    public function testProductsList()
    {
        $this->get(route('api.products.index'))
             ->assertResponseOk();
    }
    // 
}
