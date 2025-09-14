      @extends('frontend.layout.master')

      @section('content')
          <!-- About Us & Founder Section -->
        @foreach($about as $ab) 
          <section id="about-intro" class="container mx-auto mt-16 px-6 mb-16">
              <h2 class="section-heading text-center mb-12">{{$ab->title}}</h2>
              <div class="grid md:grid-cols-2 gap-12 items-center">
             <div class="mb-6">
    @if ($ab->image)
        <img src="{{ asset('storage/' . $ab->image) }}" 
             alt="{{ $ab->title }}" 
            class="rounded-xl shadow-lg mb-6 w-[600px] h-[600px] object-cover"
            >
    @else
        <img src="https://via.placeholder.com/600x400?text=No+Image" 
             alt="No Image" 
             class="rounded-xl shadow-lg mb-6 w-[600px] h-[600px] object-cover">
    @endif
</div>
                  <div>
                      <p class="text-lg text-gray-700 mb-6">
                         {!! $ab->content !!}
                      </p>
                      
                  </div>
              </div>
          </section>
        @endforeach

          <!-- Our History Section -->
          <section id="history" class="bg-white py-16">
              <div class="container mx-auto px-6">
                  <h2 class="section-heading text-center mb-12">Our History & Milestones</h2>
                  <div class="grid md:grid-cols-3 gap-8">
                      @forEach($our_story as $ours) 
                   
                        <div class="card p-6">
                          <h3 class="text-xl font-bold mb-2 text-blue-800">{{$ours->year}}</h3>
                          <p class="text-gray-600">
                              <b>{{$ours->title}}</b><br>
                              {!! $ours->content !!}
                          </p>
                      </div>
                      @endforeach
                  </div>
              </div>
          </section>

          <!-- New Singapore Section -->
          <section id="singapore-section" class="container mx-auto px-6 py-16">
              <h2 class="section-heading text-center mb-12">Singapore</h2>

           @foreach($oursContry as $cont)
              
              <div class="grid md:grid-cols-2 gap-12 items-center mb-12">
                  <div>
                      <h3 class="text-2xl font-bold text-gray-800 mb-4">{{$cont->title}}</h3>
                      <p class="text-lg text-gray-700">
                        {!! $cont->content !!}
                      </p>
                  </div>
                  <div>
                      <!-- Yeni şəkil yer tutucu ölçülərinə uyğun olaraq əlavə edildi -->
