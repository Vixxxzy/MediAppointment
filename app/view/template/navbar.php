<!-- Premium Navbar -->
<nav class="backdrop-blur-md bg-white/10 border-b border-white/20 shadow-xl text-white fixed top-0 left-0 right-0 z-50">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

    <!-- Logo & Title -->
    <div class="flex items-center space-x-4">
      <img src="<?= APP_PATH;?>/img/logo.png" alt="Logo"
        class="h-12 w-12 rounded-full border-2 border-white shadow-lg ring-2 ring-white/30" />
      <a href="<?= APP_PATH; ?>/home/index"
        class="text-2xl font-bold tracking-wide bg-clip-text text-transparent bg-gradient-to-r from-purple-300 via-pink-300 to-blue-300 hover:opacity-90 transition duration-300">
        MediAppointment
      </a>
    </div>

    <!-- Desktop Navigation -->
    <div class="hidden md:flex space-x-8 text-sm font-medium">
      <a href="<?= APP_PATH; ?>/home/index"
        class="px-4 py-2 rounded-lg hover:bg-white/10 hover:text-purple-100 transition duration-300">Dashboard</a>
      <a href="<?= APP_PATH; ?>/home/appointment"
        class="px-4 py-2 rounded-lg hover:bg-white/10 hover:text-purple-100 transition duration-300">Schedule</a>
      <a href="<?= APP_PATH; ?>/home/doctor"
        class="px-4 py-2 rounded-lg hover:bg-white/10 hover:text-purple-100 transition duration-300">Doctors</a>
      <a href="<?= APP_PATH; ?>/home/profile"
        class="px-4 py-2 rounded-lg hover:bg-white/10 hover:text-purple-100 transition duration-300">Profile</a>
    </div>

    <!-- Mobile Menu Button -->
    <button id="mobileMenuButton" class="md:hidden p-2 hover:bg-white/20 rounded-lg transition">
      <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>

  <!-- Mobile Navigation -->
  <div id="mobileMenu"
    class="md:hidden hidden bg-white/10 border-t border-white/20 backdrop-blur-md px-6 py-4 space-y-4 text-sm text-white">
    <a href="<?= APP_PATH; ?>/home/index"
      class="block px-4 py-2 rounded-lg hover:bg-white/10 transition duration-200">Dashboard</a>
    <a href="<?= APP_PATH; ?>/home/appointment"
      class="block px-4 py-2 rounded-lg hover:bg-white/10 transition duration-200">Schedule</a>
    <a href="<?= APP_PATH; ?>/home/doctor"
      class="block px-4 py-2 rounded-lg hover:bg-white/10 transition duration-200">Doctors</a>
    <a href="<?= APP_PATH; ?>/home/profile"
      class="block px-4 py-2 rounded-lg hover:bg-white/10 transition duration-200">Profile</a>
  </div>
</nav>

<!-- Script -->
<script>
  document.getElementById('mobileMenuButton').addEventListener('click', () => {
    document.getElementById('mobileMenu').classList.toggle('hidden');
  });
</script>
