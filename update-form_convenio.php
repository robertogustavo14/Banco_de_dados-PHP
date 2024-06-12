<?php
require_once "conexao.php";

if(isset($_GET['id_convenio']) && !empty($_GET['id_convenio'])){
    $id_convenio = addslashes($_GET['id_convenio']);

    $cmd = $con -> query("SELECT * from convenios where id_convenio = '$id_convenio'");
    $res = $cmd -> fetch(PDO::FETCH_ASSOC);
}
?>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="grid-css-conv.css">
    <link rel="stylesheet" href="size-inputs.css">
</head>

<body>
    <h1>Atualizar informações do Convênio</h1>
    <form action="<?php echo 'update_convenio.php?id_convenio='.$id_convenio;?>" method="post">
        <div class="container-grid-index">
            <div class="NameF-area" id="nomef">
                <div class="box-area nome-Conv" id="nomef">
                    <label for="nomef">Nome Fantasia</label>
                    <input type="text" name="nomef" id="nomef" required maxlength="50"
                        value="<?php if(isset($res)) { echo $res['nome_fantasia'];}?>">
                </div>
            </div>
            <div class="NameE-area" id="nome">
                <div class="box-area nome-Conv" id="nome">
                    <label for="nome">Nome da Empresa</label>
                    <input type="text" name="nome" id="nome" required maxlength="50"
                        value="<?php if(isset($res)) { echo $res['nome_empresa'];}?>">
                </div>
            </div>

            <div class="Data-area">
                <div class="box-area">
                    <p id="data">Data de registro</p>
                </div>
            </div>
            <div class="NomeC-area" id="nome-contato">
                <div class="box-area" id="nome-contato">
                    <label for="nome-contato">Nome do Contato</label>
                    <input type="text" name="nome-contato" id="nome-contato" required maxlength="60"
                        value="<?php if(isset($res)) { echo $res['nome_contato'];}?>">
                </div>
            </div>
            <div class="HomeP-area" id="homepage">
                <div class="box-area" id="homepage">
                    <label for="homepage">Home Page</label>
                    <input type="text" name="homepage" id="homepage" required maxlength="60"
                        value="<?php if(isset($res)) { echo $res['homepage'];}?>">
                </div>
            </div>
            <div class="Cnpj-area" id="cnpj">
                <div class="box-area" id="cnpj">
                    <label for="cnpj">CNPJ</label>
                    <input type="text" name="cnpj" id="cnpj" required maxlength="50"
                        value="<?php if(isset($res)) { echo $res['cnpj_convenio'];}?>">
                </div>
            </div>

            <div class="Email-area" id="email">
                <div class="box-area" id="email">''
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" maxlength="60"
                        value="<?php if(isset($res)) { echo $res['email_convenio'];}?>">
                </div>
            </div>
            <div class="Fixo1-area" id="fixo1">
                <div class="box-area" id="fixo1">
                    <label for="fixo1">Telefone fixo</label>
                    <input type="text" name="fixo1" id="fixo1" maxlength="20" pattern="[0-9-()+ ]+$"
                        value="<?php if(isset($res)) { echo $res['fixo1_convenio'];}?>">
                </div>
            </div>
            <div class="Fixo2-area" id="fixo2">
                <div class="box-area" id="fixo2">
                    <label for="fixo2">Telefone secundario</label>
                    <input type="text" name="fixo2" id="fixo2" maxlength="20" pattern="[0-9-()+ ]+$"
                        value="<?php if(isset($res)) { echo $res['fixo2_convenio'];}?>">
                </div>
            </div>

            <div class="Button-area">
                <a href="index.php" id="b_index">Voltar ao Início</a>
                <a href="tabela_convenio.php" id="b_medicos">Ver Convênios</a>
                <input type="reset" value="Limpar" id="b_limpar">
                <input type="submit" value="Atualizar" id="b_cadastrar">
            </div>
        </div>
    </form>

</body>
<script>
    var data = new Date();
    var dia = data.getDate();
    var mes = data.getMonth();
    var ano4 = data.getFullYear();
    var str_data = dia + '/' + (mes + 1) + '/' + ano4;
    data = document.getElementById("data")
    data.innerHTML = `Data de registro: ${str_data}`
</script>