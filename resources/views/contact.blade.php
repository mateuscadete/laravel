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
        @include('include.footer')
    </footer>
</body>
</html>


