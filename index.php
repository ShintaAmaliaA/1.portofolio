<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Shinta Amalia Azhara</title>
    <link href="dist/css/style.css" rel="stylesheet" />
    <script>
      if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
      } else {
        document.documentElement.classList.remove('dark');
      }
    </script>
  </head>
  <body>
    <!-- Header Start -->
    <header class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent">
      <div class="container">
        <div class="relative flex items-center justify-between">
          <div class="px-4">
            <a href="#home" class="block py-6 text-lg font-bold text-primary" style="color: #BC8F8F;">Shinta Amalia Azhara </a>
          </div>
          <div class="flex items-center px-4">
            <button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
              <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
              <span class="hamburger-line transition duration-300 ease-in-out"></span>
              <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
            </button>

            <nav
              id="nav-menu"
              class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg dark:bg-dark dark:shadow-slate-500 lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none lg:dark:bg-transparent"
            >
              <ul class="block lg:flex">
                <li class="group">
                  <a href="#home" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Beranda</a>
                </li>
                <li class="group">
                  <a href="#about" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Tentang Saya</a>
                </li>
                <li class="group">
                  <a href="#portfolio" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Portfolio</a>
                </li>
                <li class="group">
                  <a href="#pelatihan" class="mx-8 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">Pelatihan & Sertifikasi</a>
                </li>
                <li class="mt-3 flex items-center pl-8 lg:mt-0">
                  <div class="flex">
                    <span class="mr-2 text-sm text-slate-500">light</span>
                    <input type="checkbox" class="hidden" id="dark-toggle" />
                    <label for="dark-toggle">
                      <div class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-500 p-1">
                        <div class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-300 ease-in-out"></div>
                      </div>
                    </label>
                    <span class="ml-2 text-sm text-slate-500">dark</span>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Start -->
    <section id="home" class="pt-36 dark:bg-dark">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full self-center px-4 lg:w-1/2">
            <h1 class="text-base font-semibold text-primary md:text-xl" style="color: #BC8F8F;">Halo Semua 👋, saya <span class="mt-1 block text-4xl font-bold text-dark dark:text-white lg:text-5xl">Shinta Amalia Azhara</span></h1>
            <br>
            <h4><b>Surabaya, Indonesia</b></h4>
            <br>
            <a href="mailto:shintaamaliaazhara@gmail.com" class="rounded-full bg-primary py-3 px-8 text-base font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg" style="background-color: #BC8F8F;">Hubungi Saya</a>
          </div>
          <div class="w-full self-end px-4 lg:w-1/2">
            <div class="relative mt-10 lg:right-0 lg:mt-9">
              <img src="dist/images/me.png" alt="shinta" class="relative z-10 mx-auto max-w-full" />
              <span class="absolute bottom-0 left-1/2 -translate-x-1/2 md:scale-125" >
                <svg width="350" height="300" viewBox="0 0 200 150" xmlns="http://www.w3.org/2000/svg">
                  <path
                    fill="#BC8F8F"
                    d="M47.4,-51C59.2,-35.6,65.1,-17.8,63.4,-1.7C61.7,14.5,52.6,28.9,40.8,36.6C28.9,44.2,14.5,45,-2,47C-18.4,49,-36.8,52.1,-45.4,44.5C-53.9,36.8,-52.5,18.4,-51.2,1.3C-49.9,-15.8,-48.7,-31.7,-40.2,-47.1C-31.7,-62.4,-15.8,-77.3,1,-78.3C17.8,-79.2,35.6,-66.3,47.4,-51Z"
                    transform="translate(100 100) scale(1.1)" 
                  />
                </svg>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section id="about" class="pt-36 pb-32 dark:bg-dark">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="mb-10 w-full px-4 lg:w-1/2">
            <h4 class="mb-3 text-lg font-bold uppercase text-primary">Tentang Saya</h4>
            <p>
                Saya merupakan mahasiswi aktif di UPN "Veteran" Jawa Timur jurusan <span class="font-bold text-dark dark:text-white">Sistem Informasi. </span>
                Saya memiliki hobi melihat film dan drama korea.
                Saya memiliki hasrat yang kuat dalam desain antarmuka pengguna dan pengembangan aplikasi web yang menarik. Saya selalu berusaha untuk mengasah keterampilan dan pemahaman saya dalam bahasa pemrograman seperti HTML, CSS, dan JavaScript. 
                Memiliki motivasi tinggi untuk mencapai kesuksesan dimasa depan.
            </p>
          </div>
          <div class="w-full px-4 lg:w-1/2">
            <h3 class="mb-4 text-2xl font-semibold text-dark dark:text-white lg:pt-10 lg:text-3xl">Mari berteman</h3>
            <p class="mb-6 text-base font-medium text-secondary lg:text-lg">
              Mari berteman dan terhubung melalui media sosial. 
            </p>
            <div class="flex items-center">

              <!-- Instagram -->
              <a
                href="https://instagram.com/shintazh"
                target="_blank"
                class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg role="images" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>Instagram</title>
                  <path
                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"
                  />
                </svg>
              </a>

              <!-- Twitter -->
              <a
                href="https://twitter.com/"
                target="_blank"
                class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg role="images" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>Twitter</title>
                  <path
                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"
                  />
                </svg>
              </a>

              <!-- LinkedIn -->
              <a
                href="https://linkedin.com/in/shintaamaliaazhara"
                target="_blank"
                class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg role="images" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>LinkedIn</title>
                  <path
                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"
                  />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Portfolio Section Start -->
    <section id="portfolio" class="bg-slate-100 pt-36 pb-16 dark:bg-slate-800">
      <div class="container">
        <div class="w-full px-4">
          <div class="mx-auto mb-16 max-w-xl text-center">
            <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-5xl" style="color: #BC8F8F;">Portofolio</h2>
          </div>
        </div>

        <div class="flex w-full flex-wrap justify-center px-4 xl:mx-auto xl:w-10/12">
          <div class="mb-12 p-4 md:w-1/2">
            <div class="overflow-hidden rounded-md shadow-md">
              <img src="dist/images/portfolio/2.png" alt="Landing Page" width="w-full" />
            </div>
            <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Website Healty.Me</h3>
            <p class="text-base font-medium text-secondary">Website Healty.Me merupakan projek uts dari matakuliah Pemrograman Web dimana dalam 
              website tersebut berisi artikel dan video serta tips untuk kesehatan.
            </p>
          </div>
          <div class="mb-12 p-4 md:w-1/2">
            <div class="overflow-hidden rounded-md shadow-md">
              <img src="dist/images/portfolio/3.png" alt="E-Commerce" width="w-full" />
            </div>
            <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Website JokiINKamu</h3>
            <p class="text-base font-medium text-secondary">Website JokiINKamu berisikan jasa untuk mengerjakan tugas mulai dari smp hingga kuliah</p>
          </div>
          <div class="mb-12 p-4 md:w-1/2">
            <div class="overflow-hidden rounded-md shadow-md">
              <img src="dist/images/portfolio/1.png" alt="Technical Documentation" width="w-full" />
            </div>
            <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Website ScarWash</h3>
            <p class="text-base font-medium text-secondary">Website ScarWash merupakan tugas akhir dari pelatihan YesTech yang berisikan alamat store, blog, serta promo-promo yang menarik</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio Section End -->

    <!-- Pelatihan & Sertifikasi Section Start -->
    <section id="pelatihan" class="bg-slate-800 pt-36 pb-32 dark:bg-slate-300">
      <div class="container">
        <div class="w-full px-4">
          <div class="mx-auto mb-16 text-center">
            <h2 class="mb-4 text-3xl font-bold text-white dark:text-dark sm:text-4xl lg:text-5xl">Pelatihan & Sertifikasi </h2>
          </div>
        </div>

        <div class="flex w-full flex-wrap justify-center px-4 xl:mx-auto xl:w-10/12">
          <div class="mb-12 p-4 md:w-1/2">
            <div class="overflow-hidden rounded-md shadow-md">
              <img src="dist/images/pelatihan/1.jpg" alt="WIT" width="w-full" />
            </div>
            <h3 class="mt-5 mb-3 text-xl font-semibold text-white dark:text-white">WIT (Work In Tech) Bootcam Jun 2023</h3>
          </div>
          <div class="mb-12 p-4 md:w-1/2">
            <div class="overflow-hidden rounded-md shadow-md">
              <img src="dist/images/pelatihan/2.jpg" alt="WIT" width="w-full" />
            </div>
            <h3 class="mt-5 mb-3 text-xl font-semibold text-white dark:text-white">WIT (Women In Tech: Python and Cybersecurity) Mei 2023 – Jun 2023</h3>
          </div>
          <div class="mb-12 p-4 md:w-1/2">
            <div class="overflow-hidden rounded-md shadow-md">
              <img src="dist/images/pelatihan/yestech.jpg" alt="YesTech" width="w-full" />
            </div>
            <h3 class="mt-5 mb-3 text-xl font-semibold text-white dark:text-white">YES TECH - WEB PROGRAMMING Jul 2023 – Okt 2023</h3>
          </div>
        </div>
      </div>
    </section>
    <!-- Pelatihan & sertifikasi Section End -->



    <!-- Footer Start -->
    <footer class="bg-dark pt-24 pb-12">
      <div class="container">
        <div class="w-full border-t border-slate-700 pt-10">
          <div class="mb-5 flex items-center justify-center">

            <!-- Instagram -->
            <a
              href="https://instagram.com/shintazh"
              target="_blank"
              class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
            >
              <svg role="images" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Instagram</title>
                <path
                  d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"
                />
              </svg>
            </a>

            <!-- Twitter -->
            <a
              href="https://twitter.com/"
              target="_blank"
              class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
            >
              <svg role="images" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Twitter</title>
                <path
                  d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"
                />
              </svg>
            </a>

            <!-- LinkedIn -->
            <a
              href="https://linkedin.com/in/shintaamaliaazhara
              target="_blank"
              class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
            >
              <svg role="images" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>LinkedIn</title>
                <path
                  d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"
                />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer End -->

    <!-- Back to top Start -->
    <a href="#home" class="fixed bottom-4 right-4 z-[9999] hidden h-14 w-14 items-center justify-center rounded-full bg-primary p-4 hover:animate-pulse" id="to-top">
      <span class="mt-2 block h-5 w-5 rotate-45 border-t-2 border-l-2"></span>
    </a>
    <!-- Back to top End -->

    <script src="dist/js/script.js"></script>
  </body>
</html>
