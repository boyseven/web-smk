<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $page_title.$berita_d->judul; ?></title>
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

    <div class="container-fluid">
        <!-- Card deck -->
        <div class="card-deck">

            <!-- Card -->
            <?php if ($berita_d) : ?>
                <div class="col-sm-10 mx-auto">
                    <div class="card mb-10">
                        <!-- Title -->
                        <h2 class="card-title"><?= $berita_d->judul; ?></h2>
                        <h6 class="card-subtitle mb-2 text-muted">Oleh <?= $berita_d->penulis.' | '.$berita_d->tanggal; ?></h6>
                        <!--Card image-->
                        <div class="view overlay">
                            <img class="card-img-top" src="<?= base_url('/upload/berita/') . $berita_d->gambar; ?>">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!--Card content-->
                        <div class="card-body">
                            <!--Text-->
                            <p class="card-text"><?= $berita_d->content; ?></p>
                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->

                        </div>
                    </div>
                </div>
                <!-- Card -->
            <?php endif; ?>
        </div>
        <!-- Card deck -->
    </div>
    <br>

    <?php
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