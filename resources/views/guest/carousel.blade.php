

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
   