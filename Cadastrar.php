<!DOCTYPE html>

<head>
    <meta charset='utf-8'>
</head>
<header>
    <spam id="cabecalho1">
        <p>Telefone:0000-0000/Endereço: rua do joãozinho</p>
    </spam>
    <style>
        .buttonL {
            cursor: pointer;
        }
    </style>
    <div id="cabecalho">
        <a href="Cadastrar.php"><button class="buttonL cadastrar">Cadastrar</button></a>
        <a href="Login.html"><button class="buttonL login">Login</button></a>
    </div>
    <center><img src="imagens/Banner.jpg" width="100%" height="100%"></center>
</header>

<body style="background-color: rgb(0, 0, 0);">
    <div id="menu">
        <div class="links">
            <center>
                <style>
                    .button {
                        border: none;
                        color: white;
                        padding: 15px 32px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        width: 300px;
                        font-size: 16px;
                        margin: 4px 2px;
                        cursor: pointer;
                    }

                    .pesquisar {
                        font-size: 16px;
                        margin: 4px 2px;

                    }

                    article.box {
                        background-color: rgb(189, 181, 181);
                        width: 1700px;
                        margin: 3px;
                        padding: 5px;
                        display: inline-block;
                        box-sizing: border-box;
                        border: 1px solid #ccc;
                        border-radius: 30px;
                    }

                    .texto {
                        border-top: 2px solid #000;
                    }

                    .image {
                        text-align: center;
                    }

                    .button1 {
                        background-color: #4CAF50;
                    }

                    .button2 {
                        background-color: #008CBA;
                    }

                    .button3 {
                        background-color: #af4c4c;
                    }

                    .button4 {
                        background-color: #def700;
                    }

                    .cadastro3 {
                        width: 400px;
                        height: 150px;
                        margin: 25px 50px 0px 50px;
                    }

                    .salvar {
                        width: 200px;
                        height: 30px;
                    }

                    #cabecalho1 {
                        color: white;
                        display: inline-block;
                    }

                    #cabecalho {
                        text-align: right;
                        display: inline-block;
                        margin-left: 1450px;
                    }

                    #concordar {
                        display: inline-block;
                    }

                    #p {
                        display: inline-block;
                    }

                    .salvar {
                        background-color: lightsteelblue;
                        font-size: 16px;
                        border: none;
                        text-align: center;
                    }

                    .login {
                        background-color: lightsteelblue;
                        font-size: 16px;
                        border: none;
                        text-align: center;
                    }
                </style>

                <a href="Index.html"><button class="button button1">Impressoras</button></a>
                <a href="suprimentos.html"><button class="button button2">Suprimentos</button></a>
                <a href="Fale conosco.html"><button class="button button3">Fale Conosco</button></a>
                <a href="Empresas.html"><button class="button button4">Empresas</button></a>
                Pesquisar <input type="text" class="pesquisar" placeholder="Pesquisar:" size="50">
                </style>
            </center>

            <center>
                <article class='box'>
                    <form method="post" action="processa.php">
                        <input id="nome" type="text" placeholder="nome:" size="43" required name=nome autofocus />
                        <br />
                        <input id="sobrenome" type="text" placeholder="sobreNome:" size="43" required name=sobrenome />
                        <br />
                        <input id="cpfoucnpj" type="text" placeholder="cpfoucnpj:" size="43" required name=cpfoucnpj />
                        <br />
                        <input id="email" type="email" placeholder="email:" size="43" required name=email />
                        <br />
                        <input id="telefone" type="text" placeholder="telefone:" size="43" required name=telefone />
                        <br />
                        <input id="senha" type="text" placeholder="senha:" size="43" required name=senha />
                        <br />
                        <input type="checkbox" id="concordar" name="concordar" required name=concordar>
                        <h4 id="p">Aceito os Termos e condições e autorizo o uso de meus dados de acordo com a
                            Declaração de
                            privacidade.</h4>
                        <div id="botao">
                            <input class="salvar" type="submit" width="100px" value="salvar">Salvar</input>
                        </div>
                    </form>

                </article>
            </center>
</body>

</html>