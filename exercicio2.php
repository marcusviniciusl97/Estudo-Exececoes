<?php

class Livro
{
    private $titulo;
    private $autor;
    private $anoPublicacao;
    private $preco;

    public function __construct($titulo, $autor, $anoPublicacao, $preco)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
        $this->preco = $preco;
    }

    public function detalhesLivro(){
        $precoFormatado = number_format($this->preco, 2, ',', '.');
        return "Titulo do Livro: $this->titulo\nAutor: $this->autor\nAno de Publicação: $this->anoPublicacao\nPreço: R$$precoFormatado";
    }
}

$livro1 = new Livro(

    'Como ser um idiota bem sucedido!',
    'Marcus V.',
    '1997',
    250.00
);

echo nl2br($livro1->detalhesLivro());

?>