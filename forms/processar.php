<?php include '../includes/header.php'; ?>
<main>
<section class="contato">
    <div class="container">
        <div class="resultado-box">

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nome = $_POST["nome"];
                $idade = $_POST["idade"];
                $motivo = $_POST["motivo"];
                $cpf = $_POST["cpf"];
                $telefone = $_POST["telefone"];
                $email = $_POST["email"];
                $endereco = $_POST["endereco"];

                echo "<h1 class='sucesso'>Dados recebidos!</h1>";
                echo "<div class='resultado-dados'>
                        <p><strong>Nome:</strong> $nome</p>
                        <p><strong>Idade:</strong> $idade</p>
                        <p><strong>Motivo:</strong> $motivo</p>
                        <p><strong>CPF:</strong> $cpf</p>
                        <p><strong>Telefone:</strong> $telefone</p>
                        <p><strong>Email:</strong> $email</p>
                        <p><strong>Endereço:</strong> $endereco</p>
                      </div>";
            } else {
                echo "<h1 class='erro'>Houve algum erro, preencha novamente.</h1>";
            }
            ?>

            <div class="resultado-botoes">
                <a href="../index.php" class="btn-outline">Home</a>
                <a href="../pages/sobre.php" class="btn-outline">Sobre</a>
                <a href="../pages/cursos.php" class="btn-outline">Cursos</a>
            </div>
        </div>
    </div>
</section>
</main>
<?php include '../includes/footer.php'; ?>