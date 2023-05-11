@extends("layouts.app")

@section("title", "Template")

@section("content")

  {{-- hero1 --}}
  <section class="h-screen relative">

    <img src="img/hero.jpg" alt="wedding" class="h-full w-full object-cover">

    <div class="absolute max-[320px]:top-10 w-full text-center top-11 ">
      <div class="flex justify-center items-center">
        <span class="h-[1px] w-1/4 block bg-white"></span>
        <div class="text-white mx-4 text-2xl sm:text-4xl">
          <i class="fas fa-solid fa-heart"></i>
        </div>
        <span class="h-[1px] w-1/4 block bg-white"></span>
      </div>

      <h1 class="font-sans text-white max-[320px]:text-xl mt-5 text-2xl sm:text-4xl md:text-2xl">THE WEDDING</h1>
      <h3 class="font-abril max-[320px]:text-5xl text-white text-8xl md:text-7xl mt-3">ANDY</h3>
      <h3 class="font-abril max-[320px]:text-5xl text-white text-8xl md:text-7xl">&</h3>
      <h3 class="font-abril max-[320px]:text-5xl text-white text-8xl md:text-7xl">ZHEA</h3>
      <h3 class="font-sans text-white max-[320px]:text-xl mt-3 text-2xl sm:text-4xl md:text-2xl">Sunday, 12 Desember 2020</h3>

      <button class="font-sans text-white border-2 border-white px-7 py-1 mt-3 rounded-lg sm:text-2xl sm:hover:bg-white sm:hover:text-black transition duration-300 md:text-base">SAVE THE DATE</button>

      <div class="flex justify-center items-center mt-7">
        <span class="h-[1px] w-1/4 block bg-white"></span>
        <div class="text-white mx-4 text-2xl sm:text-4xl">
          <i class="fas fa-solid fa-heart"></i>
        </div>
        <span class="h-[1px] w-1/4 block bg-white"></span>
      </div>
    </div>

    
  </section>
  {{-- hero1 --}}

  {{-- intro --}}
  <section class="h-fit">

    <h3 class="font-abril text-center text-primary mt-5 text-2xl sm:text-4xl">Meet the happy couple</h3>
    <h3 class="font-sans text-center text-primary sm:text-xl">Get to know them better</h3>

    <div class="mt-3">
      <div class="flex flex-col justify-center items-center lg:flex-row">
        <div class="w-4/5 max-w-[400px] h-[600px] bg-bg1 text-center flex flex-col justify-center">
          <h3 class="font-abril text-5xl">Andy Hermawan</h3>

          <div class="flex justify-center items-center mt-5">
            <span class="h-[1px] w-1/4 block bg-primary"></span>
            <div class="text-primary mx-4 text-2xl sm:text-4xl md:text-2xl">
              <i class="fas fa-solid fa-heart"></i>
            </div>
            <span class="h-[1px] w-1/4 block bg-primary"></span>
          </div>

          <h3 class="font-serif font-bold mt-5">Son of</h3>

          <div class="font-serif flex justify-center">
            <h3 class="mr-1">Mr. Father Name</h3>  
            &
            <h3 class="ml-1"> Mrs. Mother Name</h3>
          </div>

          <div class="flex justify-evenly mt-5">
            <a href="">
              <div class="text-white text-2xl bg-primary w-12 h-12 flex justify-center items-center rounded-full">
                <i class="fas fa-brands fa-facebook"></i>
              </div>
            </a>

            <a href="">
              <div class="text-white text-2xl bg-primary w-12 h-12 flex justify-center items-center rounded-full">
                <i class="fas fa-brands fa-twitter"></i>
              </div>
            </a>

            <a href="">
              <div class="text-white text-2xl bg-primary w-12 h-12 flex justify-center items-center rounded-full">
                <i class="fas fa-brands fa-whatsapp"></i>
              </div>
            </a>

            <a href="">
              <div class="text-white text-2xl bg-primary w-12 h-12 flex justify-center items-center rounded-full">
                <i class="fas fa-brands fa-instagram"></i>
              </div>
            </a>
          </div>

        </div>

        <img src="img/groom.jpg" alt="wedding-male" class="w-4/5 max-w-[400px] h-[600px] object-cover">
      </div>

      <div class="flex flex-col justify-center items-center lg:flex-row">
        <img src="img/bride.jpg" alt="wedding-female" class="w-4/5 max-w-[400px] h-[600px] object-cover">

        <div class="w-4/5 max-w-[400px] h-[600px] bg-bg1 text-center flex flex-col justify-center">
          <h3 class="font-abril text-5xl">Fauziah Ratnasari</h3>

          <div class="flex justify-center items-center mt-5">
            <span class="h-[1px] w-1/4 block bg-primary"></span>
            <div class="text-primary mx-4 text-2xl sm:text-4xl md:text-2xl">
              <i class="fas fa-solid fa-heart"></i>
            </div>
            <span class="h-[1px] w-1/4 block bg-primary"></span>
          </div>

          <h3 class="font-serif font-bold mt-5">Daughter of</h3>

          <div class="font-serif flex justify-center">
            <h3 class="mr-1">Mr. Father Name</h3>  
            &
            <h3 class="ml-1"> Mrs. Mother Name</h3>
          </div>

          <div class="flex justify-evenly mt-5">
            <a href="">
              <div class="text-white text-2xl bg-primary w-12 h-12 flex justify-center items-center rounded-full">
                <i class="fas fa-brands fa-facebook"></i>
              </div>
            </a>

            <a href="">
              <div class="text-white text-2xl bg-primary w-12 h-12 flex justify-center items-center rounded-full">
                <i class="fas fa-brands fa-twitter"></i>
              </div>
            </a>

            <a href="">
              <div class="text-white text-2xl bg-primary w-12 h-12 flex justify-center items-center rounded-full">
                <i class="fas fa-brands fa-whatsapp"></i>
              </div>
            </a>

            <a href="">
              <div class="text-white text-2xl bg-primary w-12 h-12 flex justify-center items-center rounded-full">
                <i class="fas fa-brands fa-instagram"></i>
              </div>
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>
  {{-- intro --}}

  {{-- hero2 --}}
  <section class="h-screen relative">

    <img src="img/hero2.jpg" alt="wedding" class="h-full w-full object-cover mt-7">

    <div class="absolute top-40 left-10 text-white">

      <div class="w-4/5">
        <h3 class="font-sans text-3xl">OUR STORY</h3>
        <h3 class="font-abril text-5xl">Watch our best moments</h3>

        <div class="flex justify-center items-center ">
          <span class="h-[1px] w-1/2 block bg-white"></span>
          <div class="text-white mx-4 text-2xl sm:text-4xl">
            <i class="fas fa-solid fa-heart"></i>
          </div>
          <span class="h-[1px] w-1/2 block bg-white"></span>
        </div>
      </div>

      <div class="w-fit mr-2 border-[10px] border-white rounded-md">
        <video width="320" height="240" controls>
          <source src="vid/video.mp4">
        Your browser does not support the video tag.
        </video>
      </div>
      
    </div>

  </section>
  {{-- hero2 --}}
@endsection