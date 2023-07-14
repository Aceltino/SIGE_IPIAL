<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\TestCase;

class ProfessorControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->post(
            '/professor/cadastrar-professor', [
                'nome_completo' => 'Augusto Kussema'
                ]
        );
        
        $response->assertSessionHasErrors('nome');

        $this->assertTrue(true);
    }

    public function testStoreValidation()
    {
        $response = $this->post(
            '/professor/cadastrar-professor', [
                'nome_completo' => 'Augusto Kussema'
                ]
        );
        
        $response->assertSessionHasErrors('error');
    }

}
