<?php include '../includes/header.php'; ?>

<main>
    <section class="contato">
        <div class="container">
            <h1>Formulário</h1>

            <form action="processar.php" method="POST">
                
                <p>Seu nome:</p>
                <input type="text" name="nome">

                <br><br>

                <p>Sua idade:</p>
                <input type="text" name="idade">

                <br><br>

                <input type="submit" value="Enviar" class="btn">

            </form>
        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>
