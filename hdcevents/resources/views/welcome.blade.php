<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/styles.css">

        <script src="/js/scripts.js"></script>

    </head>
    <body class="antialiased">
        <h1>Algum título</h1>
        <img src="/img/banner.jpg" alt="Banner">
        @if(10 > 5)
            <p>A condição é verdadeira</p>
        @endif

        @if($nome == 'Pedro')
            <p>O nome é Pedro</p>
        @elseif($nome == 'juarez')
            <p>
            O nome é {{ $nome }} e ele tem {{ $idade }} anos.
            Trabalha como {{ $profissao }}.
            </p>
        @else
            <p>O nome não é Pedro</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }}</p>

            @if($i == 2)
                <p>O $i é 2!</p>
            @endif;
        @endfor

        @foreach($nomes as $nome)
            <p>{{ $loop->index  }}</p>
            <p>{{ $nome }}</p>
        @endforeach    


        <!-- Comentário HTML-->
        {{-- Este é um comentário do Blade --}}
    </body>
</html>
