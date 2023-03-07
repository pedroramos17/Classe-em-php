<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Gerenciamento da loja</title>

    <style>
        .container {
            margin-top: 4%;
        }
    </style>
</head>
<body>
    <div class="container">
        <main>
            <form action="consulta.php" method="get">
                <div class="field">
                    <label class="label" for="FDescricao">Nome do Produto:</label>
                    <div class="control">
                        <input class="input" type="text" name="FDescricao" id="FDescricao">
                    </div>
                    <div class="field">
                        <label class="label" for="FValorProduto">Preço do Produto:</label>
                        <div class="control">
                            <input class="input" type="text" name="FValorProduto" id="FValorProduto">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="FQuantidade">Quantidade:</label>
                        <div class="control">
                            <input class="input" type="number" name="FQuantidade" id="FQuantidade">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="FPorc">Porcentagem</label>
                        <div class="control">
                            <input class="input" type="number" name="FPorc" id="FPorc">
                        </div>
                    </div>
                
                </div>
                <div class="field is-grouped">
                
                    <div class="control">
                        <button id="btn-cadastrar" class="button is-link">Cadastrar</button>
                    </div>
                    <div class="control">
                        <button id="btn-consultar" class="button is-link">Consultar</button>
                    </div>
                    <div class="control">
                        <button class="button is-link is-light">Cancelar</button>
                    </div>
                </div>
            </form>
        </main>
    </div>
</body>
</html>