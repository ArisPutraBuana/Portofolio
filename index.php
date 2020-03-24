<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <!-- My CSS -->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aris Putra Buana</title>
</head>

<body id="home" class="scrollspy">
  <!-- Navbar-->
  <div class="navbar-fixed">
    <nav class="blue darken-2">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo">Aris PB</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger">
            <i class="material-icons">menu</i></a>

          <ul class="right hide-on-med-and-down">
            <li><a href="#about">About</a></li>
            <li><a href="#skill">Hard Skill</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!--Sidenav-->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="">About</a></li>
    <li><a href="">Hard Skill</a></li>
    <li><a href="">Portfolio</a></li>
    <li><a href="">Contact</a></li>
  </ul>
  <!--Slider-->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/slider/2.jpg"> <!-- random image -->
      </li>
      <li>
        <img src="img/slider/abd.jpg"> <!-- random image -->
      </li>
    </ul>
  </div><br>

  <!--  About Us  -->
  <section class="about scrollspy mt-2" id="about">
    <div class="container">
      <div class="row">
        <h3 class="center light grey-text text-darken-3">About</h3><br>
          <p>Saya, Lahir di Tempirai ( Palembang ), 24 April 1996, umur 23 tahun. seorang Junior Programmer, Digital Marketer, <br>Copy Writer, dan juga Motivator. Pada tahun 2017, saya terpilih dan berhak mengikuti pelatihan bisnis online di Google Indonesia.Tahun 2018,saya salah satu pemuda yang terpilih mengikuti pelatihan Wirausaha tingkat Nasional <br> di Kementerian Pemuda dan Olaraga Republik Indonesia.

Tahun 2019 ,saya mendapat gelar non akademis sebagai seorang Motivator.Saya sering mengikuti acara pelatihan,kursus IT dan seminar di berbagai kota,khususnya wilayah Jabodetabek.<br>diantaranya event Google di Tokopedia dan event di Bukalapak. Dia juga sering mengikuti lomba sebagai penulis tingkat Nasional di beberapa Universitas di Indonesia.</p>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section class="services grey lighten-3 scrollspy" id="skill">
    <div class="container">
      <div class="row">
        <h3 class="light center grey-text text-darken-3">Hard Skill</h3>
        <div class="col m4 s12">
          <div class="card-panel center">
            <i class="material-icons medium">desktop_windows</i>
            <h5>Web Development</h5>
          </div>
        </div>
        <div class="col m4 s12">
          <div class="card-panel center">
            <i class="material-icons medium">language</i>
            <h5>Motivator</h5>
          </div>
        </div>
        <div class="col m4 s12">
          <div class="card-panel center">
            <i class="material-icons medium">lightbulb_outline</i>
            <h5>Copy Writer</h5>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio -->
  <section class="portfolio scrollspy" id="portfolio">
    <div class="container">
      <h3 class="light center grey-text text-darken-3">Portfolio</h3><br>

      <div class="row">
        <div class="col m6 s12">
          <caption></caption>
          <img src="img/slider/ae.jpg" class="responsive-img materialboxed">
        </div>
        <div class="col m6 s12">
          <caption></caption>
          <img src="img/slider/2.jpg" class="responsive-img materialboxed">
        </div>
      </div>

      <div class="row">
        <div class="col m4 s12">
          <img src="img/slider/abc.jpg" class="responsive-img materialboxed">
        </div>
        <div class="col m4 s12">
          <img src="img/slider/abd.jpg" class="responsive-img materialboxed">
        </div>
        <div class="col m4 s12">
          <img src="img/slider/abf.jpg" class="responsive-img materialboxed">
        </div>
      </div>

      <div class="row">
        <div class="col m6 s12">
          <caption></caption>
          <img src="img/slider/5.png" class="responsive-img materialboxed">
        </div>
        <div class="col m6 s12">
          <caption></caption>
          <img src="img/slider/6.jpg" class="responsive-img materialboxed">
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Us -->
  <section id="contact" class="contact grey lighten-3 scrollspy">
    <div class="container">
      <h3 class="light center grey-text text-darken-3">Contact</h3>
      <div class="row">
        <div class="col m5 s12">
          <div class="card-panel blue darken-2 center white-text">
            <i class="material-icons">email</i>
            <h5>Contact</h5>
            <p>Silakan kirim pesan Anda, Pesan Anda akan segera saya respon</p>
          </div>
          <ul class="collection with-header">
            <li class="collection-header center">
              <h4>Alamat</h4>
            </li>
            <li class="collection-item">Aris Putra Buana</li>
            <li class="collection-item">Kp.Gebang RT:05 RW:03 Kel.Uwung Jaya Kec.Cibodas Kota Tangerang,Banten</li>
            <li class="collection-item">West Java, Indonesia</li>
          </ul>
        </div>
        <div class="col m7 s12">
          <form action="" method="post" enctype="multipart/form-data" >
            <div class="card-panel">
              <h5>Please Fill this form</h5>
              <div class="input-field">
                <input type="text" name="nama" id="nama" class="validate" required="">
                <label for="nama"> Nama</label>
                </input>
              </div>
              <div class="input-field">
                <input type="email" name="email" id="email" class="validate">
                <label for="email"> Email</label>
                </input>
              </div>
              <div class="input-field">
                <input type="text" name="telepon" id="telepon">
                <label for="telepon">No.Telp</label>
                </input>
              </div>
              <div class="input-field">
                <textarea name="pesan" id="pesan" class="materialize-textarea"></textarea>
                <label for="pesan">Pesan</label>
                </input>
              </div>
              <button type="submit" name="submit" class="btn blue darken-2">Kirim</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <footer class="blue darken-2 white-text center">
    <p class="flow-text">Aris Putra Buana © <?= date("Y"); ?></p>
  </footer>



  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript">
    const sidenav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sidenav);

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 600,
      interval: 3000
    });


    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);

    const materialbox = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(materialbox);

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
      scrollOffset: 10
    });
  </script>

</body>
</html>