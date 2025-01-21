<x-guest-layout>
<body class="bg-gray-100 font-sans">
    <!-- Header -->
    <header class="bg-blue-600 text-white p-4">
        <nav>
            <ul class="flex justify-center space-x-6">
                <li class="hover:underline">Over mezelf</li>
                <li class="hover:underline">Hobby's</li>
                <li class="hover:underline">School</li>
                <li class="hover:underline">Werkervaring</li>
                <li class="hover:underline">Project</li>
                <li class="hover:underline">Contact</li>
            </ul>
        </nav>
    </header>

    <!-- Content -->
    <main class="py-10 px-4">
        <!-- Over mezelf -->
        <section class="mb-8">
            <h2 class="text-xl font-semibold text-gray-800">Over mezelf</h2>
            <p class="text-gray-600">About myself</p>
        </section>

        <!-- Hobby's -->
        <section class="mb-8">
            <h2 class="text-xl font-semibold text-gray-800">Hobby's</h2>
            <p class="text-gray-600">Hobby's</p>
        </section>

        <!-- School -->
        <section class="mb-8">
            <h2 class="text-xl font-semibold text-gray-800">School</h2>
            <p class="text-gray-600">School</p>
        </section>

        <!-- Werkervaring -->
        <section class="mb-8">
            <h2 class="text-xl font-semibold text-gray-800">Werkervaring</h2>
            <p class="text-gray-600">Work</p>
        </section>

        <!-- Project -->
        <section class="mb-8">
            <h2 class="text-xl font-semibold text-gray-800">Project</h2>
            <p class="text-gray-600">Project</p>
        </section>

        <!-- Contact -->
        <section class="flex flex-col items-center mt-16">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Contact</h2>
            <form class="bg-white shadow-lg rounded-lg p-6 w-full max-w-md">
                <div class="mb-4">
                    <input type="text" placeholder="Naam" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <input type="email" placeholder="Email" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <textarea placeholder="Bericht" rows="4" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 rounded-md hover:bg-blue-700">Verzenden</button>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4 mt-10">
        <p>&copy; 2025 Your Name. Alle rechten voorbehouden.</p>
    </footer>
</body>
</x-guest-layout>
