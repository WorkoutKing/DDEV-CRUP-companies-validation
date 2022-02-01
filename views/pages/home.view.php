<?php require 'views/_partials/head.view.php';?>


    <h2 class="text-center title">SEARCH FOR THE COMPANY</h2>
    <div class="container">
        <form method="post">
        <div class="row d-flex justify-content-center mt-5 mb-3">
            <input type="text" name="search" id="search" placeholder="Search by name or code"/>
        </div>
        <div class="row justify-content-center mb-5">
            <input type="submit" id="submit" name="submit" value="Ieškoti" class="btn btn-primary" />
        </div>
        </form>
    </div>
<section class="d-flex justify-content-center mt-5 mb-3">
</section>

<?php require 'views/_partials/htmlEnd.php';?>