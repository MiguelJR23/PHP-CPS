<?php include '../includes/header.php'; ?>
<main>
<section class="contato">
    <div class="container">

        <h1>Agende uma visita!</h1>
        <p class="form-sub">Preencha os dados abaixo e entraremos em contato assim que possível.</p>

        <form action="processar.php" method="POST" class="form-grid">

            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" placeholder="Fulano da Silva" required>
            </div>

            <div class="form-group">
                <label>Idade</label>
                <input type="number" name="idade" placeholder="Ex: 25" required>
            </div>

            <div class="form-group">
                <label>Motivo da visita</label>
                <input type="text" name="motivo" placeholder="Estou planejando estudar aí" required>
            </div>

            <div class="form-group">
                <label>CPF</label>
                <input type="text" name="cpf" placeholder="000.000.000-00">
            </div>

            <div class="form-group">
                <label>Telefone</label>
                <input type="text" name="telefone" placeholder="(00) 00000-0000" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="seu.email@dominio.com" required>
            </div>

            <div class="form-group full">
                <label>Endereço</label>
                <input type="text" name="endereco" placeholder="Rua, número, bairro" required>
            </div>

            <div class="form-group full">
                <button type="submit" class="btn">Enviar</button>
            </div>

        </form>

    </div>
</section>
</main>
<?php include '../includes/footer.php'; ?>
