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
                    <p class="text-6xl text-indigo-900">Passionate
                        <br><b class="text-7xl">WEB DEVELOPER</b>
                    </p>
                    <p class="bg-yellow-400 text-indigo-900 text-lg p-1 my-2 text-justify">Turning idea into
                        user-friendly websites</p>
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
        <div id="aboutme" class="h-screen bg-gradient-to-tr from-gray-50 from-75% to-indigo-900">
           
        </div>
    </section>
</body>

</html>
