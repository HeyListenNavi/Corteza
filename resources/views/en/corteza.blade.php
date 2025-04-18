<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer="" src="https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer="" src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer="" src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&amp;family=Raleway:ital,wght@0,100..900;1,100..900&amp;display=swap">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <title>Corteza</title>
  </head>
  <body class="flex flex-col items-center">
    <!-- Navigation Begin-->
    <nav class="relative w-full flex flex-row justify-between lg:grid lg:grid-cols-[160px_1fr_160px] container items-center p-4 select-none z-10" x-data="{ open: false }" x-on:click.outside="open = false">
      <a class="hidden lg:block justify-self-start font-title font-bold text-4xl text-highlight" href="{{ route('home') }}">Corteza</a> 
      <ul class="lg:w-full w-11/12 lg:p-0 p-4 lg:!flex flex lg:flex-row flex-col lg:static absolute md:top-[150%] top-[120%] left-1/2 lg:translate-0 -translate-x-1/2 z-10 rounded-2xl mdlg!bg-none bg-background text-secondary-highlight lg:divide-none divide-y-2 divide-dashed divide-secondary-highlight/10" x-show="open" x-cloak="" x-transition="">
        <li class="block lg:hidden py-3">
            <a class="font-title font-bold text-4xl text-highlight" href="{{ route('home') }}">Corteza</a>
        </li>
        <div class="lg:flex gap-8 w-full justify-center items-center">
          <li class="py-3 lg:p-0 relative group" x-data="{ open: false }" x-on:click="open = !open" x-on:mouseover="if(window.innerWidth &gt;= 768) open = true" x-on:mouseleave="if(window.innerWidth &gt;= 768) open = false">
            <div class="flex justify-between items-center cursor-pointer"><a href="{{ route('home') }}">Home</a><i class="bx bx-chevron-down bx-sm cursor-pointer transition-transform ease-in" x-bind:class="{ 'transform rotate-180': open }"></i></div>
            <ul class="w-full lg:w-max pl-4 mt-2 lg:p-4 lg:m-0 divide-y-2 divide-dashed lg:absolute top-full left-0 lg:rounded-2xl lg:!bg-background divide-secondary-highlight/10" x-show="open" x-cloak="" x-collapse="">
              <li class="py-3"><a href="{{ route('en_corteza') }}">What is Corteza</a></li>
              <li class="py-3"><a href="{{ route('functions') }}">6 Functions of Corteza</a></li>
            </ul>
          </li>
          <li class="py-3"><a href="{{ route('history') }}">History</a></li>
          <li class="py-3 lg:p-0 relative group" x-data="{ open: false }" x-on:click="open = !open" x-on:mouseover="if(window.innerWidth &gt;= 768) open = true" x-on:mouseleave="if(window.innerWidth &gt;= 768) open = false">
            <div class="flex justify-between items-center cursor-pointer"><a href="{{ route('en_tiny-houses') }}">Tiny Houses</a><i class="bx bx-chevron-down bx-sm cursor-pointer transition-transform ease-in" x-bind:class="{ 'transform rotate-180': open }"></i></div>
            <ul class="w-full lg:w-max pl-4 mt-2 lg:p-4 lg:m-0 divide-y-2 divide-dashed lg:absolute top-full left-0 lg:rounded-2xl lg:!bg-background divide-secondary-highlight/10" x-show="open" x-cloak="" x-collapse="">
              <li class="py-3"><a href="{{ route('benefits') }}">Benefits</a></li>
              <li class="py-3"><a href="{{ route('policies') }}">Policies</a></li>
            </ul>
          </li>
          <li class="py-3"><a href="{{ route('en_floema') }}">Floema</a></li>
          <li class="py-3"><a href="{{ route('en_faq') }}">FAQ</a></li>
        </div>
      </ul>
        <div class="justify-self-end"><a href="{{ route('inicio') }}">ES</a>
        </div>
      <button class="lg:!hidden bx bx-menu bx-md cursor-pointer hover:text-foreground/60 transition-colors ease-in" x-on:click="open = !open"></button>
    </nav>
    <!-- Navigation End-->
    <!-- About Us Begin-->
    <div class="w-full flex flex-col items-stretch content-center flex-wrap p-0 md:p-6 py-8 bg-secondary bg-center bg-no-repeat bg-cover">
      <div class="px-6 md:px-8 py-10 sm:rounded-4xl bg-background bg-center bg-no-repeat bg-cover h-full container">
        <div class="flex flex-col gap-12 md:flex-row" x-data="{ open: false }">
          <div class="flex flex-col gap-7 items-start justify-center sm:max-w-1/2">
            <div class="flex flex-col gap-2 text-left">
              <h1 class="text-3xl sm:text-5xl font-bold text-highlight">About Us</h1>
              <h2 class="text-lg text-foreground-secondary">We care for what matters most... your family</h2>
            </div>
            <div>
              <p class="py-2">Corteza is a Mexican company with the concept of "business as mission" or "purpose-driven business" which is to provide what's necessary to bring quality and elegance to the home, supplying materials for any development project and building warm, safe homes with distinctive style, at an affordable cost and with a minimalist concept.</p>
              <div x-show="open" x-cloak="" x-collapse="">
                <p class="py-2">We primarily provide employment to young people, teaching them various qualities, with the desire to develop in them skills, aptitudes and vocational abilities for their present and future, as well as to financially support them and their families, their desires to study and excel.</p>
                <p class="py-2">A large portion of Corteza's profits go toward student scholarships, families that contribute to society, community needs, and funds to start businesses with the same concept of solving social problems and generating employment with friendly, safe spaces based on principles and values for those who are part of it.</p>
                <div class="border-l-4 border-highlight p-4 mt-4">
                  <p>Our essence is to protect, nurture and sustain what you value most: your home and your family.</p>
                </div>
              </div>
            </div><a class="flex gap-1 items-center justify-center py-2 font-bold text-highlight sm:text-lg text-center select-none hover:text-dark-highlight/90 transition-colors ease-in" href="#" x-on:click="open = !open" x-text="open ? 'Read Less' : 'Read More'">Read More</a>
          </div>
          <div class="h-full w-full min-h-[500px] md:min-h-[600px] rounded-4xl bg-roots bg-cover bg-center"></div>
        </div>
      </div>
    </div>
    <!-- About Us End-->
    <!-- Mission Begin-->
    <div class="w-full flex flex-col items-center bg-highlight text-background">
      <div class="p-6 py-8 container bg-center bg-no-repeat bg-cover ">
        <div class="flex flex-col gap-8 items-center">
          <div class="flex flex-col-reverse gap-2 text-center">
            <h1 class="text-3xl sm:text-5xl font-bold text-background">Protect, Nurture, and Transform</h1>
            <h2 class="text-lg text-secondary">Our Mission</h2>
          </div>
          <div class="flex flex-col gap-6 justify-center w-full sm:max-w-1/2">
            <div class="p-2 border-b w-full  border-light-highlight/60" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none"><i class="bx bxs-shield text-xl text-background"></i>
                  <h1 class="text-background">1. Protect</h1>
                </div><i class="bx bx-chevron-down text-3xl text-background transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-secondary pt-2" x-show="open" x-cloak="" x-collapse="">Safe homes that shelter your family.</div>
            </div>
            <div class="p-2 border-b w-full  border-light-highlight/60" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none"><i class="bx bxs-leaf text-xl text-background"></i>
                  <h1 class="text-background">2. Nurture</h1>
                </div><i class="bx bx-chevron-down text-3xl text-background transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-secondary pt-2" x-show="open" x-cloak="" x-collapse="">Quality materials that last and sustain.</div>
            </div>
            <div class="p-2 border-b w-full  border-light-highlight/60" x-data="{ open: false }">
              <div class="py-4 flex justify-between items-center font-bold cursor-pointer lg:py-0" x-on:click="open = !open" x-on:click.outside="open = false">
                <div class="flex items-center gap-2 select-none"><i class="bx bxs-star text-xl text-background"></i>
                  <h1 class="text-background">3. Transform</h1>
                </div><i class="bx bx-chevron-down text-3xl text-background transition-transform ease-in" x-bind:class="open ? 'bx-rotate-180' : ''"></i>
              </div>
              <div class="text-sm text-secondary pt-2" x-show="open" x-cloak="" x-collapse="">Lives through employment, education and community support.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Mission End-->
    <!-- Footer Begin-->
    <footer class="w-full">
          <div class="w-full flex flex-col items-stretch content-center flex-wrap p-0 sm:py-6 md:p-6 bg-background bg-center bg-no-repeat bg-cover">
            <div class="px-6 md:px-8 py-10 sm:rounded-4xl bg-foreground bg-center bg-no-repeat bg-cover h-full container">
              <div class="flex flex-col gap-8 text-background">
                <div class="flex justify-between items-center flex-col gap-4 md:flex-row"><img class="max-w-62" src="{{ Vite::asset('resources/images/corteza-white.png') }}" alt="Corteza Logo">
                  <div class="flex flex-col gap-4 items-center">
                    <div class="flex gap-2 items-center"><i class="bx bx-envelope bx-sm"></i><span class="font-bold">cortezacym@gmail.com</span></div>
                    <p class="text-tertiary">We provide what's necessary to protect what's most important</p>
                    <div class="flex gap-2 items-center"> <i class="bx bxl-facebook-circle bx-md hover:text-light-highlight transition-colors cursor-pointer"></i><i class="bx bxl-instagram-alt bx-md hover:text-light-highlight transition-colors cursor-pointer"></i><i class="bx bxl-whatsapp bx-md hover:text-light-highlight transition-colors cursor-pointer"></i></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </footer>
    <!-- Footer End-->
  </body>
</html>