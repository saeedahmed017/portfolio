<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saeed Ahmed - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body>
    {{-- section 1 hero --}}
    <section>
        {{-- gradient div --}}
        <div class="h-screen bg-gradient-to-r from-gray-50 from-50% to-indigo-900 relative">
            {{-- bg image div --}}
            <div class="h-screen bg-[url('/images/hero-bg.jpg')] bg-cover relative">
                <div class="h-screen relative">
                {{-- navbar --}}
                <header>
                    <nav
                        class="flex justify-between w-[100%] fixed p-4 px-8 align-middle text-white bg-indigo-900/[.5] drop-shadow-md">
                        <h1 class="text-3xl">
                            Portfolio
                        </h1>
                        <div>
                            <a href=""
                                class="px-2 hover:bg-gray-50 hover:text-indigo-900 p-2 rounded-md">Home</a>
                            <a href=""
                                class="px-2 hover:bg-gray-50 hover:text-indigo-900 p-2 rounded-md">About</a>
                            <a href=""
                                class="px-2 hover:bg-gray-50 hover:text-indigo-900 p-2 rounded-md">Portfolio</a>
                            <a href=""
                                class="px-2 hover:bg-gray-50 hover:text-indigo-900 p-2 rounded-md">Contact</a>
                        </div>
                    </nav>
                    {{-- navbar end --}}
                </header>
                <div class="absolute left-[5%] top-[40%] translate-middle">
                    <p class="drop-shadow-md text-6xl text-indigo-900  hover:scale-110 hover:transition-transform duration-300">Passionate
                        <br><b class="text-7xl">WEB DEVELOPER</b>
                    </p>
                        <div class="lg:flex justify-between w-96 my-6">
                        <div><button class="w-44 bg-yellow-400 py-2 px-8 hover:bg-yellow-500 text-indigo-900 hover:scale-110 hover:transition-transform duration-300 rounded-md drop-shadow-lg"><a href="">About me</a></button></div>
                        <div><button class="w-44 border-2 bg-indigo-900 py-2 px-8 hover:bg-indigo-800 text-white hover:scale-110 hover:transition-transform duration-300 rounded-md drop-shadow-lg"><a href="">My Portfolio</a></button></div>
                    </div>
                </div>
                <a href="#aboutme" class="absolute left-[50%] bottom-[2%] translate-x-0">
                    <svg class="animate-bounce duration-300 w-12 h-12 hover:bg-indigo-100 rounded-full" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg"><path stroke="var(--tds-icon--fill, #171a20)" stroke-width="1.5" d="m19.5 12.5-4.5 4-4.5-4" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
            </div>
            </div>
            {{-- bg image div ends --}}
        </div>
        {{-- gredient div ends --}}
    </section>

    {{-- section 2 about --}}
    <section>
        <div id="aboutme" class="lg:h-screen bg-gradient-to-b from-gray-50 from-2% to-indigo-900 relative">
           <div class="m-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4 p-16">
            <div>
                <img src="images/aboutme.png" alt="Saeed Ahmed's Photo" class="mx-auto mt-6 hover:scale-110 transition-transform duration-300">
            </div>
            <div>
                <span class="inline-block align-middle">
                <p class="drop-shadow-md text-3xl text-indigo-900  hover:scale-110 hover:transition-transform duration-300">About me
                    <br><b class="text-5xl bg-indigo-900 text-white px-2">I'M A WEB DEVELOPER</b>
                </p>
                <p class="my-6 text-justify text-white bg-indigo-900/[.5] p-4 drop-shadow-md hover:scale-110 hover:transition-transform duration-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi cupiditate enim fugit, perferendis quo consequatur voluptate dicta excepturi debitis ut doloremque, dolorum velit facilis? Ipsam, iure quasi, natus autem id esse harum laudantium maxime, doloribus ad vero unde cumque. Earum possimus veritatis incidunt soluta similique, alias blanditiis atque corrupti reiciendis adipisci laboriosam quos minima ipsa nostrum modi ut est? Fuga, libero voluptas maxime repudiandae quod assumenda harum sint cupiditate? Fuga adipisci deserunt aliquid, quia, placeat cumque iusto doloremque earum quasi nam sunt dolorem nihil illum esse quaerat eaque dolor dolorum? Ipsum, tempore non ex laboriosam deleniti impedit voluptate ipsa. Ducimus.</p>
                <button class="bg-yellow-400 py-2 px-8 hover:bg-yellow-500 text-indigo-900 hover:scale-110 hover:transition-transform duration-300 rounded-md drop-shadow-lg"><a href="">Learn more</a></button>

            </span>
            </div>
           </div>
           <a href="#services" class="absolute left-[50%] bottom-[2%] translate-x-0">
            <svg class="animate-bounce duration-300 w-12 h-12 hover:bg-indigo-100 rounded-full" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg"><path stroke="var(--tds-icon--fill, #171a20)" stroke-width="1.5" d="m19.5 12.5-4.5 4-4.5-4" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        </div>
    </section>

    <section>
        <div id="services" class="lg:h-screen bg-gradient-to-t from-indigo-900/75 via-gray-100 to-gray-50 to-90% p-16 relative">
            <div class="flex">
            <p class="drop-shadow-md mx-auto mb-16 inline text-3xl text-indigo-900 hover:scale-110 hover:transition-transform duration-300">My Services
                <br><b class="text-5xl bg-indigo-900 text-white px-2">EXPLORE MY OFFERINGS</b>
            </p>
        </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16">
                <div class="bg-indigo-900">
as
                </div>
                <div class="bg-indigo-900">
as
                </div>
                <div class="bg-indigo-900">
as
                </div>
                
            </div>
        </div>
    </section>
</body>

</html>
