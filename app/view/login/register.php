<body class="bg-gradient-to-b from-white via-blue-700 to-cyan-400 min-h-screen">
  <div class="flex justify-center items-center min-h-screen py-16">
    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-sm">
    
    <?php if (isset($_SESSION['error-message'])): ?>
      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <?= $_SESSION['error-message']; unset($_SESSION['error-message']); ?>
      </div>
    <?php endif; ?>

    <div class="text-center mb-6">
      <h1 class="text-3xl font-extrabold text-blue-800">Create Account</h1>
      <p class="text-sm text-gray-500 mt-1">Fill in your details to register</p>
    </div>

    <form action="<?= APP_PATH ?>/login/store" method="post" class="space-y-4">
      
      <!-- Input Group Template -->
      <div class="relative">
        <span class="absolute left-3 top-2.5 text-gray-400">
          <!-- Replace this icon depending on input -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M5.121 17.804A12.083 12.083 0 0112 15c2.21 0 4.264.597 6.121 1.804M15 11a3 3 0 10-6 0 3 3 0 006 0z" />
          </svg>
        </span>
        <input type="text" name="name" placeholder="Full Name" class="w-full pl-10 pr-4 py-2 border rounded-lg bg-gray-100 focus:ring-2 focus:ring-blue-500 focus:outline-none" required />
      </div>

      <div class="relative">
        <span class="absolute left-3 top-2.5 text-gray-400">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M5.121 17.804A12.083 12.083 0 0112 15c2.21 0 4.264.597 6.121 1.804M15 11a3 3 0 10-6 0 3 3 0 006 0z" />
          </svg>
        </span>
        <input type="text" name="username" placeholder="Username" class="w-full pl-10 pr-4 py-2 border rounded-lg bg-gray-100 focus:ring-2 focus:ring-blue-500 focus:outline-none" required />
      </div>

      <div class="relative">
        <span class="absolute left-3 top-2.5 text-gray-400">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M16 12H8m0 0l4-4m-4 4l4 4" />
          </svg>
        </span>
        <input type="email" name="email" placeholder="Email" class="w-full pl-10 pr-4 py-2 border rounded-lg bg-gray-100 focus:ring-2 focus:ring-blue-500 focus:outline-none" required />
      </div>

      <div class="relative">
        <span class="absolute left-3 top-2.5 text-gray-400">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 11c.828 0 1.5-.672 1.5-1.5S12.828 8 12 8s-1.5.672-1.5 1.5S11.172 11 12 11zm0 0v3m6 2a9 9 0 11-12 0h12z" />
          </svg>
        </span>
        <input type="password" name="password" placeholder="Password" class="w-full pl-10 pr-4 py-2 border rounded-lg bg-gray-100 focus:ring-2 focus:ring-blue-500 focus:outline-none" required />
      </div>

      <div class="relative">
        <span class="absolute left-3 top-2.5 text-gray-400">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 5a2 2 0 012-2h1.586a1 1 0 01.707.293l1.414 1.414a1 1 0 01.293.707V7a1 1 0 01-1 1H7.414L6 6.586A1 1 0 015.586 6H5a2 2 0 01-2-2z" />
          </svg>
        </span>
        <input type="text" name="phone" placeholder="Phone Number" class="w-full pl-10 pr-4 py-2 border rounded-lg bg-gray-100 focus:ring-2 focus:ring-blue-500 focus:outline-none" />
      </div>

      <button type="submit" class="w-full py-2 mt-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800 transition">
        Register
      </button>

      <p class="text-center text-sm mt-4">
        Already have an account? <a href="<?= APP_PATH ?>/login/index" class="text-blue-600 hover:underline">Login</a>
      </p>
    </form>
  </div>
</body>
