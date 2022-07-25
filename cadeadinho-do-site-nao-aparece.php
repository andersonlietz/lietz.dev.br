<!DOCTYPE html>
<html lang="pt">
<head>
<link rel="shortcut icon" href="imagens/perfil.jpg" type="image x-icon"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"content=" ">
    <meta property="og:site_name" content="Lietz Desenvolvimento" />
    <meta property="og:url" content="https://lietz.dev.br/cadeadinho-do-site-nao-aparece.php" />
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://lietz.dev.br/cadeadinho-do-site-nao-aparece.php" />
    <meta name="author" content="Anderson Lietz">
    <meta property="og:type" content="article"/>
    <title>Site alerta como “Não Seguro”: como exibir  o certificado SSL ("cadeadinho") forçando o protocolo HTTPS</title>
</head>
<body>
    <header>
    <a href="index.php"><img src="imagens/titulo.png" class="imagem"/></a>

    </header>
    <main>
    <article>
    <h1>Site alerta como “Não Seguro”: como exibir  o certificado SSL ("cadeadinho") forçando o protocolo HTTPS</h1>

    <p>Um problema que me assombrou no início da minha jornada com desenvolvimento de sites e cPanel de hospedagem 
        foi o alerta “Não seguro”. Contratei uma hospedagem que disponibiliza os certificados SSL,
         mas mesmo ativando o protocolo nos domínios do cPanel, várias páginas dos sites não exibiam o “cadeadinho”,
          sinônimo de site seguro.</p>

<p>O símbolo do cadeado significa que o site está usando o protocolo HTTPS,
     que inclui uma camada de segurança adicional entre o servidor do site e o dispositivo do usuário.
      O protocolo HTTPS é por diversos motivos mais seguro que o HTTP. 
      Quando a conexão entre o seu dispositivo e o servidor do site está sendo realizada em HTTP, 
      o símbolo de seguro, representado por um cadeado, não aparece, e em seu lugar fica o terrível
       alerta de “Não seguro”. </p>

<p>Assim surge a pergunta: “Se o SSL foi ativado no cPanel da hospedagem, por que o cadeado 
    não aparece e sim o alerta de não seguro?”</p>

<p>Ativar o SSL no cPanel não garante que o site irá usar apenas o protocolo HTTPS.
     Se o domínio for digitado no navegador sem o início como HTTPS, ele irá utilizar o padrão HTTP.
      Apenas se o protocolo HTTPS for digitado no link ou no início do domínio na barra do navegador que
       a conexão irá iniciar em HTTPS. Então é preciso forçar o protocolo  no cPanel,
        para que todas as conexões com o servidor sejam em HTTPS.</p>

<p>Se isso estiver acontecendo com você, entre no cPanel da sua Hospedagem e procure a área “Domínios”,
     (pode pesquisar na barra de pesquisa se não achar na tela inicial).</p>

     <img src="imagens/dominios.png" class="imagem"/>
     <p> Você será direcionado(a) para a página contendo seu domínio (ou domínios) com algumas informações sobre ele(s). </p>
     <img src="imagens/forçahttps.png" class="imagem"/>

     <p>Certifique-se de que o botão  “Force HTTPS Redirect” esteja ativado, se não estiver, ative-o.</p>
     <img src="imagens/ativahttps.png" class="imagem"/>
     <p>Depois disso sua hospedagem irá forçar o uso do protocolo HTTPS,
          e exibirá o cadeado na lateral da barra do navegador, com a mensagem: A conexão é segura.</p>

        
</article>
    <aside>
    <h2>Outros Artigos:<h2>

<div class="post">
<a rel="dofollow" href="meu-primeiro-css.php" >Meu primeiro arquivo CSS</a>
</div>

<div class="post">

<a rel="nofollow" href="paleta-hexa.php">Paleta de cores em Hexadecimal</a>
</div>

    </aside>
    <a href="index.php"><button class="voltar">Página inicial</button></a>
</main>
    <footer>
<div id="gmail"><p><a href="mailto:contato@lietz.dev.br">contato@lietz.dev.br</a></p>

</div>
<div id="copy">&copy; 2021-2022 lietz.dev.br </div>
<p>Desde 16/10/2021.</p>
</footer>

</body>
</html>