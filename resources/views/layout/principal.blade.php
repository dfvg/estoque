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
          <li>
            <a href="/produtos">
              Listagem
            </a>
          </li>
        </ul>

    @yield('conteudo')

  </div>

</body>
</html>
