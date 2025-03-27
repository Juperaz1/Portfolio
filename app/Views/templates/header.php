<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>LOISEAU Justine-Portfolio</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<style>
    

/* Reset de base et variables */
:root {
    --primary-color: #5d5c61;
    --secondary-color: #379683;
    --accent-color: #7395ae;
    --light-color: #b1a296;
    --dark-color: #557a95;
    --text-color: #333;
    --light-text: #f5f5f5;
    --shadow: 0 4px 8px rgba(0,0,0,0.1);
    --transition: all 0.3s ease;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    line-height: 1.7;
    background-color: #f9f9f9;
    color: var(--text-color);
}

/* Header */
header {
    background: linear-gradient(135deg, var(--primary-color), var(--dark-color));
    color: var(--light-text);
    padding: 1.5rem 0;
    position: sticky;
    top: 0;
    z-index: 100;
    box-shadow: var(--shadow);
}

header nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    padding: 0;
}

header nav ul li {
    margin: 0 20px;
    position: relative;
}

header nav ul li a {
    color: var(--light-text);
    text-decoration: none;
    font-weight: 600;
    font-size: 1.1rem;
    padding: 5px 10px;
    border-radius: 4px;
    transition: var(--transition);
}

header nav ul li a:hover {
    background-color: rgba(255, 255, 255, 0.2);
    transform: translateY(-2px);
}

header nav ul li a::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: var(--light-color);
    transition: var(--transition);
}

header nav ul li a:hover::after {
    width: 100%;
}





/* Footer */
footer {
    background: linear-gradient(135deg, var(--primary-color), var(--dark-color));
    color: var(--light-text);
    text-align: center;
    padding: 30px 0;
    margin-top: 60px;
}

.social-links {
    margin: 20px 0;
}

.social-links a {
    color: var(--light-text);
    margin: 0 15px;
    font-size: 1.5rem;
    transition: var(--transition);
}

.social-links a:hover {
    color: var(--light-color);
}

.copyright {
    font-size: 0.9rem;
    opacity: 0.8;
}

/* Responsive Design */
@media (max-width: 768px) {
    header nav ul {
        flex-direction: column;
        align-items: center;
    }

    header nav ul li {
        margin: 10px 0;
    }

    .projects-grid {
        grid-template-columns: 1fr;
    }

    section {
        padding: 20px;
    }
}

/* Animation */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

section {
    animation: fadeIn 0.6s ease-out forwards;
}
</style>
<body>
    <header>
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