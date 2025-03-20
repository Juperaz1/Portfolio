
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Certifications</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Mes Certifications</h2>
        <div class="row">
            <?php if(isset($certifications) && is_array($certifications)): ?>
                <?php foreach($certifications as $cert): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?= esc($cert['title']) ?></h5>
                                <p class="card-text"><?= esc($cert['description']) ?></p>
                                <p class="card-text"><small class="text-muted">Issued: <?= esc($cert['issue_date']) ?></small></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12">
                    <p>No certifications found.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
