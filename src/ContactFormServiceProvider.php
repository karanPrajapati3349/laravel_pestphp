<?php

    namespace Laravel\Contactform;
    use Illuminate\Support\ServiceProvider;


    class ContactFormServiceProvider extends ServiceProvider {
        public function boot()
        {
          $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        }
   }
?>