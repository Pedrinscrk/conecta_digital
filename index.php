<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conecta Digital - Sites Modernos e Tecnológicos</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Orbitron:wght@500;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section id="hero">
        <div class="hero-content">
            <h1>Conecta Digital</h1>
            <p>Sites minimalistas e tecnológicos feitos para transformar sua presença digital.</p>
        </div>
        <canvas id="hero-canvas"></canvas>
    </section>

    <!-- Nossos Serviços -->
    <section id="services-overview">
        <h2>Três Tipos de Sites Para o Sucesso</h2>
        <div class="services-grid">
            <div class="service-item" onmouseover="showPreview('landing')" onmouseout="hidePreview()">
                <h3>Landing Pages</h3>
                <p>Páginas rápidas e focadas em conversão.</p>
                <img id="preview-landing" src="assets/images/iamge.jpg" alt="Preview de Landing Page" class="preview">
            </div>
            <div class="service-item" onmouseover="showPreview('ecommerce')" onmouseout="hidePreview()">
                <h3>E-commerce</h3>
                <p>Lojas virtuais completas, modernas e otimizadas.</p>
                <img id="preview-ecommerce" src="assets/images/ecommerce-preview.png" alt="Preview de E-commerce" class="preview">
            </div>
            <div class="service-item" onmouseover="showPreview('institutional')" onmouseout="hidePreview()">
                <h3>Sites Institucionais</h3>
                <p>Fortaleça sua marca com uma presença digital sólida.</p>
                <img id="preview-institutional" src="assets/images/institutional-preview.png" alt="Preview de Site Institucional" class="preview">
            </div>
        </div>
    </section>

    <!-- Empresas que Confiam -->
    <section id="current-users">
        <h2>Empresas que já confiam em nós</h2>
        <div class="rotating-logos">
            <img src="assets/images/logo1.png" alt="Cliente 1">
            <img src="assets/images/logo2.png" alt="Cliente 2">
            <img src="assets/images/logo3.png" alt="Cliente 3">
            <img src="assets/images/logo4.png" alt="Cliente 4">
        </div>
    </section>

    <!-- Call to Action -->
    <section id="final-cta">
        <h2>Pronto para transformar seu negócio?</h2>
        <p>Clique abaixo para criar o site ideal para você:</p>
        <button class="cta-button" onclick="location.href='orcamento.php'">Monte Seu Orçamento</button>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="assets/js/scripts.js"></script>
</body>
</html>
