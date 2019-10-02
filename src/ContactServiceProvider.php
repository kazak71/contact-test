<?php

namespace Kazak71\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider {


    public function boot(){
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }

    public function register(){

    }

}
