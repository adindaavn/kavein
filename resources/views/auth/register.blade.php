@include('template.header')

<section class="h-screen w-full flex flex-col items-center justify-center">
  <a href="{{ route('home') }}" class="text-4xl lg:text-5xl text-secondary font-bold mb-5">
    kave<span class="text-primary">in</span>
  </a>
  <div class="border border-primary rounded-xl w-3/4 md:w-1/2 lg:w-1/4 p-5">
    <form action="{{ route('register-proses') }}" method="POST" class="flex flex-col gap-3">
      @csrf
      <label for="name" class="font-semibold text-primary"> Name </label>
      <input type="text" class="text-gray-800 rounded-xl outline-0 py-1 px-2 ring-1 ring-secondary focus:ring-2 focus:ring-secondary" name="name" id="name" placeholder="Name" value="{{ Session::get('name') }}" />
      @error('name')
      <p class="text-red-700 text-xs">{{ $message }}</p>
      @enderror

      <label for="email" class="font-semibold text-primary"> Email </label>
      <input type="email" class="text-gray-800 rounded-xl outline-0 py-1 px-2 ring-1 ring-secondary focus:ring-2 focus:ring-secondary" name="email" id="email" placeholder="Email" value="{{ Session::get('email') }}" />
      @error('email')
      <p class="text-red-700 text-xs">{{ $message }}</p>
      @enderror

      <label for="password" class="font-semibold text-primary"> Password </label>
      <input type="password" class="text-gray-800 rounded-xl outline-0 py-1 px-2 ring-1 ring-secondary focus:ring-2 focus:ring-secondary" name="password" id="password" placeholder="Password" />
      @error('password')
      <p class="text-red-700 text-xs">{{ $message }}</p>
      @enderror

      <div class="flex flex-row justify-between items-center">
        <a href="{{ route('login') }}" class="text-xs text-secondary">i have an account</a>
        <button type="submit" class="py-1 bg-secondary rounded-full px-3 text-sm text-white focus:ring-1 focus:ring-offset-1 focus:ring-tertiary hover:bg-tertiary">
          Sign In
        </button>
      </div>
    </form>
  </div>
</section>
</body>
</html>