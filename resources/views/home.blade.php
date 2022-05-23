<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css') }} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Laravel-comics</title>
</head>

<body>
    <header>
        <div class="bg-blue t-white">
            <h5>Dc power visa</h5>
            <h5>additional dc siter</h5>
        </div>
        <nav class="container">
            <ul>
                <li>
                    <img src="{{asset('images/dc-logo.png')}} " alt="logo-dc-nav">
                </li>
                <li>
                    <a href="">Characters</a>
                </li>
                <li>
                    <a href="" class="active">Comics</a>
                </li>
                <li>
                    <a href="">Movie</a>
                </li>
                <li>
                    <a href="">Tv</a>
                </li>
                <li>
                    <a href="">Games</a>
                </li>
                <li>
                    <a href="">Collectibles</a>
                </li>
                <li>
                    <a href="">Videos</a>
                </li>
                <li>
                    <a href="">Fans</a>
                </li>
                <li>
                    <a href="">News</a>
                </li>
                <li>
                    <a href="">Shop</a>
                </li>
                <li>
                    <h4>Search <i class="fa-solid fa-magnifying-glass"></i></h4>

                </li>
            </ul>
        </nav>

    </header>
    <div class="hero-bg">
        <div class="container">
            <button>current series</button>
        </div>
    </div>
    <main>
        <div class="container">
            <div class="row">
                @foreach ($fumetto as $fumetto)
                <div class="col card">
                    <img src="{{$fumetto['thumb']}} " alt="immagine fumetto" class="img-fumetto">
                    <h3>{{$fumetto['title']}}</h3>
                </div>

                @endforeach
            </div>

        </div>
    </main>


    <footer>

    </footer>
</body>

</html>
