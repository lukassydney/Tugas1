<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flex & Grid</title>
    <link rel="stylesheet" href="vendor/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>

    <nav>
        <div class="brand">
            <h4>JONS BOULANGERIE PATISSERIE</h4>
        </div>

        <ul>
            <li> <a href="<?= base_url('Home'); ?>">HOME</a></li>
            <li><a href="<?= base_url('Sejarah'); ?>">SEJARAH</a></li>
            <li> <span>PRODUCTS</span>
                <ul class="dropdown">
                    <li><a href="<?= base_url('Roti'); ?>">Roti</a></li>
                    <li><a href="<?= base_url('RotiMini'); ?>">Roti Mini</a></li>
                    <li><a href="<?= base_url('Pastry'); ?>">Pastry</a></li>
                    <li><a href="<?= base_url('Toast'); ?>">Toast</a></li>
                    <li><a href="<?= base_url('Bolu'); ?>">Bolu</a></li>
                    <li><a href="<?= base_url('Cake'); ?>">Cake</a></li>
                </ul>

            </li>
            <li><a href="<?= base_url('Berita'); ?>">BERITA</a></li>
            <li><a href="<?= base_url('Services'); ?>">SERVICES</a></li>
        </ul>


    </nav>