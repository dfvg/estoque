<html>
<head>
  <link rel="stylesheet" href="/css/app.css">
  <title>Controle de Estoque - Detalhe de Produtos</title>
</head>
<body>

  <div class="container">

    <h1> Detalhes do Produto: <?= $p->nome ?></h1>

    <ul>
      <li>
        <b>Valor:</b> R$ <?= $p->valor ?>
      </li>
      <li>
        <b>Descrição:</b> <?= $p->descricao ?>
      </li>
      <li>
        <b>Quantidade em Estoque:</b> <?= $p->quantidade ?>
      </li>
    </ul>

  </div>

</body>
</html>
