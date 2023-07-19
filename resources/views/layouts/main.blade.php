<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        
        <!--CSS Bootstrap -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        
        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/style.css"

       
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/home.png" alt="logo_home">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/forms/create" class="nav-link">
                                Cadastrar <ion-icon name="create"></ion-icon>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                Visualizar <ion-icon name="document-text"></ion-icon>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        @yield('content')
       <footer>
            Desenvolvido por <b><i><u>Rafael Augusto da Silva</u></i>  <ion-icon name="code-slash"></ion-icon></b>
       </footer>
       <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
       <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>