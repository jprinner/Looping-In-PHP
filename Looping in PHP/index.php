<?php require_once('data.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP 101</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav_dropdown">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">PHP 101</a>
        </div>
        <div class="collapse navbar-collapse" id="nav_dropdown">

          <ul class="nav navbar-nav navbar-right">
            <?php for ( $i= 0; $i < count($menu); $i++ ): ?>

              <?php if( array_key_exists('subpages', $menu[$i]) ): ?>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <?php echo $menu[$i]['title'];?><span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu">
                    <?php for( $k=0; $k < count($menu[2]['subpages']); $k++ ): ?>
                      <li>
                        <a href="<?php echo $menu[2]['subpages'][$k]['link'];?>"><?php echo $menu[2]['subpages'][$k]['title']; ?></a>
                      </li>
                    <?php endfor; ?>
  			           </ul><!-- /.dropdown-menu -->
  			         </li>

              <?php else: ?>
  				      <li><a href="<?php echo $menu[$i]['link'];?> "><?php echo $menu[$i]['title'];?></a></li>
              <?php endif; ?>
  		      <?php endfor; ?>
          </ul><!-- /.navbar-nav -->

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav><!-- /.navbar -->

    <div class="jumbotron">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h1><?php echo $jumbotron["heading"]; ?></h1>
            <p><?php echo $jumbotron["subheading"]; ?></p>
          </div><!-- /.col-md-6 -->
          <div class="col-md-6">

            <ul class="list-group">
              <?php for( $i = 0; $i<count($jumbotron_list); $i++ ) {
        				echo '<li class="list-group-item">'.$jumbotron_list[$i].'</li>';
              } ?>
            </ul><!-- /.list-group -->

          </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.jumbotron -->

    <section>
      <div class="container">
        <h2>The Latest</h2>
        <div class="row">

    		<?php for( $i=0; $i < count($latest); $i++ ): ?>
    		  <div class="col-sm-6 col-md-4">
              <div class="thumbnail">
    		        <img src="<?php echo $latest[$i]['img_src'];?>">
                <div class="caption">
                  <h3><?php echo $latest[$i]['title'];?></h3>
                  <p class="author"><a href="/author<?php echo $latest[$i]['author']['link'];?>"><?php echo $latest[$i]['author']['first_name']. " ".$latest[$i]['author']['last_name'];?> </a></p>
                  <p><?php echo $latest[$i]['excerpt'];?></p>
                  <p><a href="#" class="btn btn-primary" role="button">Read More</a></p>
                </div>
              </div><!-- /.thumbnail -->
          </div><!-- /.col -->
    		<?php endfor; ?>
        </div><!-- /row -->
      </div><!-- /.container -->
    </section>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>