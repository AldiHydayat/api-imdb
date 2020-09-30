<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title><?= $title ?></title>
  </head>
  <body>
    <section id="header">
        <div class="jumbotron jtron">
            <div class="row mt-5">
                <div class="col">
                    <h1 class="display-4 mt-3 text-center text-light">Selamat Datang</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <h3 class="text-light text-center">Silahkan Cari Film Dibawah</h3>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <form action="" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Masukan Judul film" name="keyword">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary bg-primary" type="submit" id="button-addon2"><i class="fas fa-search"></i></button>
                                </div>                            
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    <section id="content">
        <?php if($movies != null) :?>
            <?php if($movies['Response'] == 'True') : ?>
            <div class="container">
                <div class="row justify-content-center">
                    <?php foreach($movies['Search'] as $movie) :?>
                        <div class="col-md-3 col-sm mr-2 mt-2">
                            <div class="card" style="width: 18rem;">
                                <img src="<?= $movie['Poster']; ?>" class="card-img-top img-fluid">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $movie['Title']; ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Tahun : <?= $movie['Year']; ?></h6>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php else : ?>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h3 class="text-center text-danger">Film Tidak ditemukan</h3>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>