<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <style>
            body{font-family: Arial, Helvetica;margin-top: 35px;}
            .content{display: flex;justify-content: center;}
            .formulario{width: 100%;max-width: 480px;}
            .form{display: flex;flex-direction: column;}
            .filed{padding: 10px;margin-bottom: 15px;border: 1;}
            textarea{height: 250px;}
        </style>

    </head>

    <body>

        <section class="content">

            <div class="formulario">

                <h1>Nova Notícia</h1>
                <form class="form" method="POST" action="pagina_leitura.php">
                    <lable>Título da Notícia: </lable>
                    <input type="text" name="titulo" placeholder="insira o tíulo"><br><br>

                    <lable>Sub-Título da Notícia: </lable>
                    <input type="text" name="sub_titulo" placeholder="insira o sub-tíulo"><br><br>

                     <lable>Notícia: </lable>
                    <textarea name="noticia" rows="15" cols="40"></textarea><br><br>
                    <input name="cadastrar" type="submit" value="Cadastrar">
                </form>
            </div>
        </section>   
    </body>
</html>
