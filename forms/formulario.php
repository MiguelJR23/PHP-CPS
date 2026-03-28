<?php include '../includes/header.php'; ?>
<main>
<section class="contato">
    <div class="container">

        <h1>Agende uma visita!</h1>
        <p class="form-sub">Preencha os dados abaixo e entraremos em contato.</p>

        <form action="processar.php" method="POST" class="form-grid">

            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" required>
            </div>

            <div class="form-group">
                <label>Idade</label>
                <input type="number" name="idade" required>
            </div>

            <div class="form-group">
                <label>Motivo da visita</label>
                <input type="text" name="motivo" required>
            </div>

            <div class="form-group">
                <label>CPF</label>
                <input type="text" name="cpf" placeholder="000.000.000-00">
            </div>

            <div class="form-group">
                <label>Telefone</label>
                <input type="text" name="telefone" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group full">
                <label>Endereço</label>
                <input type="text" name="endereco" required>
            </div>

            <div class="form-group full">
                <button type="submit" class="btn">Enviar</button>
            </div>

        </form>

    </div>
</section>
</main>
<?php include '../includes/footer.php'; ?>
