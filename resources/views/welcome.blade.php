<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Livros</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="#home">Início</a></li>
                <li><a href="#books">Livros</a></li>
                <li><a href="#about">Sobre</a></li>
                <li><a href="#contact">Contato</a></li>
            </ul>
        </nav>
        <h1>Loja de Livros</h1>
        <p>Explore o mundo através dos livros!</p>
    </header>

    <section id="home">
        <div class="intro">
            <h2>Bem-vindo à nossa loja!</h2>
            <p>Descubra os melhores livros para todas as idades e gostos. Navegue pela nossa coleção e encontre seu próximo livro favorito.</p>
        </div>
    </section>

    <section id="books">
        <h2>Livros em Destaque</h2>
        <div class="book-list">
            <div class="book">
                <img src="{{url('css\images\senhor_dos_aneis.jpg')}}" alt="Livro 1">
                <h3>O Senhor dos Anéis</h3>
                <p>Uma obra épica de J.R.R. Tolkien.</p>
            </div>
            <div class="book">
                <img src="{{url('css\images\geoge_orwell1984.jpg')}}" alt="Livro 2">
                <h3>1984</h3>
                <p>Uma distopia clássica de George Orwell.</p>
            </div>
            <div class="book">
                <img src="{{url('css\images\a_moreninha.jpg')}}" alt="Livro 3">
                <h3>A Moreninha</h3>
                <p>Um romance encantador de Joaquim Manuel de Macedo.</p>
            </div>
        </div>
    </section>

    <section id="about">
        <h2>Sobre a Loja</h2>
        <p>Somos uma loja dedicada a fornecer uma vasta gama de livros de todos os gêneros. Nosso objetivo é ajudar você a encontrar o livro perfeito, seja ele clássico ou novo lançamento.</p>
    </section>

    <section id="contact">
        <h2>Contato</h2>
        <p>Tem alguma dúvida? Entre em contato conosco!</p>
        <form action="#" method="post">
            <input type="text" placeholder="Nome" required>
            <input type="email" placeholder="Email" required>
            <textarea placeholder="Mensagem" required></textarea>
            <button type="submit">Enviar</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2025 Loja de Livros | Todos os direitos reservados.</p>
    </footer>

</body>
</html>


