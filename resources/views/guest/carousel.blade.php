 <header class="intro">
      <!-- Intro Header-->
      <div class="intro-body">
        <h2>Deler <span class="bold">Mobil</span> Honda
        </h2>
        <h1>Honpas<span class="badge hidden-sm hidden-xs">Laravel</span></h1>
        <div data-wow-delay="1s" class="scroll-btn wow fadeInDown"><a href="#about" class="page-scroll"><span class="mouse"><span class="weel"><span></span></span></span></a></div>
      </div>
    </header>

<script>
      $('body').vegas({
          delay: 7000,
          timer: false,
          transitionDuration: 2000,
          slides: [
          @foreach($mobil as $data)
              {src: '/img/{{$data->cover}}'},
          @endforeach              
          ],
          transition: ['swirlRight', 'swirlLeft'],
          animation: ['kenburns']
      });
    </script>
   @yield('minta')