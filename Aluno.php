<?php
class Aluno {
    private $nome;
    private $nota1;
    private $nota2;
    private $nota3;
    private $nota4;
    private $media;

    public function setDados($nome, $n1, $n2, $n3, $n4) {
        $this->nome = $nome;
        $this->nota1 = $n1;
        $this->nota2 = $n2;
        $this->nota3 = $n3;
        $this->nota4 = $n4;
        $this->calcularMedia();
    }

    private function calcularMedia() {
        $this->media = ($this->nota1 + $this->nota2 + $this->nota3 + $this->nota4) / 4;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getMedia() {
        return $this->media;
    }
}
?>
