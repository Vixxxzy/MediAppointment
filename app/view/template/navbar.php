<!-- Navbar -->
<nav class="bg-gradient-to-r from-purple-500 via-indigo-500 to-violet-600 text-white shadow-lg">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo Section -->
        <div class="flex items-center space-x-4">
            <img src="<?= APP_PATH;?>/img/logo.png" alt="Logo" class="h-14 w-14 rounded-full bg-white p-1 shadow-md">
            <a href="<?= APP_PATH; ?>/home/index" class="text-2xl font-bold text-white hover:text-indigo-300 transition duration-300">Abraham Rompis</a>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex space-x-6">
            <a href="<?= APP_PATH; ?>/home/index" class="hover:bg-indigo-700 px-4 py-2 rounded-lg text-base font-medium transition duration-300 hover:text-white">Dashboard</a>
            <a href="<?= APP_PATH; ?>/home/appointment" class="hover:bg-indigo-700 px-4 py-2 rounded-lg text-base font-medium transition duration-300 hover:text-white">Schedule</a>
            <a href="<?= APP_PATH; ?>/home/doctor" class="hover:bg-indigo-700 px-4 py-2 rounded-lg text-base font-medium transition duration-300 hover:text-white">Doctors</a>
            <a href="<?= APP_PATH; ?>/home/profile" class="hover:bg-indigo-700 px-4 py-2 rounded-lg text-base font-medium transition duration-300 hover:text-white">Profile</a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobileMenuButton" class="md:hidden text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden bg-gradient-to-r from-indigo-500 to-purple-600 text-white space-y-4 px-6 py-4 absolute top-16 left-0 w-full shadow-lg hidden">
        <a href="<?= APP_PATH; ?>/home/index" class="block hover:bg-indigo-700 px-4 py-2 rounded-lg text-base font-medium transition duration-300">Dashboard</a>
        <a href="<?= APP_PATH; ?>/home/appointment" class="block hover:bg-indigo-700 px-4 py-2 rounded-lg text-base font-medium transition duration-300">Appointment</a>
        <a href="<?= APP_PATH; ?>/home/doctors" class="block hover:bg-indigo-700 px-4 py-2 rounded-lg text-base font-medium transition duration-300">Doctors</a>
        <a href="<?= APP_PATH; ?>/home/profile" class="block hover:bg-indigo-700 px-4 py-2 rounded-lg text-base font-medium transition duration-300">Profile</a>
    </div>
</nav>

<!-- JavaScript for Mobile Menu Toggle -->
<script>
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        mobileMenu.classList.toggle('block');
    });
</script>
