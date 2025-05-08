<div class="container mx-auto p-10 bg-gradient-to-br from-slate-900 to-slate-800 min-h-screen">
  <div class="bg-gradient-to-br from-indigo-600 via-purple-700 to-pink-600 shadow-2xl rounded-3xl p-10">
    <nav class="flex mb-6" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
          <a href="<?= APP_PATH;?>/home/index"
            class="inline-flex items-center text-lg font-semibold text-white hover:text-indigo-300">
            <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
              viewBox="0 0 20 20">
              <path
                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
            </svg>
            Dashboard
          </a>
        </li>
      </ol>
    </nav>

    <h1 class="text-4xl font-bold text-white mb-8">
      Hello and Welcome, <span class="bg-gradient-to-r from-indigo-300 to-purple-400 text-transparent bg-clip-text"> <?= $_SESSION['user-name'] ?>!</span>
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
      <div class="p-6 bg-indigo-500 rounded-xl shadow-xl text-white">
        <h2 class="text-xl font-semibold">Total Appointment</h2>
        <p class="text-3xl"> <?= $data['totals'] ?></p>
      </div>
      <div class="p-6 bg-purple-500 rounded-xl shadow-xl text-white">
        <h2 class="text-xl font-semibold">Doctors</h2>
        <p class="text-3xl"> <?= $data['total_doctors'] ?></p>
      </div>
      <div class="p-6 bg-pink-500 rounded-xl shadow-xl text-white">
        <h2 class="text-xl font-semibold">Completed</h2>
        <p class="text-3xl"> <?= $data['total_completed'] ?></p>
      </div>
    </div>

    <div class="bg-white shadow-2xl rounded-2xl p-8">
      <h2 class="text-2xl font-semibold text-slate-800 mb-6">History</h2>
      <table class="min-w-full bg-white border border-slate-200 rounded-lg overflow-hidden">
        <thead>
          <tr class="bg-gradient-to-r from-indigo-400 to-purple-500 text-white">
            <th class="py-4 px-6 text-left">NO</th>
            <th class="py-4 px-6 text-left">PATIENT</th>
            <th class="py-4 px-6 text-left">DOCTOR</th>
            <th class="py-4 px-6 text-left">SCHEDULE</th>
            <th class="py-4 px-6 text-left">STATUS</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($data['recent_appointment'])): ?>
            <?php $count = 1; ?>
            <?php foreach ($data['recent_appointment'] as $schedule): ?>
              <tr class="hover:bg-indigo-100 transition duration-300">
                <td class="py-4 px-6"> <?= $count++ ?> </td>
                <td class="py-4 px-6"> <?= htmlspecialchars($schedule['patient_name']) ?> </td>
                <td class="py-4 px-6"> <?= htmlspecialchars($schedule['doctor_name']) ?> </td>
                <td class="py-4 px-6">
                  <?php
                    $date = date('d F Y', strtotime($schedule['start_date']));
                    $start_time = date('H:i', strtotime($schedule['start_date']));
                    $end_time = date('H:i', strtotime($schedule['end_date']));
                  ?>
                  <?= $date ?><br>
                  <?= $start_time ?> - <?= $end_time ?>
                </td>
                <td class="py-4 px-6"> <?= htmlspecialchars($schedule['status']) ?> </td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="5" class="py-4 px-6 text-center text-gray-500">No appointments found</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
