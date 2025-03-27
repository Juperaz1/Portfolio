<?= $this->include('template/header'); ?> <!-- Inclusion du header -->

<section id="home">
    <div class="parallax-layer" id="layer1" style="background-image: url('<?= base_url('assets/img/layer1.png'); ?>');"></div>
    <div class="parallax-layer" id="layer2" style="background-image: url('<?= base_url('assets/img/layer2.png'); ?>');"></div>
    <div class="container">
        <h1 class="text-white">Bienvenue sur mon Portfolio</h1>
    </div>
</section>

<?= $this->include('template/footer'); ?> <!-- Inclusion du footer -->

<script src="<?= base_url('assets/js/parallax.js'); ?>"></script> <!-- Script d'animation -->