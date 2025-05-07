<body class="bg-gradient-to-b from-white via-blue-700 to-cyan-400 h-screen">

  <div class="flex items-center justify-center h-full">
    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-sm">

      <?php if (isset($data['error-message'])): ?>
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
          <?= $data['error-message']; ?>
        </div>
      <?php endif; ?>

      <h1 class="text-center text-2xl font-bold mb-6">Welcome</h1>

      <form action="<?= APP_PATH; ?>/login/verification" method="post">
        <label class="block text-sm font-semibold mb-1">Username or E-mail</label>
        <div class="flex items-center bg-gray-200 rounded-md mb-4 px-3 py-2 focus-within:ring-2 focus-within:ring-blue-500">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A12.083 12.083 0 0112 15c2.21 0 4.264.597 6.121 1.804M15 11a3 3 0 10-6 0 3 3 0 006 0z" />
          </svg>
          <input type="text" name="usernameoremail" placeholder="Username or Email"
            class="w-full bg-transparent focus:outline-none" />
        </div>

        <label class="block text-sm font-semibold mb-1">Password</label>
        <div class="flex items-center bg-gray-200 rounded-md mb-6 px-3 py-2 focus-within:ring-2 focus-within:ring-blue-500">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c.828 0 1.5-.672 1.5-1.5S12.828 8 12 8s-1.5.672-1.5 1.5S11.172 11 12 11zm0 0v3m6 2a9 9 0 11-12 0h12z" />
          </svg>
          <input type="password" name="password" placeholder="Password"
            class="w-full bg-transparent focus:outline-none" />
        </div>

        <button type="submit"
          class="block w-28 mx-auto py-2 rounded-full bg-blue-700 text-white hover:bg-blue-800 transition">Login</button>
      </form>

      <p class="text-center mt-4 text-sm">
        Belum punya akun? <a href="<?= APP_PATH ?>/login/register" class="text-blue-600 hover:underline">Daftar di
          sini</a>
      </p>


    </div>
  </div>

</body>