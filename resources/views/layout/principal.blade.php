<html>
<head>
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/custom.css">
  <title>Controle de Estoque</title>
</head>
<body>

  <div class="container">

    <nav class="navbar navbar-default">
      <div class="container-fluid">

        <div class="navbar-header">
          <a class="navbar-brand" href="/produtos">
            Estoque Laravel
          </a>
        </div>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{action('ProdutoController@lista')}}">Listagem</a></li>
          <li><a href="{{action('ProdutoController@novo')}}">Novo</a></li>
          @if (Auth::guest())
          <li><a href="/auth/login">Login</a></li>

          @else
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="/auth/logout">Logout</a></li>
            </ul>
          </li>
          @endif
        </ul>

      </div>
    </nav>

@yield('conteudo')

    <footer class="footer">
      <p>Sistema de Gestão de Estoques</p>
    </footer>

  </div>

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
