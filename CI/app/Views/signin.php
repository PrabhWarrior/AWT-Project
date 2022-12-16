<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Webex Login</title>
    <style>
    .cl {
      background-color: rgb(4, 113, 156);
    }

    .cl1 {
      background-color: rgb(23, 20, 20);
    }
  </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark cl1">

<div class="container-fluid">

  <a class="navbar-brand" href=""><img src="https://cdn.pixabay.com/photo/2016/12/17/15/50/logo-1913689_960_720.png" alt="" width="30" height="24"></a>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">



  </div>

</div>
</nav>
    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-5">
                
                <h2>User Login</h2>
                
                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>
                <form action="<?php echo base_url(); ?>/SigninController/loginAuth" method="post">
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control" >
                    </div>
                    
                    <div class="d-grid">
                         <button type="submit" class="btn btn-dark">Login</button>
                    </div>     
                </form>
            </div>
              
        </div>
    </div>
  </body>
</html>