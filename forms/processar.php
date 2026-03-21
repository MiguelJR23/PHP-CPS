<?php include '../includes/header.php'; ?>
<main>
    <section class="contato">
        <div class="container">
            <h1>Dados recebidos</h1>

            <p>
                <?php echo $_POST["nome"]; ?>
            </p>

            <p>
                Você tem <?php echo $_POST["idade"]; ?> anos.
            </p>

            <br>

            <a href="../index.php" class="btn">Voltar</a>
        </div>
    </section>
</main>
<?php include '../includes/footer.php'; ?>
