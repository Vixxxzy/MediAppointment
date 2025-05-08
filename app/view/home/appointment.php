<div class="flex justify-center mt-5">
  <div class="bg-gradient-to-br from-indigo-500 via-purple-600 to-pink-500 shadow-2xl rounded-3xl p-10 relative w-full max-w-7xl">
    <nav class="flex mb-8" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-3 rtl:space-x-reverse">
        <li class="inline-flex items-center">
          <a href="<?= APP_PATH;?>/home/index" class="inline-flex items-center text-lg font-semibold text-white hover:text-indigo-300">
            <svg class="w-5 h-5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
            </svg>
            Dashboard
          </a>
        </li>
        <li>
          <div class="flex items-center">
            <svg class="w-4 h-4 text-gray-200 mx-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
            <a href="<?= APP_PATH;?>/home/appointment" class="text-lg font-semibold text-white hover:text-indigo-300">Appointment</a>
          </div>
        </li>
      </ol>
    </nav>

    <button id="openModalBtn" class="absolute top-5 right-5 bg-gradient-to-r from-pink-500 to-purple-600 text-white py-3 px-6 rounded-full hover:from-pink-400 hover:to-purple-500 shadow-lg transition duration-300">
      + NEW APPOINTMENT
    </button>

    <div class="overflow-hidden rounded-xl shadow-lg mt-10">
      <table class="min-w-full bg-white border border-gray-200">
        <thead>
          <tr class="bg-gradient-to-r from-indigo-400 to-purple-500 text-white">
            <th class="py-4 px-6 text-left">NO</th>
            <th class="py-4 px-6 text-left">PATIENT</th>
            <th class="py-4 px-6 text-left">DOCTOR</th>
            <th class="py-4 px-6 text-left">SCHEDULE</th>
            <th class="py-4 px-6 text-left">STATUS</th>
            <th class="py-4 px-6 text-left">ACTION</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($data['schedules'])): ?>
            <?php $count = 1; ?>
            <?php foreach ($data['schedules'] as $schedule): ?>
              <tr class="hover:bg-indigo-100 transition duration-300">
                <td class="py-4 px-6"><?= $count++ ?></td>
                <td class="py-4 px-6"><?= htmlspecialchars($schedule['patient_name']) ?></td>
                <td class="py-4 px-6"><?= htmlspecialchars($schedule['doctor_name']) ?></td>
                <td class="py-4 px-6">
                  <?php
                  $date = date('d F Y', strtotime($schedule['start_date']));
                  $start_time = date('H:i', strtotime($schedule['start_date']));
                  $end_time = date('H:i', strtotime($schedule['end_date']));
                  ?>
                  <?= htmlspecialchars($date) ?><br>
                  <?= htmlspecialchars($start_time) ?> - <?= htmlspecialchars($end_time) ?>
                </td>
                <td class="py-4 px-6"><?= htmlspecialchars($schedule['status']) ?></td>
                <td class="py-4 px-6">
                  <button class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-400">Edit</button>
                  <a href="<?= APP_PATH; ?>/home/delete_appointment/<?= $schedule['id']; ?>" class="bg-red-500 text-white px-4 py-2 rounded-full hover:bg-red-400">Delete</a>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="6" class="py-4 px-6 text-center text-gray-500">No appointments found</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>