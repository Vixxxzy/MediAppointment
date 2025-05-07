<!-- Navbar -->
<nav class="bg-gradient-to-r from-purple-500 via-indigo-600 to-blue-700 text-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo Section -->
        <div class="flex items-center space-x-4">
            <img src="<?= APP_PATH;?>/img/logo.png" alt="Logo" class="h-12 w-12 rounded-full border-2 border-white shadow-md">
            <a href="<?= APP_PATH; ?>/home/index" class="text-2xl font-semibold tracking-wide hover:opacity-90 transition duration-300">
                MediAppointment
            </a>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-6 text-sm font-medium">
            <a href="<?= APP_PATH; ?>/home/index" class="hover:text-indigo-100 px-3 py-2 rounded-md transition duration-200">Dashboard</a>
            <a href="<?= APP_PATH; ?>/home/appointment" class="hover:text-indigo-100 px-3 py-2 rounded-md transition duration-200">Schedule</a>
            <a href="<?= APP_PATH; ?>/home/doctor" class="hover:text-indigo-100 px-3 py-2 rounded-md transition duration-200">Doctors</a>
            <a href="<?= APP_PATH; ?>/home/profile" class="hover:text-indigo-100 px-3 py-2 rounded-md transition duration-200">Profile</a>
        </div>

        <!-- Mobile Button -->
        <button id="mobileMenuButton" class="md:hidden p-2 rounded-md hover:bg-white/20 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-current" fill="none" viewBox="0 0 24 24"
                stroke="white">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden hidden bg-gradient-to-br from-indigo-600 via-purple-700 to-blue-800 text-white px-6 py-4 space-y-3">
        <a href="<?= APP_PATH; ?>/home/index" class="block px-4 py-2 rounded hover:bg-white/10 transition">Dashboard</a>
        <a href="<?= APP_PATH; ?>/home/appointment" class="block px-4 py-2 rounded hover:bg-white/10 transition">Schedule</a>
        <a href="<?= APP_PATH; ?>/home/doctor" class="block px-4 py-2 rounded hover:bg-white/10 transition">Doctors</a>
        <a href="<?= APP_PATH; ?>/home/profile" class="block px-4 py-2 rounded hover:bg-white/10 transition">Profile</a>
    </div>
</nav>

<!-- JS Toggle -->
<script>
    document.getElementById('mobileMenuButton').addEventListener('click', () => {
        document.getElementById('mobileMenu').classList.toggle('hidden');
    });
</script>
