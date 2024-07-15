<?php

$title = "Ajouter stagiaire";


ob_start();
?>
<div class="container mt-5">
    <form action="store.php" method="post" class="row g-3">
        <div class="col-md-6">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstName" name="nom" required>

            <label for="secondName" class="form-label">Second Name</label>
            <input type="text" class="form-control" id="secondName" name="prenom" required>

            <label for="age" class="form-label">age</label>
            <input type="number" class="form-control" id="age" name="age" required>

            <label for="login" class="form-label">login</label>
            <input type="email" class="form-control" id="login" name="login" required>

            <label for="pw" class="form-label">password</label>
            <input type="password" class="form-control" id="pw" name="pw" required>

            <input type="submit" class="btn btn-success my-2" value="Ajouter" name="ajouter">
        </div>
    </form>
</div>
<?php $content = ob_get_clean(); ?>
<?php
include_once 'views/layout.php';
?>
