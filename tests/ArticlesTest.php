<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Artisan;

class ArticlesTest extends TestCase
{

    public function testMustBeAuthenticated()
    {
        $response = $this->call('GET', 'services/articles');
        $this->assertEquals('Unauthorized.', $response->getContent());
    }

    public function testEmptyResponse()
    {
        // debi utilizar esta linea porque fue imposible utilizar el middleware con basic HTTP auth, al parecer hay un
        // problema cuando PHP esta ejecutandose como un CGI y no un modulo
        // probe con estas soluciones:
        // http://www.besthostratings.com/articles/http-auth-php-cgi.html
        // http://laravel.io/forum/03-20-2014-authbasic-fails
        // pero ninguna logro que las variables PHP_AUTH_USER,PHP_AUTH_PW logren registrarse en $SERVER

        /*$response = $this->call('GET', 'services/articles', [], [], [],
            [
                'HTTP_Authorization' => 'Basic bXlfdXNlcjpteV9wYXNzd29yZA==',
                'PHP_AUTH_USER' => 'my_user',
                'PHP_AUTH_PW' => 'my_password']);
        */

        $this->withoutMiddleware();

        Artisan::call('migrate:reset');
        Artisan::call('migrate');

        $this->json('GET', 'services/articles');

        $this->assertResponseStatus( 200 );
        $this->seeJsonEquals([
            'articles' => [],
            'success' => true,
            'total_elements' => 0
        ]);

    }

    public function testNonEmptyResponse()
    {
        $this->withoutMiddleware();

        Artisan::call('migrate:reset');
        Artisan::call('migrate');
        Artisan::call('db:seed');

        $this->json('GET', 'services/articles');

        $this->assertResponseStatus( 200 );
        $this->seeJsonStructure(
            [   'articles' =>
                   [
                       '*' => ['id', 'description', 'name', 'price', 'total_in_shelf', 'total_in_vault', 'store_name']
                   ],
                'success',
                'total_elements'
            ]
        );

        $this->seeJson([
            'success' => true
        ]);



    }
}
