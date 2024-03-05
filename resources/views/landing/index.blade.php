@include('template.header')
@extends('template.navbar')

@section('content')

<main>
  <section class="h-screen w-full flex items-center justify-center">
    <p class="text-4xl md:text-5xl lg:text-6xl font-bold text-center fixed w-4/5">
      Sip a drink of kavein means
      <span class="text-secondary">fully recharged energy bar!</span>
    </p>
    <img src="{{ asset('assets') }}/img/hero-coffee.png" class="relative size-72 sm:size-80 lg:size-96" alt="hero-coffee" />
  </section>
  <section class="w-full bg-white relative">
    <section class="flex flex-col md:flex-row w-full" id="products">
      <a href="{{ route('menu') }}" class="flex w-full group justify-center items-center p-4 h-72 hover:bg-secondary transition">
        <div class="absolute group-hover:relative">
          <img src="{{ asset('assets') }}/img/coffee-2.png" class="size-72 md:size-64 lg:size-72" alt="" />
        </div>
        <p class="text-6xl md:text-4xl lg:text-6xl font-bold text-center group-hover:absolute">
          Coffee
        </p>
      </a>
      <a href="{{ route('beverages') }}" class="flex w-full group justify-center items-center p-4 h-72 hover:bg-secondary transition">
        <div class="absolute group-hover:relative">
          <img src="{{ asset('assets') }}/img/coffee-3.png" class="size-72 md:size-64 lg:size-72" alt="" />
        </div>
        <p class="text-6xl md:text-4xl lg:text-6xl font-bold text-center group-hover:absolute">
          Beverages
        </p>
      </a>
      <a href="{{ route('dessert') }}" class="flex w-full group justify-center items-center p-4 h-72 hover:bg-secondary transition">
        <div class="absolute group-hover:relative">
          <img src="{{ asset('assets') }}/img/coffee-4.png" class="size-72 md:size-64 lg:size-72" alt="" />
        </div>
        <p class="text-6xl md:text-4xl lg:text-6xl font-bold text-center group-hover:absolute">
          Dessert
        </p>
      </a>
    </section>
    <section class="w-full text-monse flex flex-col sm:flex-row items-center justify-center gap-8 py-10 px-5" id="about">
      <div class="w-full sm:w-1/2">
        <img src="{{ asset('assets') }}/img/about.png" alt="" />
      </div>
      <div class="w-full sm:w-1/3 flex flex-col justify-center h-full px-7 sm:px-auto py-5">
        <div class="mb-8">
          <p class="text-secondary text-sm">about us,</p>
          <p class="text-5xl lg:text-6xl text-secondary italic font-bold">
            kave<span class="text-primary">in</span>
          </p>
        </div>

        <div class="space-y-4 text-sm lg:text-md mb-8">
          <p>
            Welcome to
            <span class="text-md lg:text-lg"><span class="text-secondary">kave</span>in</span>, where every cup is a celebration of the exhilarating power of
            caffeine.
          </p>
          <p>
            Step into our cozy and inviting space, where the aroma of
            freshly roasted beans fills the air, and the sound of expertly
            brewed coffee creates a symphony for the senses.
          </p>

          <p>
            Inspired by the energizing essence of caffeine,
            <span class="text-md lg:text-lg"><span class="text-secondary">kave</span>in</span>
            is not just a coffee shop; it's a haven for coffee aficionados
            and caffeine enthusiasts alike.
          </p>
        </div>

        <p class="text-lg text-right">
          2023,
          <span class="italic"><span class="text-secondary">kave</span>in</span>
        </p>
      </div>
    </section>
    <section id="contact" class="w-full flex flex-col p-8">
      <p class="text-5xl sm:text-6xl text-center sm:text-left font-semibold border-b border-primary">
        Contact Us
      </p>
      <div class="flex flex-col md:flex-row">
        <div class="w-2/3"></div>
        <div class="p-6 border-secondary space-y-6">
          <p>
            E-mail <br />
            kavein@caffe.in
          </p>
          <p>
            Phone <br />
            +49 5191 5818 6463
          </p>
          <p>
            Address <br />
            27D Scott Street <br />
            Decelis City, Luna Belle <br />
            915884
          </p>
        </div>
      </div>
    </section>
  </section>
</main>

@endsection