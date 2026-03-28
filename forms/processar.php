<?php include '../includes/header.php'; ?>

<main>
    <section class="contato">
        <div class="container">
            <?php
             if ($_SERVER["REQUEST_METHOD"] == "POST") {

                 $nome = $_POST["nome"];
                 $idade = $_POST["idade"];
                 $motivo = $_POST["motivo"];
                 $cpf = $_POST["cpf"];
                 $telefone = $_POST["telefone"];
                 $email = $_POST["email"];
                 $endereco = $_POST["endereco"];

             echo "<h1>Dados recebidos!</h1>";
             echo "<p><strong>Nome:</strong> $nome</p>";
             echo "<p><strong>Idade:</strong> $idade</p>";
             echo "<p><strong>Motivo:</strong> $motivo</p>";
             echo "<p><strong>CPF:</strong> $cpf</p>";
             echo "<p><strong>Telefone:</strong> $telefone</p>";
             echo "<p><strong>Email:</strong> $email</p>";
             echo "<p><strong>Endereço:</strong> $endereco</p>";
             } else {
                 echo "<h1>Nenhum dado recebido.</h1>";
             }
         ?>
        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>