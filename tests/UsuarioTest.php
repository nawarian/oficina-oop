<?php

require_once __DIR__ . '/../src/Usuario.php';

use PHPUnit\Framework\TestCase;

class UsuarioTest extends TestCase
{
    public function testVisibilidadeDosAtributos(): void
    {
        $rafael = new Usuario();
        $rafael->mudarNome('rafael theodoro');

        $this->assertEquals('Rafael Theodoro', $rafael->obterNome());
    }
}

