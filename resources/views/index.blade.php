<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style>
        #content {
            width: 100%;
            height: 50px;
            line-height: 50px;
            text-align: center;
            background-color: rgba(10, 23, 55, 0.7);
            color: white;
            position: absolute;
            top: 10%;
            margin-top: -25px;
        }
    </style>

    <div id="content">
        <form action="{{route('gerarNumerosAleatorios')}}" method="POST">
            {{ csrf_field() }}
            Quantos números você deseja jogar:<br><br>
            <input type="text" name="qtdNumeros">
            <br><br>
            <input type="submit" value="Submit">
        </form>
        <br><br>
        @if (Session::has('info'))
        <div class="alert alert-primary" role="alert">
            {!! Session::get('info') !!}
        </div>
        @endif
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>