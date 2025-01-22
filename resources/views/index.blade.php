<x-guest-layout>

    <body class="bg-gray-900 font-sans min-h-screen flex flex-col items-center">

        <header class=" text-white w-full">
            <div class="flex items-center justify-start py-6 mx-16">
                <a href="#" class="text-white hover:text-orange-200 font-semibold mr-8">Over mezelf</a>
                <a href="#" class="text-white hover:text-zorange-200 font-semibold mr-8">Hobby's</a>
                <a href="#" class="text-white hover:text-orange-200 font-semibold mr-8">School</a>
                <a href="#" class="text-white hover:text-orange-200 font-semibold mr-8">Werkervaring</a>
                <a href="#" class="text-white hover:text-orange-200 font-semibold mr-8">Project</a>
                <a href="#" class="text-white hover:text-orange-200 font-semibold">Contact</a>
            </div>


            <hr class="border-t-2 border-orange-500 mx-16 mb-4">
        </header>

        <main class="py-12 w-full max-w-6xl mx-auto">
            <section class="flex items-center justify-between h-[50vh] text-white px-16 mb-12">
                <div class="w-1/2">
                    <h1 class="text-6xl font-bold text-orange-500 mb-6">Maikel Mureau</h1>
                    <p class="text-xl mb-4">Leeftijd: 18</p>
                    <p class="text-l">Ik ben een gepassioneerde webontwikkelaar die graag nieuwe technologieën leert en altijd streeft naar het verbeteren van mijn vaardigheden. Mijn focus ligt op gebruiksvriendelijke en aantrekkelijke websites.</p>
                </div>

                <div class="w-1/2 flex justify-center">
                    <div class="relative w-72 h-72">
                        <div class="absolute top-0 left-0 w-80 h-80 bg-orange-500 rounded-full opacity-50 transform translate-x-6 translate-y-6"></div>
                        <div class="absolute top-0 left-0 w-96 h-96 bg-orange-300 rounded-full opacity-50 transform translate-x-12 translate-y-12"></div>
                        <img src="{{ asset('img/profile.png') }}" alt="Jouw Foto" class="w-72 h-72 object-cover rounded-full z-10 relative">
                    </div>
                </div>
            </section>



            <section class="mb-12 text-center mb-12">
                <h2 class="text-3xl font-semibold text-orange-500 mb-8">Hobby's</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 px-8">
                    <div class="flex bg-gray-700 text-white rounded-lg shadow-lg p-6 items-center">
                        <img src="{{ asset('img/motor.png') }}" alt="Motor rijden" class="w-32 h-32 object-cover mr-6">
                        <div class="text-left">
                            <h3 class="text-xl font-semibold text-orange-400 mb-2">Motor rijden</h3>
                            <p class="text-sm text-gray-300">Ik geniet van het rijden op mijn motor. Het geeft me een gevoel van vrijheid en avontuur.</p>
                        </div>
                    </div>
                    <div class="flex bg-gray-700 text-white rounded-lg shadow-lg p-6 items-center">
                        <img src="{{ asset('img/3dprint.png') }}" alt="Motor rijden" class="w-32 h-32 object-cover mr-6">
                        <div class="text-left">
                            <h3 class="text-xl font-semibold text-orange-400 mb-2">3D printen</h3>
                            <p class="text-sm text-gray-300">Ik geniet van het rijden op mijn motor. Het geeft me een gevoel van vrijheid en avontuur.</p>
                        </div>
                    </div>
                    <div class="flex bg-gray-700 text-white rounded-lg shadow-lg p-6 items-center">
                        <img src="{{ asset('img/bunny.png') }}" alt="Motor rijden" class="w-32 h-32 object-cover mr-6">
                        <div class="text-left">
                            <h3 class="text-xl font-semibold text-orange-400 mb-2">Dieren</h3>
                            <p class="text-sm text-gray-300">Ik geniet van het rijden op mijn motor. Het geeft me een gevoel van vrijheid en avontuur.</p>
                        </div>
                    </div>
                    <div class="flex bg-gray-700 text-white rounded-lg shadow-lg p-6 items-center">
                        <img src="{{ asset('img/motor.png') }}" alt="Motor rijden" class="w-32 h-32 object-cover mr-6">
                        <div class="text-left">
                            <h3 class="text-xl font-semibold text-orange-400 mb-2">Motor rijden</h3>
                            <p class="text-sm text-gray-300">Ik geniet van het rijden op mijn motor. Het geeft me een gevoel van vrijheid en avontuur.</p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="text-center mb-12">
                <h2 class="text-3xl font-semibold text-orange-500 mb-8">School</h2>

                <div class="bg-gray-700 text-white rounded-lg p-6 mb-8 flex items-center">
                    <div class="w-3/4 text-start">
                        <h3 class="text-2xl font-semibold text-orange-400 mb-4">Middelbare School</h3>
                        <p class="text-gray-300 mb-4">
                            Ik heb mijn middelbare school afgerond op het XYZ Lyceum, waar ik mijn passie voor technologie en programmeren ontdekte.
                        </p>
                    </div>
                    <div class="w-1/4">
                        <img src="{{ asset('img/highschool.png') }}" alt="Motor rijden" class="w-32 h-32 object-cover mr-6">

                    </div>
                </div>

                <div class="bg-gray-700 text-white rounded-lg p-6 mb-8 flex items-center">
                    <div class="w-1/4 order-2 md:order-1">
                        <img src="{{ asset('img/collage.png') }}" alt="Motor rijden" class="w-32 h-32 object-cover mr-6">

                    </div>
                    <div class="w-3/4 text-start order-1 md:order-2">
                        <h3 class="text-2xl font-semibold text-orange-400 mb-4">MBO - ICT & Media</h3>
                        <p class="text-gray-300 mb-4">
                            Tijdens mijn MBO-opleiding aan ROC Amsterdam heb ik de basis gelegd voor mijn kennis van webdesign, programmeren en IT-beheer.
                        </p>
                    </div>
                </div>
            </section>

            <section class="mb-12 text-center">
                <h2 class="text-3xl font-semibold text-orange-500 mb-8 ">Projecten</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($projects as $project)
                    <div class="bg-gray-800 text-white rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300 relative">
                        @if($project->tags->isNotEmpty())
                        <div class="absolute top-2 left-2">
                            @foreach($project->tags as $tag)
                            <span
                                class="bg-blue-500 text-white text-xs font-semibold py-1 px-3 rounded-full shadow-md mr-2">
                                {{ $tag->name }}
                            </span>
                            @endforeach
                        </div>
                        @endif

                        <img
                            src="{{ asset('storage/' . $project->image_path) }}"
                            alt="{{ $project->title }}"
                            class="w-full h-56 object-cover rounded-t-lg">

                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-orange-500">{{ $project->title }}</h3>
                            <p class="text-gray-300 mt-4">{{ $project->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>


                <section class="mb-12 text-center">
                    <h2 class="text-3xl font-semibold text-orange-500 mb-6 underline">Werkervaring</h2>
                    <div class="space-y-8">
                        <div class="relative">
                            <hr class="border-t-2 border-orange-500 absolute top-0 left-0 w-full">
                            <div class="grid grid-cols-12 items-center py-6 px-8">
                                <span class="col-span-3 text-lg text-orange-400 font-semibold text-left">Tuincentrum</span>
                                <span class="col-span-3 text-xl text-white font-bold text-center">Medewerker</span>
                                <span class="col-span-6 text-sm text-orange-300 text-right">Verantwoordelijk voor het bijvullen van schappen en het adviseren van klanten over tuinartikelen.</span>
                            </div>
                            <hr class="border-t-2 border-orange-500 absolute bottom-0 left-0 w-full">
                        </div>

                        <div class="relative">
                            <hr class="border-t-2 border-orange-500 absolute top-0 left-0 w-full">
                            <div class="grid grid-cols-12 items-center py-6 px-8">
                                <span class="col-span-3 text-lg text-orange-400 font-semibold text-left">Syntec-IT</span>
                                <span class="col-span-3 text-xl text-white font-bold text-center">Stagiair</span>
                                <span class="col-span-6 text-sm text-orange-300 text-right">Gewerkt aan het ontwikkelen en testen van softwareoplossingen voor klanten.</span>
                            </div>
                            <hr class="border-t-2 border-orange-500 absolute bottom-0 left-0 w-full">
                        </div>

                        <div class="relative">
                            <hr class="border-t-2 border-orange-500 absolute top-0 left-0 w-full">
                            <div class="grid grid-cols-12 items-center py-6 px-8">
                                <span class="col-span-3 text-lg text-orange-400 font-semibold text-left">LOYYO</span>
                                <span class="col-span-3 text-xl text-white font-bold text-center">Stagiair</span>
                                <span class="col-span-6 text-sm text-orange-300 text-right">Opzetten en implementeren van nieuwe features in webapplicaties en verbeteren van bestaande systemen.</span>
                            </div>
                            <hr class="border-t-2 border-orange-500 absolute bottom-0 left-0 w-full">
                        </div>
                    </div>
                </section>


                <section>
                    <h2>kennis en vaardigheden</h2>
                </section>

                <section class="mb-12 w-full text-white text-start bg-opacity-10">
                    <div class="flex justify-between gap-16 mx-auto max-w-7xl py-12 px-6">
                        <div class="w-2/4">
                            <h1 class="text-4xl font-bold text-orange-500 mb-4">Contact</h1>
                            <p class="text-lg mb-6">
                                Als je vragen hebt, stuur me gerust een bericht. Ik beantwoord graag alle vragen die je hebt.
                                Je kunt me bereiken via e-mail of het onderstaande formulier.
                            </p>
                            <ul class=" text-lg space-y-2">
                                <li><i class="fas fa-envelope text-orange-500 mr-2"></i>Email: D294484@@edu.curio.nl</li>
                                <li><i class="fas fa-phone-alt text-orange-500 mr-2"></i>Telefoon: +31 6 22 75 81 54</li>
                                <li><i class="fas fa-map-marker-alt text-orange-500 mr-2"></i>Adres: Terheijdenseweg 350</li>
                            </ul>
                        </div>

                        <div class="w-2/3">
                            <form class="bg-gradient-to-br rounded-xl p-8">
                                <div class="grid grid-cols-1 gap-6 mb-6">
                                    <div>
                                        <label for="name" class="block text-orange-500 font-medium mb-2">Naam</label>
                                        <input id="name" type="text" placeholder="Uw naam" class="w-full p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500">
                                    </div>
                                    <div>
                                        <label for="email" class="block text-orange-500 font-medium mb-2">Email</label>
                                        <input id="email" type="email" placeholder="Uw emailadres" class="w-full p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500">
                                    </div>
                                    <div>
                                        <label for="message" class="block text-orange-500 font-medium mb-2">Bericht</label>
                                        <textarea id="message" placeholder="Uw bericht" rows="6" class="w-full p-3 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="w-48 bg-orange-600 text-white font-bold py-4 rounded-lg hover:bg-orange-700 transition duration-300 ease-in-out">Verzenden</button>
                            </form>
                        </div>
                    </div>
                </section>

        </main>

        <footer class=" text-white text-center py-6 w-full mb-12">
            <hr class="border-t-2 border-orange-500 mx-16 mb-4">
            <div class="flex items-center justify-center space-x-6">
                <p class="ml-4 text-sm">&copy; 2025 Your Name. Alle rechten voorbehouden.</p>
                <a href="#" class="text-white hover:text-orange-500">
                    <i class="fab fa-facebook-f text-xl"></i>
                </a>
                <a href="#" class="text-white hover:text-orange-500">
                    <i class="fab fa-twitter text-xl"></i>
                </a>
                <a href="#" class="text-white hover:text-orange-500">
                    <i class="fab fa-linkedin-in text-xl"></i>
                </a>
                <a href="#" class="text-white hover:text-orange-500">
                    <i class="fab fa-instagram text-xl"></i>
                </a>

            </div>
        </footer>

    </body>
</x-guest-layout>