@if ($cont->image)
                <img src="{{ asset('storage/' . $cont->image) }}" 
                     alt="{{ $cont->title }}" 
                     class="rounded-xl shadow-md mb-3 w-[400px] h-[300px] object-cover mx-auto">
            @else
                <img src="https://via.placeholder.com/400x300?text=No+Image" 
                     alt="No Image" 
                     class="rounded-xl shadow-md mb-3 w-[400px] h-[300px] object-cover mx-auto">
            @endif
                  </div>
              </div>
           @endforeach

          </section>

          <!-- Overseas Expansion & Mr. Ray Teng Section -->
          <section id="expansion" class="bg-white py-16">
              <div class="container mx-auto px-6">
                  <h2 class="section-heading text-center mb-8">Overseas Expansion</h2>
                  <div class="grid md:grid-cols-2 gap-12 items-center">
                      <div>
                          <p class="text-lg text-gray-700 mb-6">
                              Tenglee has built a strong reputation beyond Singapore, successfully delivering projects
                              across Asia, the Middle East, and the Caspian region. The company has played a key role in
                              integration and vessel construction projects in China and has carried out critical marine
                              works in the Philippines—further strengthening its position as a trusted international marine
                              and offshore engineering partner. Tenglee's overseas achievements reflect its global
                              reliability, adaptability, and engineering excellence.
                          </p>
                          <div class="grid grid-cols-2 gap-4">
                              <div>
                                  <!-- Resim boyutları yer tutucu boyutlarına (300x200) göre ayarlandı -->

                                  <img src="https://i.ibb.co/C39knCKx/16.jpg" alt="Photo of Mr. Ray Teng 1"
                                      class="rounded-xl shadow-lg mb-2 w-[300px] h-[200px] object-cover">
                                  <p class="text-sm text-gray-600 text-center"><b>Ray Teng</b><br>Director of
                                      Tenglee<br><b>Juan A. Edghil</b><br>Minister of Public Works of Guyana<br><b>Dato'
                                          Roslan Tan Sri Abdul Rahman</b><br>Chief Secretary of the Ministry of Tourism,
                                      Arts and Culture of Malaysia</p>
                              </div>
                              <div>
                                  <!-- Resim boyutları yer tutucu boyutlarına (300x200) göre ayarlandı -->

                                  <img src="https://i.ibb.co/5CQCNQK/15.jpg" alt="Photo of Mr. Ray Teng 2"
                                      class="rounded-xl shadow-lg mb-2 w-[300px] h-[200px] object-cover">
                                  <p class="text-sm text-gray-600 text-center"><b>Renat Bekturov, CFA</b> <br>Governor of
                                      the Astana International Financial Centre (AIFC) <br><b>Ray Teng</b> <br>Director of
                                      Tenglee</p>
                              </div>
                          </div>
                      </div>
                      <div>
                          <h2 class="section-heading">Azerbaijan</h2>
                          <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                              <img src="https://i.ibb.co/6jYnD25/image.png" alt="Baku Shipyard"
                                  class="rounded-xl shadow-lg w-full h-32 object-cover">
                              <img src="https://i.ibb.co/1GLyH0sw/image.png" alt="Vessel Construction in Baku"
                                  class="rounded-xl shadow-lg w-full h-32 object-cover">
                              <img src="https://i.ibb.co/XZd7dBP9/image.png" alt="BP Project in Caspian Sea"
                                  class="rounded-xl shadow-lg w-full h-32 object-cover">
                          </div>
                          <ul class="space-y-6 text-gray-700">
                              <li>
                                  <p class="font-bold">Establishment of Baku Shipyard:</p>
                                  <p>Tenglee played a pivotal role in the establishment of the Baku Shipyard, a monumental
                                      project that has become a key part of the region's marine infrastructure.</p>
                              </li>
                              <li>
                                  <p class="font-bold">Tenglee in Azerbaijan:</p>
                                  <p>Our operations in Azerbaijan have contributed to the development of the Middle Corridor
                                      in the Caspian region, including the construction of specialized vessels like RoPax
                                      and Tankers.</p>
                              </li>
                              <li>
                                  <p class="font-bold">Key Success in Azerbaijan:</p>
                                  <p>A major success was our work with BP on a semi-submersible and a subsea construction
                                      vessel, showcasing our ability to handle complex and high-stakes projects in the
                                      Caspian Sea.</p>
                              </li>
                              <li>
                                  <p class="font-bold">Nationalization:</p>
                                  <p>We are committed to the nationalization of skills and have worked closely with local
                                      teams, ensuring the transfer of knowledge and expertise in shipbuilding and marine
                                      engineering to the Azerbaijani workforce.</p>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </section>

          <!-- Global Footprint Section -->
          <section id="global-footprint" class="py-16 bg-gray-100">
              <div class="container mx-auto px-6 text-center">
                  <h2 class="section-heading mb-8">Global Footprint</h2>
                  <p class="text-lg text-gray-700 mb-8 max-w-2xl mx-auto">
                      Tenglee has a strong global presence, with key projects and operations in countries around the world.
                  </p>
                  <!-- Tam eni tutacaq yeni şəkil buraya əlavə edildi -->
                  <img src="https://i.ibb.co/kgz9gCjy/image.png" alt="Tenglee's global footprint"
                      class="rounded-xl shadow-lg w-full mt-8 object-cover">
              </div>
          </section>
      @endsection
