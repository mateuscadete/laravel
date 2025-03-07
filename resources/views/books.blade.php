<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Livros</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body>
    <header>
        @include('include.header')
    </header>

    <section id="books">
        <h2>Livros em Destaque</h2>
        <div class="book-list">
            <div class="book">
                <img src="{{url('css\images\senhor_dos_aneis.jpg')}}" alt="Senhor dos Anéis">
                <h3>O Senhor dos Anéis</h3>
                <p>Uma obra épica de J.R.R. Tolkien.</p>
            </div>
            <div class="book">
                <img src="{{url('css\images\geoge_orwell1984.jpg')}}" alt="1984">
                <h3>1984</h3>
                <p>Uma distopia clássica de George Orwell.</p>
            </div>
            <div class="book">
                <img src="{{url('css\images\a_moreninha.jpg')}}" alt="A Moreninha">
                <h3>A Moreninha</h3>
                <p>Um romance encantador de Joaquim Manuel de Macedo.</p>
            </div>
        </div>
    </section>
    
    <footer>
        @include('include.footer')
    </footer>
    
</body>
</html>