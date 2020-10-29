<!doctype html>
<html lang="de" class="bg-light">

<head>
    <title><?= $title; ?></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="<?= $robots ?>" />
    <meta name="description" content="<?= $description ?>" />
    <meta name="keywords" content="<?= $keywords_private.','.$keywords_alldomains; ?>" />
    <meta name="author" content="<?= $author ?>" />
    <meta name="co-author" content="<?= $co_author ?>" />
    <meta name="pragma" content="<?= $cache ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/amc.bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.15.1/css/all.css" crossorigin="anonymous">
    <link href="<?= base_url('assets/favicon.png'); ?>" rel="icon" type="image/png" />
	<?= $meta_postal ?>
    <?= $meta_og ?>
    <?= $meta_itemprop ?>
    <?= $meta_links ?>
    <?  /* <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> */ ?>
    <link href="<?= base_url('assets/favicon.png'); ?>" rel="icon" type="image/png" />
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Roboto+Slab|Montserrat');

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Roboto Slab';
            font-display: auto;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: 'Montserrat';
            font-weight: bold;
            font-display: auto;
        }

        .navbar-brand {
            font-family: 'Montserrat';
            font-weight: bold;
            font-size: 26px
        }
    </style>
</head>

<body>
    <? $this->load->view("navigation"); ?>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <div class="container">
    <? $this->load->view($main_content) ?>
    </div>
    <? $this->load->view("footer"); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>