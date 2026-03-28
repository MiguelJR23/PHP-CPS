<?php include 'includes/header.php'; ?>

<main>
    <section class="hero">
    <div id="carouselHero" class="carousel slide carousel-fade" data-bs-ride="carousel">
        
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="assets/img/slide1.jpg" class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="assets/img/slide2.jpg" class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="assets/img/slide3.jpg" class="d-block w-100">
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselHero" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselHero" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>

    <div class="hero-overlay"></div>

    <div class="hero-content container">
        <h1>Transformando seu futuro através da educação</h1>
        <p>Capacitação profissional com cursos modernos e focados no mercado.</p>

        <div class="hero-buttons">
            <a href="pages/cursos.php" class="btn">Ver cursos</a>
            <a href="forms/formulario.php" class="btn-outline">Agendar visita</a>
        </div>
    </div>

</section>

    <section class="diferenciais">
        <div class="container">
            <h2>Por que estudar conosco?</h2>

            <div class="cards">

                <div class="card">
                    <i class="ri-user-star-line"></i>
                    <h3>Professores qualificados</h3>
                    <p>Profissionais experientes e preparados para ensinar.</p>
                </div>

                <div class="card">
                    <i class="ri-building-line"></i>
                    <h3>Estrutura moderna</h3>
                    <p>Ambiente equipado para aprendizado de qualidade.</p>
                </div>

                <div class="card">
                    <i class="ri-briefcase-4-line"></i>
                    <h3>Foco no mercado</h3>
                    <p>Conteúdos alinhados com as exigências profissionais.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="cursos">
        <div class="container">
            <h2>Nossos Cursos</h2>

            <div class="cards">

                <div class="card">
                    <i class="ri-code-s-slash-line"></i>
                    <h3>Desenvolvimento de Sistemas</h3>
                </div>

                <div class="card">
                    <i class="ri-briefcase-line"></i>
                    <h3>Administração</h3>
                </div>

                <div class="card">
                    <i class="ri-team-line"></i>
                    <h3>Recursos Humanos</h3>
                </div>

            </div>
            <a href="pages/cursos.php" class="btn">Ver todos os cursos</a>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <h2>Pronto para começar?</h2>
            <p>Agende uma visita e conheça nossa instituição.</p>
            <a href="forms/formulario.php" class="btn">Agendar agora</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>