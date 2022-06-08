<!DOCTYPE html>
<html>
<head>
    <meta charset="<?= $this->charset; ?>" />
    <meta name="robots" content="noindex,nofollow,noarchive" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Acces Denied</title>

    <style><?= $this->include('assets/css/error.css'); ?></style>
</head>
<body>

<?php
if($statusCode==403)
{
    $statusText='Accèes refuser veuillez contacter l\'admin';
}
?>
        
        <div class="row justify-content-center">
    <div class="col-md-12 col-sm-12">
        <div class="card shadow-lg border-0 rounded-lg mt-5 mx-auto" style="width: 30rem;">
            <h3 class="card-header display-1 text-muted text-center">
            <?= $statusCode; ?>
            </h3>

            <span class="card-subtitle mb-2 text-muted text-center">
            <?= $statusText; ?>
            </span>

            <div class="card-body mx-auto">
                <a type="button" href="/"
                class="btn btn-sm btn-info text-white"> Back To Home </a>
            </div>
        </div>
    </div>
</div>
       
    <!-- <h1>Oops! An Error Occurred</h1>
    <h2>The server returned a "<?= $statusCode; ?> <?= $statusText; ?>".</h2>

    <p>
        Something is broken. Please let us know what you were doing when this error occurred.
        We will fix it as soon as possible. Sorry for any inconvenience caused.
    </p>
</div> -->
</body>
</html>

