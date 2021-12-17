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
                        <h2>Struktur Organisasi</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="<?php echo base_url().'assets/img/org1.jpg'?>" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Andrew Nasuri</h2>
                                <p>Chief Executive Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="<?php echo base_url().'assets/img/org2.jpg'?>" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Ahmad Badawi</h2>
                                <p>Chief Operating Officer</p>
                                <div class="team-social">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="<?php echo base_url().'assets/img/org3.jpg'?>" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Herry Noverino</h2>
                                <p>Marketing</p>
                                <div class="team-social">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="<?php echo base_url().'assets/img/org4.jpg'?>" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Dwi Sukma Aji</h2>
                                <p>Sales Manager</p>
                                <div class="team-social">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Footer Start -->
<?php $this->load->view('footer');?>
    </body>
</html>
