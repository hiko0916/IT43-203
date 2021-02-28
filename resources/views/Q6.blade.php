<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="none,noindex,nofollow">
    <title>UTANATOR_Q6</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/question.css') }}">
</head>
<body>
    <div class="logo">
        <a href="/"><img src="images/logo.png" alt=""></a>
    </div>
    <h1>Q5：流行に乗りたいタイプ？</h1>
    <div>
        <form action="store6" method="POST">
            @csrf
            <input type="hidden" name="trend" value="major">
            <input type="submit" value="乗る！">
        </form>
        <form action="store6" method="POST">
            @csrf
            <input type="hidden" name="trend" value="minor">
            <input type="submit" value="乗らな〜い">
        </form>
    </div>

    <footer>HEW 2021 Tomohiko.O</footer>

    <!-- @if(Session::has('age'))
    <p>{{ Session::get('age') }}</p>
    @endif

    @if(Session::has('Q2'))
    <p>{{ Session::get('Q2') }}</p>
    @endif

    @if(Session::has('Q3'))
    <p>{{ Session::get('Q3') }}</p>
    @endif

    @if(Session::has('Q4'))
    <p>{{ Session::get('Q4') }}</p>
    @endif

    @if(Session::has('Q5'))
    <p>{{ Session::get('Q5') }}</p>
    @endif -->
</body>
</html>
