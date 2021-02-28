<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="none,noindex,nofollow">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/question.css') }}">
    <title>UTANATOR_Q3</title>
</head>
<body>
    <div class="logo">
        <a href="/"><img src="images/logo.png" alt=""></a>
    </div>
    <h1>Q3：大人数と少人数なら？</h1>
    <div>
        <form action="store3" method="POST">
            @csrf
            <input type="hidden" name="num" value="3">
            <input type="submit" value="大人数">
        </form>
        <form action="store3" method="POST">
            @csrf
            <input type="hidden" name="num" value="0">
            <input type="submit" value="少人数">
        </form>
        <form action="store3" method="POST">
            @csrf
            <input type="hidden" name="num" value="1">
            <input type="submit" value="どちらでも">
        </form>
    </div>

    <footer>HEW 2021 Tomohiko.O</footer>

    <!-- @if(Session::has('age'))
    <p>{{ Session::get('age') }}</p>
    @endif

    @if(Session::has('Q2'))
    <p>{{ Session::get('Q2') }}</p>
    @endif -->
</body>
</html>
