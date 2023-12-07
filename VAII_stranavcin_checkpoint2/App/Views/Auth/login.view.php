<?php

$layout = 'zaklad';
/** @var Array $data */
/** @var \App\Core\LinkGenerator $link */
?>

<h1 class="hlavnyNadpis">Prihlásenie</h1>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-15">
                <div class="card-body">
                    <div class="text-center text-danger mb-3">
                        <?= @$data['message'] ?>
                    </div>
                    <form class="form-signin" method="post" action="<?= $link->url("prihlasenie.login") ?>">
                        <div class="form-label-group mb-3">
                            <input name="login" type="text" id="login" class="form-control" placeholder="Prihlasovacie meno" required>
                        </div>

                        <div class="form-label-group mb-3">
                            <input name="password" type="password" id="password" class="form-control" placeholder="Heslo" required>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary mb-1 w-50" type="submit" name="submit">Prihlásiť</button>
                        </div>
                    </form>
                    <div class="text-center">
                        <button class="btn btn-primary mb-1 w-50" type="submit" name="submit">Zaregistrovať sa</button>
                    </div>
                    <div class="text-center">
                        <a href="#">Zabudli ste meno?</a>
                    </div>
                    <div class="text-center">
                        <a href="#">Zabudli ste heslo?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
