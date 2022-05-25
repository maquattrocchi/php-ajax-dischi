<?php
include __DIR__.'/database.php';
//var_dump($dischi)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Dischi</title>
</head>
<body>
    <header class="d-flex align-items-center">
        <img src="img/spotify-logo.png" alt="spotify-logo">
    </header>
    <main>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 gy-3 m-auto">
            <?php foreach($discs as $disc){ ?>
            <div class="col">
                <div class="card h-100">
                    <img src="<?php echo $disc['poster'] ?>" class="card-img-top" alt="<?php echo $disc['title'] ?>">
                    <div class="pt-3">
                        <h5 class="cs_title"><?php echo $disc['title'] ?></h5>
                        <div class="cs_text"><?php echo $disc['author'] ?></div>
                        <div class="cs_text"><?php echo $disc['year'] ?></div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>