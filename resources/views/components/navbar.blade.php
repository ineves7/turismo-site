<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-start">
        <i class="fa fa-envelope"></i><a href="">site.com.br</a>
        <i class="fab fa-whatsapp"></i> 22 98765 4321
      </div>
      <div class="social-links float-end">
        <a href="" class="facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="" class="instagram"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </section>

    <!-- ======= Header ======= -->
    <header id="header">
      <div class="container">

        <div class="logo float-start">
            <h1 class="text-light"><a href="/"><span>Secretaria de Turismo</span></a></h1>

          <!-- <h1 class="text-light"><a href="index.html"><span>Mamba</span></a></h1> -->
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu float-end d-none d-lg-block">
            <ul>
              <li class="active"><a href="{{route('inicio')}}">Início</a></li>
              <li><a href="{{route('noticias')}}">Notícias</a></li>
              <li><a href="{{route('pontos.turisticos')}}">Pontos Turisticos</a></li>
              <li><a href="{{route('hospedagem')}}">Hospedagem</a></li>
              <!-- <li class="drop-down"><a href="">Drop Down</a>
                <ul>
                  <li><a href="#">Drop Down 1</a></li>
                    <li class="drop-down"><a href="#">Drop Down 2</a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                  <li><a href="#">Drop Down 5</a></li>
                </ul>
              </li> -->
              <li><a href="{{route('contato')}}">Contato</a></li>
            </ul>
          </nav><!-- .nav-menu -->

      </div>
    </header><!-- End Header -->
