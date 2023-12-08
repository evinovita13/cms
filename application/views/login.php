<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="<?= site_url('assets/pluto') ?>/images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto') ?>/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto') ?>/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto') ?>/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto') ?>/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto') ?>/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto') ?>/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto') ?>/css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="<?= site_url('assets/pluto') ?>/js/semantic.min.css" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page login">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        
                     </div>
                  </div>
                  <div class="login_form">
                     <form action="<?= base_url('auth/login') ?>" method="POST">
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Username</label>
                              <input type="text" name="username" placeholder="Enter your Username" />
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" name="password" placeholder="Password" />
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button type="submit" class="main_bt">Login</button>
                           </div>
                        </fieldset>
                        <div id="ngilang">
                            <?= $this->session->flashdata('alert') ?>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <!-- jQuery -->
      <script src="<?= site_url('assets/pluto') ?>/js/jquery.min.js"></script>
      <script src="<?= site_url('assets/pluto') ?>/js/popper.min.js"></script>
      <script src="<?= site_url('assets/pluto') ?>/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="<?= site_url('assets/pluto') ?>/js/animate.js"></script>
      <!-- select country -->
      <script src="<?= site_url('assets/pluto') ?>/js/bootstrap-select.js"></script>
      <!-- nice scrollbar -->
      <script src="<?= site_url('assets/pluto') ?>/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="<?= site_url('assets/pluto') ?>/js/custom.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script>
        $('#ngilang').delay('slow').slideDown('slow').delay(10000).slideUp(600);
      </script>
   </body>
</html>