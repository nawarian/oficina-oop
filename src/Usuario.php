<?php

class Usuario
{
    private string $nome;
    public DateTime $dataCadastro;

    public function mudarNome(string $nome): void
    {
        $partes = explode(' ', $nome);
        for ($i = 0; $i < count($partes); ++$i) {
            $parte = $partes[$i];
            $partes[$i] = ucfirst($parte);
        }

        $this->nome = implode(' ', $partes);
    }

    public function obterNome(): string
    {
        return $this->nome;
    }
}

