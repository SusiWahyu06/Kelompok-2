<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PT. Garuda Mataram Motor</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="<?php echo base_url().'assets/img/favicon.ico'?>" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?php echo base_url().'assets/lib/flaticon/font/flaticon.css'?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/lib/animate/animate.min.css'?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/lib/owlcarousel/assets/owl.carousel.min.css'?>" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="index.html">
                                <h1>PT.<span>GMM</span></h1>
                                <!-- <img src="img/logo.jpg" alt="Logo"> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Jam Operasional</h3>
                                        <p>Senin - Minggu, 8:00 - 19:00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Hubungi Kami</h3>
                                        <p>(021) 8191588</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Email Kami</h3>
                                        <p>info@vw-indonesia.id</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
<?php $this->load->view('header');?>
        <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Penghargaan</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Price Start -->
        <div class="price">
            <div class="container">
                <div class="section-header text-center">
                    <h2>PT. Garuda Mataram Motor</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Skala Antar-Group</h3>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Gold Achievement of Indomobil 2012</li>
                                    <li><i class="far fa-check-circle"></i>Gold Achievement of Indomobil 2013</li>
                                    <li><i class="far fa-check-circle"></i>Gold Achievement of Indomobil 2015</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <h3>Skala Internasional</h3>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Red Dot Award: Product Design 2013</li>
                                    <li><i class="far fa-check-circle"></i>World Car of The Year 2013</li>
                                    <li><i class="far fa-check-circle"></i>Best Navigation Solution 2012</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Skala Nasional</h3>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Best Executive Saloon 2012</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price End -->
        
        
        <!-- Footer Start -->
<?php $this->load->view('footer');?> 
    </body>
</html>
