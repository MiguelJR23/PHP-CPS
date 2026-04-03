<?php include '../includes/header.php'; ?>
<main>
<section class="contato">
    <div class="container">
        <h1>Contato</h1>
        <p class="contato-sub">
            Entre em contato conosco ou agende uma visita. Estamos prontos para te ajudar!
        </p>
        <div class="contato-box">
            <div class="contato-info">
                <h2>Fale conosco</h2>
                <p>
                    Você pode nos contatar por aqui, nos ligando ou presencialmente
                    em nossa secretaria. Estamos sempre disponíveis para ajudar
                    e tirar suas dúvidas.
                </p>

                <div class="info-item">
                    <i class="ri-mail-line"></i>
                    <span>contato@eteczonaleste.com</span>
                </div>

                <div class="info-item">
                    <i class="ri-phone-line"></i>
                    <span>(11) 93285-4332</span>
                </div>

                <div class="info-item">
                    <i class="ri-map-pin-line"></i>
                    <span>São Paulo - SP</span>
                </div>

                <div class="info-item">
                    <i class="ri-time-line"></i>
                    <span>Seg a Sex: 08h às 18h</span>
                </div>
            </div>
            <div class="contato-form">
                <h2>Agende uma visita</h2>
                <form action="../forms/processar.php" method="POST">

                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" required>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label>Telefone</label>
                        <input type="text" name="telefone" required>
                    </div>

                    <div class="form-group">
                        <label>Mensagem</label>
                        <input type="text" name="mensagem" required>
                    </div>

                    <div class="form-group full">
                        <button type="submit" class="btn">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</main>
<?php include '../includes/footer.php'; ?>
