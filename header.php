    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Adailton Moura da Silva">
		<meta name="generator" content="Visual Studio Code">
		<meta name="description" content="Gerenciador de compromissos do usuário">
		<meta name="keywords" content="Commitments">
        <meta name="application-name" content="CommitmentsWeb">
        <?php if (isset($_GET['pagina']) && $_GET['pagina'] == 'refresh'){?>
            <meta http-equiv="refresh" content="4">
        <?php }?>
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style/bootstrap.min.css">
        <link rel="stylesheet" href="style/style.css">
        <title>Exercise</title>
    </head>
    <body>
        <header class="cabecalho">
            <nav class="navbar navbar-light">
                <a class="navbar-brand" href="?pagina=home">
                    <img src="img/notebook.png" width="32" height="32" alt=""> Exercise
                </a>
            </nav>
        </header>