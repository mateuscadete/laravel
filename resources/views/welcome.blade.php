<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Loja de livros com uma vasta coleção para todas as idades e gostos. Encontre seu próximo livro favorito!">
    <meta name="keywords" content="livros, loja de livros, literatura, leitura">
    <meta name="author" content="Nome da Loja">
    <title>Loja de Livros</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <head>
</head>
<body>

    <header>
        @include('include.header')
    </header>

    <section id="home">
        <div class="intro">
            <h2>Bem-vindo à nossa loja!</h2>
            <p>Descubra os melhores livros para todas as idades e gostos. Navegue pela nossa coleção e encontre seu próximo livro favorito.</p>
        </div>
    </section>

    <section id="books">
    <h2>Nossos Livros</h2>
    <div class="book-list">
        <div class="book">
            <img src="caminho/para/livro1.jpg" alt="Capa do livro Título do Livro 1">
            <h3>Título do Livro 1</h3>
            <p>Autor: Autor 1</p>
            <p>Preço: R$ 29,90</p>
        </div>
        <div class="book">
            <img src="caminho/para/livro2.jpg" alt="Capa do livro Título do Livro 2">
            <h3>Título do Livro 2</h3>
            <p>Autor: Autor 2</p>
            <p>Preço: R$ 39,90</p>
        </div>
        <!-- Adicione mais livros conforme necessário -->
        </div>
    </section>
    
    <footer>
        @include('include.footer')
    </footer>

</body>
</html>


