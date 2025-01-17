<?php
        include 'koneksi.php';
        $query = "SELECT * FROM developers";
        $query_sql = mysqli_query($conn, $query);
        $tampil = mysqli_fetch_array($query_sql);
    ?> 

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="load.css">
    <link
      href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <script>
      tailwind.config = {
        theme: {
          container: {
            center: true,
            padding: {
              DEFAULT: "1rem",
              sm: "2rem",
              lg: "4rem",
              xl: "5rem",
              "2xl": "6rem",
            },
          },
          extend: {
            colors: {
              clifford: "#da373d",
              // primary: "#ED3EF7",
              primary: "#ad49e1",
            },
          },
        },
        plugins: ["prettier-plugin-tailwindcss"]
      };
    </script>
  </head>
  <body class="bg-[#040107] font-[montserrat]">
      <div class="loader h-screen flex items-center justify-center"></div>
    <div class="content">
      <nav class="bg-[#040107] md:w-full top-0 left-0 right-0 z-50" id="navbar">
        <div
          class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
        >
          <a
            href="#"
            class="flex items-center space-x-3 rtl:space-x-reverse"
          >
            <img src="assets/<?= $tampil['logo'] ?>" alt="Logo" class="h-10 w-10" /> 
            <span
              class="self-center text-2xl font-semibold whitespace-nowrap text-white"
              >Fana <span class="text-primary">ardi</span></span
            >
          </a>
          <button
            data-collapse-toggle="navbar-default"
            type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default"
            aria-expanded="false"
          >
            <span class="sr-only">Open main menu</span>
            <svg
              class="w-5 h-5"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 17 14"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M1 1h15M1 7h15M1 13h15"
              />
            </svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
              class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:bg-transparent md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0"
            >
              <li>
                <a
                  href="#"
                  class="block py-2 px-2 text-gray-900 rounded md:hover:bg-transparent hover:bg-gray-100 md:text-gray-50 transition duration-300 ease-in-out"
                  aria-current="page"
                  >Home</a
                >
              </li>
              <li>
                <a
                  href="#about"
                  class="block py-2 px-2 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-primary md:text-gray-50 transition duration-300 ease-in-out"
                  >About</a
                >
              </li>
              <li>
                <a
                  href="#skils"
                  class="block py-2 px-2 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-primary md:text-gray-50 transition duration-300 ease-in-out"
                  >Skils</a
                >
              </li>
              <li>
                <a
                  href="#portfolio"
                  class="block py-2 px-2 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-primary md:text-gray-50 transition duration-300 ease-in-out"
                  >portfolio</a
                >
              </li>
              <li>
                <a
                  href="#service"
                  class="block py-2 px-2 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-primary md:text-gray-50 transition duration-300 ease-in-out"
                  >Service</a
                >
              </li>
              <li class="mt-2">
                <a
                  href="#contact"
                  class="text-gray-800 md:text-gray-50 bg-transparent border border-primary hover:bg-primary font-medium text-sm px-5 py-2.5 me-2 mb-2 transition-all duration-300"
                >
                  Contact me
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <section class="h-screen md:content-center" id="home">
      <div
        class="container flex-wrap md:flex md:items-center flex flex-col-reverse md:flex-row"
      >
        <!-- decription home -->
        <div class="w-full py-6 md:w-1/2">
          <h1 class="font-bold text-3xl text-gray-100 mb-3 md:text-5xl">
            hi,👋im <?= $tampil['name'] ?>
          </h1>
          <h3 class="font-bold text-xl text-gray-100 mb-2">
            im a <span class="text-primary" id="typed"></span>
          </h3>
          <p class="text-gray-400 text-base mb-2">
            <?= $tampil['bio'] ?>
          </p>
          <div class="flex">
            <a
              href="#portfolio"
              class="text-white bg-primary hover:bg-transparent hover:border hover:border-primary font-medium text-sm px-5 py-2.5 me-2 mb-2 transition-all duration-300"
            >
              View portfolio
            </a>
            <!-- link sosmed -->
            <div class="flex items-center ms-3">
              <!-- whatsapp -->
              <a
                href="https:/tiktok.com/fanakurniawan2"
                target="_blank"
                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border hover:border-primary hover:bg-primary hover:text-white transition-transform transform hover:scale-110"
              >
                <svg
                  fill="#080707"
                  width="20"
                  height="203px"
                  viewBox="0 0 16.00 16.00"
                  xmlns="http://www.w3.org/2000/svg"
                  class="fill-slate-50"
                >
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g
                    id="SVGRepo_tracerCarrier"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></g>
                  <g id="SVGRepo_iconCarrier">
                    <path
                      d="M11.42 9.49c-.19-.09-1.1-.54-1.27-.61s-.29-.09-.42.1-.48.6-.59.73-.21.14-.4 0a5.13 5.13 0 0 1-1.49-.92 5.25 5.25 0 0 1-1-1.29c-.11-.18 0-.28.08-.38s.18-.21.28-.32a1.39 1.39 0 0 0 .18-.31.38.38 0 0 0 0-.33c0-.09-.42-1-.58-1.37s-.3-.32-.41-.32h-.4a.72.72 0 0 0-.5.23 2.1 2.1 0 0 0-.65 1.55A3.59 3.59 0 0 0 5 8.2 8.32 8.32 0 0 0 8.19 11c.44.19.78.3 1.05.39a2.53 2.53 0 0 0 1.17.07 1.93 1.93 0 0 0 1.26-.88 1.67 1.67 0 0 0 .11-.88c-.05-.07-.17-.12-.36-.21z"
                    ></path>
                    <path
                      d="M13.29 2.68A7.36 7.36 0 0 0 8 .5a7.44 7.44 0 0 0-6.41 11.15l-1 3.85 3.94-1a7.4 7.4 0 0 0 3.55.9H8a7.44 7.44 0 0 0 5.29-12.72zM8 14.12a6.12 6.12 0 0 1-3.15-.87l-.22-.13-2.34.61.62-2.28-.14-.23a6.18 6.18 0 0 1 9.6-7.65 6.12 6.12 0 0 1 1.81 4.37A6.19 6.19 0 0 1 8 14.12z"
                    ></path>
                  </g>
                </svg>
              </a>
              <!-- instagram -->

              <a
                href="https:/instagram.com"
                target="_blank"
                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border hover:border-primary hover:bg-primary hover:text-white transition-transform transform hover:scale-110"
              >
                <svg
                  role="img"
                  width="20"
                  class="fill-gray-50"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <title>Instagram</title>
                  <path
                    d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"
                    />
                </svg>
              </a>
              <!--  github -->
              <a
                href="https:/github.com"
                target="_blank"
                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border hover:border-primary hover:bg-primary hover:text-white transition-transform transform hover:scale-110"
              >
                <svg
                  role="img"
                  width="20"
                  class="fill-gray-50"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <title>GitHub</title>
                  <path
                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"
                  />
                </svg>
              </a>
              <!-- discord -->
              <a
                href="https:/discord.com"
                target="_blank"
                class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border hover:border-primary hover:bg-primary hover:text-white transition-transform transform hover:scale-110"
              >
                <svg
                  role="img"
                  width="20"
                  class="fill-gray-50"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <title>Discord</title>
                  <path
                    d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.946 2.4189-2.1568 2.4189Z"
                  />
                </svg>
              </a>
            </div>
          </div>
        </div>
        <!-- image home -->
        <div class="w-full md:w-1/2 flex items-center justify-center">
          <div
            class="relative w-[15rem] h-[15rem] md:w-[23rem] md:h-[24rem] bg-slate-500 rounded-lg overflow-hidden border-2 border-primary transition-transform transform hover:scale-105 hover:shadow-2xl"
            data-tilt
            data-tilt-scale="1.1"
          >
            <img
              src="assets/profile.jpg"
              alt="Profile Picture"
              class="object-cover w-full h-full"
            />
          </div>
        </div>
        </div>
    </section>
    <!-- about section -->
    <section class="h-screen md:flex md:items-center" id="about">
      <div class="container">
        <!-- title -->
        <div class="">
          <h3 class="text-xl font-semibold text-primary">About Me</h3>
          <h1 class="text-3xl text-gray-50 font-bold mb-1 md:text-5xl">
            Know about me
          </h1>
          <hr class="w-[12rem] mb-5 text-primary md:mt-2 border-4 rounded-full border-primary" />
        </div>
        <!-- content -->
        <div class="md:flex">
          <!-- image -->
          <div
            class="w-full md:w-[40%] flex items-center justify-center md:justify-start"
          >
            <div
              class="w-44 h-44 md:w-72 md:h-[22rem] bg-slate-500 overflow-hidden shadow-lg"
              data-tilt
              data-tilt-scale="1.1"
            >
              <img
                src="assets/profile.jpg"
                alt="Profile Picture"
                class="object-cover w-full h-full"
              />
            </div>
          </div>
          <!-- description -->
          <div class="w-full md:w-1/2">
            <p class="text-[0.790rem] md:text-base text-gray-400 mt-3">
            <?= $tampil['fullbio'] ?>
            </p>
            <!-- buttons -->
            <div class="flex mt-4">
              <a
                href="https://www.upwork.com"
                class="text-white bg-primary hover:bg-transparent hover:border hover:border-primary font-medium text-sm px-5 py-2.5 me-2 mb-2 transition-all duration-300 mr-4"
              >
                Upwork
              </a>
              <a
                href="path/to/your/cv.pdf"
                class="text-gray-50 hover:text-white border border-primary hover:bg-primary font-medium text-sm px-5 py-2.5 text-center me-2 mb-2"
              >
                Download CV
              </a>
            </div>
            <!-- buttons end -->
            <div class="flex mt-4">
              <div class="w-32 h-auto flex flex-col text-center">
                <h1 class="font-bold text-3xl text-gray-50 md:text-4xl">5+</h1>
                <p class="text-gray-50 text-[0.8rem]">years experience</p>
              </div>
              <div class="w-32 h-auto flex flex-col text-center">
                <h1 class="font-bold text-3xl text-gray-50 md:text-4xl">
                  200+
                </h1>
                <p class="text-gray-50 text-[0.8rem] md:text-md">
                  Project complete
                </p>
              </div>
              <div class="w-32 h-auto flex flex-col text-center">
                <h1 class="font-bold text-3xl text-gray-50 md:text-4xl">
                  180+
                </h1>
                <p class="text-gray-50 text-[0.8rem] md:text-md">
                  Happy clients
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- skils section -->
    <section class="h-screen flex items-center pt-20 md:pt-0" id="skils">
      <div class="container">
        <!-- title -->
        <div class="flex items-center">
          <hr class="w-28 mr-3" />
          <h3 class="text-primary font-bold text-2xl md:text-3xl">My skils</h3>
        </div>
        <!-- cards -->
          <div
            class="grid w-full grid-cols-2 gap-4 md:gap-6 mt-5 sm:grid-cols-3 md:grid-cols-4 md:px-24"
          >
              <?php
                    include 'koneksi.php';
                    $skils_query = "SELECT * FROM skils";
                    $query_sql = mysqli_query($conn, $skils_query);
                    $tampilskil = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);
                ?> 
            <?php
                foreach($tampilskil as $skils):
            ?>
                <div class="flex h-16 md:h-20 border border-primary items-center tilt" data-tilt>
                  <img src="assets/<?= $skils['image_skils']?>" alt="html" class="mr-2 ml-2 card " />
                  <p  class="text-gray-50 md:text-2xl font-semibold card"><?= $skils['title_skils'] ?></p>
                </div>
            <?php endforeach; ?>

          </div>
          </div>
    </section>
    <!-- portfolio section -->
    <section class="h-auto md:h-screen md:flex" id="portfolio">
        <div class="container mt-11 md:mt-0">
            <!-- title -->
            <div class="flex items-center">
                <hr class="w-28 mr-3" />
                <h3 class="text-primary font-bold text-xl">Portofolio</h3>
            </div>
            <!-- subtitle -->
            <h1 class="font-bold text-2xl md:text-4xl text-gray-50"> My portfolio highlights</h1>
            <!-- cards -->
             <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 justify-items-center mt-4 gap-y-4 md:gap-y-6 pb-10 md:pb-0 md:px-44">
             <?php
                include 'koneksi.php';
                $portfolios_query = "SELECT * FROM portfolios";
                $query_sql = mysqli_query($conn, $portfolios_query);
                $tampilportfolio = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);
            ?> 
            <!-- card 1 -->
            <?php
            foreach($tampilportfolio as $tampilportfolios):        
             ?>
                      <div class="bg-gray-800 rounded-lg shadow-lg py-4 tilt" style="width: 229px; height: 270px;" data-tilt>
                <div class="bg-slate-50 rounded-md w-48 h-44 mx-auto overflow-hidden card"> 
                  <img src="assets/<?= $tampilportfolios['image_portfolios'] ?>" alt="" class="mx-auto object-cover"> 
                </div>
                <div class="p-4 flex justify-between items-center card"> 
                    <h2 class="text-md font-bold text-white"><?= $tampilportfolios['title_portfolios'] ?></h2>
                    <a href="#" class="text-white bg-primary font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center">
                      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                      </svg>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
             </div>
             </div>
    </section>
    <!-- service section -->
     <section class="min-h-screen flex items-center" id="service">
        <div class="container">
         <!-- title -->
          <div class="flex items-center">
              <hr class="w-28 mr-3" />
              <h3 class="text-primary font-bold text-xl">Service</h3>
          </div>
          <!-- subtitle -->
          <h1 class="font-bold text-2xl md:text-4xl text-gray-50">Our service</h1>
          <!-- cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-4 md:gap-0 mt-6 justify-items-center md:justify-items-center md:px-20">
        <?php include 'koneksi.php';
                $service_query = "SELECT * FROM services";
                $query_sql = mysqli_query($conn, $service_query);
                $tampilservice = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);
            ?> 
                  <?php foreach($tampilservice as $index => $tampilservices): ?>
           <?php if($index % 2 == 1) : ?>
            <div class="bg-gray-800 rounded-lg shadow-lg py-4  border-4 border-primary tilt " data-tilt style="width: 229px; height: 311px; ">
                <div class="bg-primary rounded-md w-24 h-24 flex justify-center items-center mx-auto card"> 
                  <img src="assets/<?= $tampilservices['image_service']?>" width="80" height="80" class="mx-auto">
                </div>
                <div class="p-4 text-center card"> 
                    <h2 class="text-xl font-bold text-white"><?= $tampilservices['title_services']?></h2>
                    <p class="text-gray-400 mt-2"><?= $tampilservices['description_services']?></p>
                </div>
            </div>
           <?php else: ?>
            <div class="bg-gray-800 rounded-lg shadow-lg py-4 tilt" data-tilt style="width: 229px; height: 311px;">
                <div class="bg-slate-50 rounded-md w-24 h-24 flex justify-center items-center mx-auto card"> 
                  <img src="assets/<?= $tampilservices['image_service']?>" width="80" height="80" class="mx-auto">
                </div>
                <div class="p-4 text-center card"> 
                    <h2 class="text-xl font-bold text-white"><?= $tampilservices['title_services']?></h2>
                    <p class="text-gray-400 mt-2"><?= $tampilservices['description_services']?></p>
                </div>
            </div>
           <?php endif; ?>
           <?php endforeach ;?>
        </div>
        </div>
     </section>
     <!-- experience section -->
     <section id="experience" class="mt-24">
      <div class="container h-auto px-10 py-10">
          <h1 class="font-bold text-gray-200 text-3xl"><span class="text-primary">Companies</span> I have worked for in the past</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 mt-5 gap-5">
        <?php include 'koneksi.php';
                $experience_query = "SELECT * FROM experience";
                $query_sql = mysqli_query($conn, $experience_query);
                $tampilexperience = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);
            ?> 
          <!-- cards -->
          <?php foreach($tampilexperience as $key => $tampilexperiences): ?>
          <div class="text-gray-200">
            <p class="text-6xl md:text-7xl font-bold"><?= $key+1 ?></p>
            <p class="font-semibold text-lg"><span class="text-primary"><?= $tampilexperiences['company_name'] ?></span>, <?= $tampilexperiences['position'] ?></p>
            <p class="text-base text-slate-400"><?= $tampilexperiences['description_experience'] ?></p>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
    </section>
    <!-- contact section  -->
     <section class="h-auto md:h-screen flex items-center" id="contact">
        <div class="container">
            <!-- title section -->
             <h1 class="font-bold text-3xl text-gray-50  md:text-4xl ">Contact <span class="text-primary">me</span></h1>
            <!-- content -->
             <div class="md:flex " >
               <div class="w-full md:w-1/2 mt-7">
               <?php 
                    include 'koneksi.php';
                    $contact_query = "SELECT * FROM contact";
                    $query_sql = mysqli_query($conn, $contact_query);
                    $tampilcontact = mysqli_fetch_array($query_sql);
                ?> 
                 <h1 class="text-primary text text-4xl "><?= $tampilcontact['title_contact'] ?></h1>
                  <p class="text-gray-50 text-base"><?= $tampilcontact['subtitle_contact'] ?></p>
                  <!-- contact -->
                   <div class="flex mt-10 md:mt-16">
                    <img src="assets/contact1.png" alt="">
                    <p class="text-base text-gray-50 ml-2"><?= $tampil['no_telephone'] ?></p>
                   </div>
                   <div class="flex mt-5">
                    <img src="assets/contact2.png" alt="">
                    <p class="text-base text-gray-50 ml-2">fanakurniawan11@gmail.com</p>
                   </div>
                </div>
            <!-- form -->
           <div class="w-full md:w-1/2 mt-10">
                <form class="space-y-4" action="proses.php" method="post">
                  <input type="text" name="name" placeholder="Name" class="w-full p-2 rounded bg-white text-black">
                  <input type="email" name="email" placeholder="Email" class="w-full p-2 rounded bg-white text-black border-b-4">
                  <textarea placeholder="Message" name="message" class="w-full p-2 rounded bg-white text-black h-32"></textarea>
                  <button type="submit" name="submit" class="bg-primary text-white px-4 py-2 rounded">Send message</button>
              </form>
              </div>
             </div>
        </div>
     </section>
        <!-- footer -->
        <footer class="bg-gray-50 text-gray-950 text-base py-4 text-center mt-10 md:mt-0">&copy; copyright by <?= $tampil['name']?> | 2024 </footer>
        </div>
    <script src="scripts.js"></script>
    <script type="text/javascript" src="vanilla-tilt.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
  </body>
</html>
