<?php require 'views/_partials/head.view.php';?>

<section>
    <h2 class="text-center mt-5 mb-5">Company</h2>
    
    <div class="container-fluid d-flex justify-content-center">
        <div>
        <?php foreach ($tasks->info($id) as $company): ?>
            <p><b>Company name:</b> <?= $company['pavadinimas']; ?></p>
            <p><b>Code:</b> <?= $company['kodas']; ?></p>
            <p><b>PMV Code:</b> <?= $company['pvm_kodas']; ?></p>
            <p><b>Adress:</b> <?= $company['adresas']; ?></p>
            <p><b>Phone number:</b> <?= $company['telefonas']; ?></p>
            <p><b>Email:</b> <?= $company['pastas']; ?></p>
            <p><b>Activity:</b> <?= $company['veikla']; ?></p>
            <p><b>CEO:</b> <?= $company['vadovas']; ?></p>
        <?php endforeach; ?>
        </div>
    </div>
    </section>

<?php require 'views/_partials/htmlEnd.php';?>