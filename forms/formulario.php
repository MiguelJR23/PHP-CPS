<?php include '../includes/header.php'; ?>
<main>
    <section class="contato">
        <div class="container">
            <h1>Agende uma visita!</h1>

            <form action="processar.php" method="POST">
                
                <p>Seu nome:</p>
                <input type="text" name="nome">

                <br><br>

                <p>Sua idade:</p>
                <input type="text" name="idade">

                <br><br>
                  
                <p>Motivo da visita:</p>
                <input type="text" name="motivo">

                <br><br>
                  
                <p>CPF:</p>
                <input type="text" name="cpf">

                <br><br>
                  
                <p>Número de telefone:</p>
                <input type="text" name="telefone">

                <br><br>
                  
                <p>Email:</p>
                <input type="text" name="email">

                <br><br>
                  
                <p>Endereço:</p>
                <input type="text" name="endereco">

                <br><br>

                <input type="submit" value="Enviar" class="btn">

            </form>
        </div>
    </section>
</main>
<?php include '../includes/footer.php'; ?>
