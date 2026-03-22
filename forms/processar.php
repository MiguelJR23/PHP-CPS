<?php include '../includes/header.php'; ?>

<main>
    <section class="contato">
        <div class="container">

            <?php if(isset($_POST["confirmado"])) { ?>

                <h1>Obrigado!</h1>

                <div style="text-align: center;">
                    <img src="../assets/img/checkmark.png" alt="Sucesso" style="width: 100px; height: auto;">

                    <p>
                        Sua solicitação foi enviada com sucesso.
                    </p>
                </div>

                <p>
                    Iremos enviar uma mensagem por email confirmando a data da visita.
                </p>

                <br>

                <a href="../index.php" class="btn">Voltar ao início</a>

            <?php } else { ?>

                <h1>Confirme seus dados</h1>

                <p><strong>Nome:</strong> <?php echo $_POST["nome"]; ?></p>
                <p><strong>Idade:</strong> <?php echo $_POST["idade"]; ?> anos</p>
                <p><strong>Motivo da visita:</strong> <?php echo $_POST["motivo"]; ?></p>
                <p><strong>CPF:</strong> <?php echo $_POST["cpf"]; ?></p>
                <p><strong>Telefone:</strong> <?php echo $_POST["telefone"]; ?></p>
                <p><strong>Email:</strong> <?php echo $_POST["email"]; ?></p>
                <p><strong>Endereço:</strong> <?php echo $_POST["endereco"]; ?></p>

                <br>

                <p><strong>Você confirma que seus dados estão corretos?</strong></p>

                <form method="POST">
                    <input type="hidden" name="confirmado" value="sim">
                    <input type="submit" value="Confirmar" class="btn">
                </form>

                <br>

                <a href="formulario.php" class="btn">Voltar</a>

            <?php } ?>

        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>