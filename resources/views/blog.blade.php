<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Isoman</title>

  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Bootstrap 4 CSS -->
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <!-- My CSS -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
  <!--header section start -->
  <nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="{{ asset('img/logo-isoman1.png') }}" width="150"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav blog-navbar ml-auto">
          <a class="nav-link text-white" href="{{ URL::to('/') }}">Home</a>
          <a class="nav-link text-white" href="#">Gejala</a>
          <a class="nav-link text-white" href="#">Penyebab</a>
          <a class="nav-link text-white" href="{{ URL::to('/blog') }}">berita</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- news section start -->
  <div class="news_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <div class="row">
            <div class="col-md-6">
              <div class="card blog rounded border-0 shadow mb-5">
                <div class="position-relative">
                  <img src="{{ asset('img/news.jpg') }}" class="card-img-top rounded-top" alt="news covid-19">
                </div>
                <div class="card-body content">
                  <h5><a href="{{ URL::to('/detail') }}" class="card-title text-dark">Berita COVID-19 Terbaru</a></h5>
                  <div class="post-meta d-flex justify-content-between mt-3">
                    <ul class="list-unstyled mb-0">
                      <li class="list-inline-item me-2 mb-0"><a href="{{ URL::to('/detail') }}" class="text-muted like"><i class="far fa-heart"></i> 33</a></li>
                      <li class="list-inline-item"><a href="{{ URL::to('/detail') }}" class="text-muted comments"><i class="far fa-comment"></i> 08</a></li>
                    </ul>
                    <a href="{{ URL::to('/detail') }}" class="text-muted readmore">Read More</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card blog rounded border-0 shadow mb-5">
                <div class="position-relative">
                  <img src="{{ asset('img/news.jpg') }}" class="card-img-top rounded-top" alt="news covid-19">
                </div>
                <div class="card-body content">
                  <h5><a href="{{ URL::to('/detail') }}" class="card-title text-dark">Berita COVID-19 Terbaru</a></h5>
                  <div class="post-meta d-flex justify-content-between mt-3">
                    <ul class="list-unstyled mb-0">
                      <li class="list-inline-item me-2 mb-0"><a href="{{ URL::to('/detail') }}" class="text-muted like"><i class="far fa-heart"></i> 33</a></li>
                      <li class="list-inline-item"><a href="{{ URL::to('/detail') }}" class="text-muted comments"><i class="far fa-comment"></i> 08</a></li>
                    </ul>
                    <a href="{{ URL::to('/detail') }}" class="text-muted readmore">Read More</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card blog rounded border-0 shadow mb-5">
                <div class="position-relative">
                  <img src="{{ asset('img/news.jpg') }}" class="card-img-top rounded-top" alt="news covid-19">
                </div>
                <div class="card-body content">
                  <h5><a href="{{ URL::to('/detail') }}" class="card-title text-dark">Berita COVID-19 Terbaru</a></h5>
                  <div class="post-meta d-flex justify-content-between mt-3">
                    <ul class="list-unstyled mb-0">
                      <li class="list-inline-item me-2 mb-0"><a href="{{ URL::to('/detail') }}" class="text-muted like"><i class="far fa-heart"></i> 33</a></li>
                      <li class="list-inline-item"><a href="{{ URL::to('/detail') }}" class="text-muted comments"><i class="far fa-comment"></i> 08</a></li>
                    </ul>
                    <a href="{{ URL::to('/detail') }}" class="text-muted readmore">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="blog-sidebar">
            <div>
              <h5 class="blog-title">Kategori</h5>
              <div class="sidebar-container borders">
                <ul class="sidebar-list">
                  <li class="d-flex"><a href="#"><i aria-hidden="true" class="fa fa-angle-right"></i>Gejala</a></li>
                  <li class="d-flex"><a href="#"><i aria-hidden="true" class="fa fa-angle-right"></i>Penyebab</a></li>
                  <li class="d-flex"><a href="#"><i aria-hidden="true" class="fa fa-angle-right"></i>Obat</a></li>
                  <li class="d-flex"><a href="#"><i aria-hidden="true" class="fa fa-angle-right"></i>Isoman</a></li>
                </ul>
              </div>
            </div>
            <div>
              <h5 class="blog-title">Berita Populer</h5>
              <div class="sidebar-container">
                <div class="post-container d-flex">
                  <a href="{{ URL::to('/detail') }}" class="post-img">
                    <img alt="" class="img-fluid" src="{{ asset('img/news.jpg') }}">
                  </a>
                  <div>
                    <a href="{{ URL::to('/detail') }}" class="post-head">Kondisi Covid Saat Ini</a>
                    <h6 class="date">nov 22, 2020</h6>
                  </div>
                </div>
                <div class="post-container d-flex">
                  <a href="{{ URL::to('/detail') }}" class="post-img">
                    <img alt="" class="img-fluid" src="{{ asset('img/news.jpg') }}">
                  </a>
                  <div>
                    <a href="{{ URL::to('/detail') }}" class="post-head">Kondisi Covid Saat Ini</a>
                    <h6 class="date">nov 22, 2020</h6>
                  </div>
                </div>
                <div class="post-container d-flex">
                  <a href="{{ URL::to('/detail') }}" class="post-img">
                    <img alt="" class="img-fluid" src="{{ asset('img/news.jpg') }}">
                  </a>
                  <div>
                    <a href="{{ URL::to('/detail') }}" class="post-head">Kondisi Covid Saat Ini</a>
                    <h6 class="date">nov 22, 2020</h6>
                  </div>
                </div>
                <div class="post-container d-flex">
                  <a href="{{ URL::to('/detail') }}" class="post-img">
                    <img alt="" class="img-fluid" src="{{ asset('img/news.jpg') }}">
                  </a>
                  <div>
                    <a href="{{ URL::to('/detail') }}" class="post-head">Kondisi Covid Saat Ini</a>
                    <h6 class="date">nov 22, 2020</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- footer section start -->
  <div class="footer_section layout_padding">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-4 col-sm-6 col-12">
          <h2 class="useful_text">Tentang Kami</h2>
          <p class="footer_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam molestiae at quas alias tenetur, error perferendis dolorum cum animi amet iusto voluptatem dolore quis iste.</p>
        </div>
        <div class="col-lg-2 col-sm-6 col-6">
          <h2 class="useful_text">Link</h2>
          <div class="footer_menu">
            <ul class="list-unstyled">
              <li><a href="#">Home</a></li>
              <li><a href="#">Gejala</a></li>
              <li><a href="#">Penyebab</a></li>
              <li><a href="#">Berita</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-6">
          <h2 class="useful_text">Media Sosial</h2>
          <div class="footer_menu">
            <ul class="list-unstyled">
              <li><a href="#">Instagram</a></li>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Youtube</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
          <h2 class="useful_text">Hubungi Kami</h2>
          <div class="footer_menu">
            <ul class="list-unstyled">
              <li>
                <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>
                  JL Dr Soebandi Gg 6 No 12</a>
              </li>
              <li>
                <a href="#"><i class="fa fa-phone" aria-hidden="true"></i>
                  +62 82340372702</a>
              </li>
              <li>
                <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>
                  cs@leravio.com</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="copyright row justify-content-center">
        <span class="text-center">© 2021 Isoman. Design by Leravio.</span>
      </div>
    </div>
  </div>


  <script>
    var botmanWidget = {
      frameEndpoint: "{{ URL::to('/widget') }}",
      title: 'Bot Isoman',
      mainColor: '#007bff',
      bubbleAvatarUrl: "{{ asset('img/icon-bot.png') }}",
      bubbleBackground: '#007bff',
      headerTextColor: '#ffffff',
      placeholderText: 'Kirim pesan....',
      aboutText: 'isoman',
      aboutLink: 'https://leravio.com',
      introMessage: `
            Halo, selamat datang saya akan membantu anda. Ketik perintah berikut untuk menanyakan beberapa hal
            <br><br>
            /gejala
            <br>
            /obat
            `
    };
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

</body>

</html>