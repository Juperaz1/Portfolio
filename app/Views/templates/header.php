<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Portfolio - Accueil</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/plugin/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>
<body>
<style>
    /* Reset de base */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
    color: #333;
}

/* Header */
header {
    background-color: #333;
    color: #fff;
    padding: 1rem 0;
    text-align: center;
}

header nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    padding: 0;
}

header nav ul li {
    margin: 0 15px;
}

header nav ul li a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease;
}

header nav ul li a:hover {
    color: #ff6347; /* Couleur au survol */
}

/* Contenu principal */
main {
    padding: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

/* Section des projets */
.projects, .veille, .certifications, .contact {
    margin-bottom: 40px;
}

.projects h2, .veille h2, .certifications h2, .contact h2 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #333;
}

/* Cartes de projets */
.project-card {
    background-color: #fff;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.project-card:hover {
    transform: translateY(-10px);
}

.project-card h3 {
    font-size: 1.5rem;
    margin-bottom: 10px;
}

.project-card p {
    font-size: 1rem;
    color: #666;
}

/* Footer */
footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    margin-top: 40px;
}

footer p {
    margin: 0;
}

/* Responsive Design */
@media (max-width: 768px) {
    header nav ul {
        flex-direction: column;
    }

    header nav ul li {
        margin: 10px 0;
    }

    .project-card {
        padding: 15px;
    }
}
</style>
<body>
    <header><header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">Mon Portfolio</a>
        </div>
    </nav>
</header>
        <nav>
            <ul>
                <li><a href="<?php echo base_url(); ?>">Accueil</a></li>
                <li><a href="<?php echo base_url('projets'); ?>">Mes Projets</a></li>
                <li><a href="<?php echo base_url('veille'); ?>">Ma veille technologique</a></li>
                <li><a href="<?php echo base_url('certifications'); ?>">Mes Certifications</a></li>
                <li><a href="<?php echo base_url('contact'); ?>">Contactez-moi</a></li>
            </ul>
        </nav>
    </header>