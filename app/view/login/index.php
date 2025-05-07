<body class="bg-gradient-to-b from-white via-blue-700 to-cyan-400 min-h-screen">
  <div class="flex justify-center items-center min-h-screen py-16">
    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-sm">

    <?php if (isset($data['error-message'])): ?>
      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
        <?= $data['error-message']; ?>
      </div>
    <?php endif; ?>

    <div class="text-center mb-6">
      <h1 class="text-3xl font-extrabold text-blue-800">Welcome Back</h1>
      <p class="text-sm text-gray-500">Login to continue</p>
    </div>

    <form action="<?= APP_PATH; ?>/login/verification" method="post" class="space-y-5">
      <!-- Username -->
      <div class="relative">
        <span class="absolute left-3 top-2.5 text-gray-500">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M5.121 17.804A12.083 12.083 0 0112 15c2.21 0 4.264.597 6.121 1.804M15 11a3 3 0 10-6 0 3 3 0 006 0z" />
          </svg>
        </span>
        <input type="text" name="usernameoremail" placeholder="Username or Email"
          class="w-full pl-10 pr-4 py-2 border rounded-lg bg-gray-100 focus:ring-2 focus:ring-blue-500 focus:outline-none transition" required />
      </div>

      <!-- Password -->
      <div class="relative">
        <span class="absolute left-3 top-2.5 text-gray-500">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 11c.828 0 1.5-.672 1.5-1.5S12.828 8 12 8s-1.5.672-1.5 1.5S11.172 11 12 11zm0 0v3m6 2a9 9 0 11-12 0h12z" />
          </svg>
        </span>
        <input type="password" name="password" placeholder="Password"
          class="w-full pl-10 pr-4 py-2 border rounded-lg bg-gray-100 focus:ring-2 focus:ring-blue-500 focus:outline-none transition" required />
      </div>

      <!-- Button -->
      <button type="submit"
        class="w-full py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800 transition font-semibold">
        Login
      </button>
    </form>

    <p class="text-center text-sm mt-4 text-gray-600">
      Don't have an account yet?
      <a href="<?= APP_PATH ?>/login/register" class="text-blue-600 hover:underline">Register here</a>
    </p>
  </div>
</body>
