<?php 
class Cibo{
    public $who;
    public $type;
    public $gusto;
    public $prezzo;

    function __construct($_who, $_type, $_gusto, $_prezzo){
        $this->who = $_who;
        $this->type = $_type;
        $this->gusto = $_gusto;
        $this->prezzo = $_prezzo;
    }
};

class Giochi{
    public $who;
    public $type;
    public $prezzo;

    function __construct($_who, $_type, $_prezzo){
        $this->who = $_who;
        $this->type = $_type;
        $this->prezzo = $_prezzo;
    }
};

class Cucce{
    public $who;
    public $type;
    public $prezzo;

    function __construct($_who, $_type, $_prezzo){
        $this->who = $_who;
        $this->type = $_type;
        $this->prezzo = $_prezzo;
    }
};


$cuccia_gatto = new Cucce('Gatto', 'Cuccia', 12.00);
$croccantiniCane = new Cibo('Cane', 'Croccantini', 'Cioccolato', '30,00 €');
$croccantiniGatto = new Cibo('Gatto', 'Croccantini', 'Cioccolato', '20,00 €');
$ossoCane = new Cibo('Cane', 'Osso', 'Cioccolato', '15,00 €');
$ossoGatto = new Cibo('Gatto', 'Osso', 'Cioccolato', '10,00 €');

$arrayCibo = [
    $croccantiniCane,
    $croccantiniGatto,
    $ossoCane,
    $ossoGatto
];

$cucciaCane = new Cucce('Cane', 'Lettino', '12.00€');
$cucciaGatto = new Cucce('Gatto', 'Lettino', '12.00€');

$arrayCucce = [
    $cucciaGatto,
    $cucciaCane
];

$pallinaCane = new Giochi('Cane', 'Pallina', '12.00€');
$pallinaGatto = new Giochi('Gatto', 'Pallina', '12.00€');

$arrayGiochi = [
    $pallinaCane,
    $pallinaGatto
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1 class="text-center">Prodotti per cani e gatti</h1>
    </header>
    <main>
        <section class="cibo container row m-auto justify-content-between py-5">
            <h3 class="text-center">Cibo</h3>
            <?php foreach ($arrayCibo as $elem) { ?>
            <div class="card col-3">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $elem->type. ' ' .$elem->who ?></h5>
                    <p class="card-text">Gusto: <?php echo $elem->gusto?></p>
                    <p class="card-text">Prezzo: <?php echo $elem->prezzo?></p>
                    <a href="#" class="btn btn-primary">Aquista</a>
                </div>
            </div>
            <?php } ?>
        </section>

        <section class="cucce container row m-auto justify-content-center py-5">
            <h3 class="text-center">Cucce</h3>
            <?php foreach ($arrayCucce as $elem) { ?>
            <div class="card col-3">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $elem->type. ' ' .$elem->who ?></h5>
                    <p class="card-text">Prezzo: <?php echo $elem->prezzo?></p>
                    <a href="#" class="btn btn-primary">Aquista</a>
                </div>
            </div>
            <?php } ?>
        </section>

        <section class="giochi container row m-auto justify-content-center py-5">
            <h3 class="text-center">Giochi</h3>
            <?php foreach ($arrayGiochi as $elem) { ?>
            <div class="card col-3">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $elem->type. ' ' .$elem->who ?></h5>
                    <p class="card-text">Prezzo: <?php echo $elem->prezzo?></p>
                    <a href="#" class="btn btn-primary">Aquista</a>
                </div>
            </div>
            <?php } ?>
        </section>
    </main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>