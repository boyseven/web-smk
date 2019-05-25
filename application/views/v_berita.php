<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $page_title.' BERITA'; ?></title>
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url()?>/assets/img/favicon/favicon-32x32.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/css/mdb.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/ticker.css'); ?>">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
</head>

<body>
    <?php
    $this->load->view('template/top_nav');
    $this->load->view('template/navbar');
    $this->load->view('template/jumbotron');
    ?>
    <div class="ticker-container">
        <div class="ticker-caption">
            <p>Terkini</p>
        </div>
        <ul>
            <?php foreach ($ticker as $ticker) : ?>
                <div>
                    <li><span><a href="<?= site_url('/berita/' . $ticker->slug_berita); ?>"><?= $ticker->judul; ?></a></span></li>
                </div>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- garis -->
    <br>
    <table>
        <tr>
            <td style="width:20%">
                <hr />
            </td>
            <td style="vertical-align:middle; text-align: center">
                <h3>BERITA</h3>
            </td>
            <td style="width:80%">
                <hr />
            </td>
        </tr>
    </table>
    <!-- /garis -->

    <div class="container-fluid">
        <!-- Card deck -->
        <div class="card-deck">

            <!-- Card -->
            <?php if ($berita) : ?>
                <?php foreach ($berita as $berita) : ?>
                    <div class="col-sm-3">
                        <div class="card mb-3" style="margin-left:0px;margin-right:0px">

                            <!--Card image-->
                            <div class="view overlay">
                                <img class="card-img-top" src="<?= base_url('/upload/berita/') . $berita->gambar; ?>">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!--Card content-->
                            <div class="card-body">

                                <!--Title-->
                                <b class="card-title"><?= $berita->judul; ?></b>
                                <p class="card-text text-muted">Oleh <?= $berita->penulis . ' | ' . $berita->tanggal; ?></p>
                                <!--Text-->
                                <p class="card-text"><?= character_limiter($berita->lead, 100); ?></p>
                                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                <a href="<?= site_url('/berita/' . $berita->slug_berita); ?>">Selengkapnya</a>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
            <!-- Card -->

        </div>
        <!-- Card deck -->
    </div>


    <?php
    $this->load->view('template/pagination', TRUE);
    // $this->load->view('iklan');
    $this->load->view('template/footer', TRUE);
    ?>
</body>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.5/js/mdb.min.js"></script>
<!-- custom JS -->
<script src="<?php echo base_url('assets/js/ticker.js'); ?>"></script>
<!-- GPR Kominfo -->
<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>

</html>