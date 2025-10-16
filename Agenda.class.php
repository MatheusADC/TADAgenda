<?php
class Agenda
{
    private $contatos;

    public function __construct()
    {
        $this->contatos = array();
    }

    public function adicionarContato(Contato $contato)
    {
        $this->contatos[] = $contato;
    }

    public function encontrarContato($nome)
    {
        foreach ($this->contatos as $contato) {
            if ($contato->getNome() == $nome) {
                echo "<p><strong>Contato encontrado:</strong> " . $contato->getNome() . " - " . $contato->getTelefone() . "</p>";
                return;
            }
        }
        echo "<p><strong>Contato não encontrado:</strong> $nome</p>";
    }

    public function listarContatos()
    {
        foreach ($this->contatos as $contato) {
            echo "<li>" . $contato->getNome() . " - " . $contato->getTelefone() . "</li>";
        }
    }
}
