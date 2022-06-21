<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currículo</title>
    <link rel="stylesheet" href="css/modelo3.css">
</head>
<body>
    <main>
        <section class="topo">
            <h1><?= $dados['name']; ?></h1>
            <h2><?= $dados['lastname']; ?></h2>
            <p><span>Nacionalidade: </span><?= $dados['nacionalidade']; ?></p>
            <p><span>Data de Nascimento: </span><?= $dados['data-nascimento']; ?></p>
            <p><span>Estado Civil: </span><?= $dados['estado-civil']; ?></p>
            <p><span>Cidade: </span><?= $dados['cidade']; ?></p>
            <p><span>Estado: </span><?= $dados['estado']; ?></p>
            <p><span>Nº: </span><?= $dados['numero-predial']; ?></p>
            <p><span>Bairro: </span><?= $dados['bairro']; ?></p>
            <p><span>Telefone(s): </span><?= $dados['telefone']; ?></p>
            <p><span>E-mail: </span><?= $dados['email']; ?></p>
            <p><span>Linkedin: </span><?= $dados['linkedin']; ?></p>
            <p><span>Github: </span><?= $dados['github']; ?></p>
        </section>
        <section class="conteudo">
            <h3>Resumo</h3>
            
            <p><?= $dados['resumo']; ?></p>
            
            <?php if($dados['formacoes']) { ?>
                <h3>Formação</h3>

                <ul class="lista-topicos">
                    <?php for($i = 0; $i < sizeof($dados['formacoes']['cursos']); $i++) { ?>
                        <li>
                            <div>
                                <h4><?= $dados['formacoes']['cursos'][$i] ?></h4>
                                <p><?= $dados['formacoes']['instituicoes'][$i] ?></p>
                                <p><?= $dados['formacoes']['conclusoes'][$i] ?></p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>

            <?php if($dados['experiencias']) { ?>
                <h3>Experiência</h3>

                <ul class="lista-topicos">
                    <?php for($i = 0; $i < sizeof($dados['experiencias']['cargos']); $i++) { ?>
                        <li>
                            <div>
                                <h4><?= $dados['experiencias']['empresa'][$i] ?></h4>
                                <p><?= $dados['experiencias']['cargo'][$i] ?></p>
                                <p><?= $dados['experiencias']['dataInicio'][$i] ?> a <?= $dados['experiencias']['dataFim'][$i] ?></p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </section>
    </main>
    <script>
        window.print();
    </script>
</body>
</html>