<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curriculo Impressão</title>
    <link rel="stylesheet" href="../CSS/styleCurriculo.css">
</head>
<body>
    <main>
        <section class="topo">
            <h1><?= $dados['nome']; ?></h1>
            <h2><?= $dados['cargo']; ?></h2>
            <p><span>Nacionalidade: </span><?= $dados['nacionalidade']; ?></p>
            <p id="data"><span>Data de Nascimento: </span><?= $dados['data-nascimento']; ?></p>
            <p><span>Estado Civil: </span><?= $dados['estado-civil']; ?></p>
        </section>
        <section class="conteudo">
            <h3>Endereço</h3>

            <p><span>Cidade: </span><?= $dados['cidade']; ?></p>
            <p><span>Estado: </span><?= $dados['estado']; ?></p>
            <p><span>Endereço: </span><?= $dados['endereco']; ?></p>
            <p><span>Bairro: </span><?= $dados['bairro']; ?></p>

            <h3>Contato</h3>

            <p><span>Telefone: </span><?= $dados['telefone']; ?></p>
            <p><span>E-mail: </span><?= $dados['email']; ?></p>
            <p><span>Linkedin: </span><?= $dados['linkedin']; ?></p>
            <p><span>GitHub: </span><?= $dados['github']; ?></p>

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
                                <h4><?= $dados['experiencias']['cargos'][$i] ?></h4>
                                <p id="data"><?= $dados['experiencias']['empresas'][$i] ?></p>
                                <p id="data"><?= $dados['experiencias']['inicios'][$i] ?> a <?= $dados['experiencias']['fins'][$i] ?></p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </section>
    </main>
    <script>window.print();</script>
</body>
</html>