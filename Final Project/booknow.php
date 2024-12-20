<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Appointment Booking</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="container bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
    <h1 class="text-2xl font-bold mb-6">Select a Date & Time</h1>
    <div class="calendar mb-6">
      <div class="calendar-header flex justify-between items-center bg-purple-700 text-white p-3 rounded-t-lg">
        <button id="prevMonth" class="text-2xl"><i class="fas fa-chevron-left"></i></button>
        <span id="currentMonth" class="text-lg">FEBRUARY 2022</span>
        <button id="nextMonth" class="text-2xl"><i class="fas fa-chevron-right"></i></button>
      </div>
      <div class="calendar-body border border-gray-300 rounded-b-lg">
        <table class="w-full border-collapse">
          <thead>
            <tr>
              <th class="p-2">Sun</th>
              <th class="p-2">Mon</th>
              <th class="p-2">Tue</th>
              <th class="p-2">Wed</th>
              <th class="p-2">Thu</th>
              <th class="p-2">Fri</th>
              <th class="p-2">Sat</th>
            </tr>
          </thead>
          <tbody id="calendarDays">
            <!-- Calendar days will be generated by JavaScript -->
          </tbody>
        </table>
      </div>
    </div>
    <div class="timezone mb-6">
      <label for="timezone" class="block mb-2">Select Time Zone</label>
      <select id="timezone" class="w-full p-2 border border-gray-300 rounded-lg">
        <option>Asia/Calcutta (IST +05:30)</option>
      </select>
    </div>
    <div class="time-slots mb-6">
      <h2 id="selectedDate" class="text-lg mb-4">Feb 17, 2022</h2>
      <ul id="timeSlots" class="list-none p-0">
        <li class="p-2 border border-gray-300 rounded-lg mb-2 text-center cursor-pointer">9:00 am</li>
        <li class="p-2 border border-gray-300 rounded-lg mb-2 text-center cursor-pointer">9:30 am</li>
        <li class="p-2 border border-gray-300 rounded-lg mb-2 text-center cursor-pointer">10:00 am</li>
        <li class="p-2 border border-gray-300 rounded-lg mb-2 text-center cursor-pointer">10:30 am</li>
        <li class="p-2 border border-gray-300 rounded-lg mb-2 text-center cursor-pointer">11:00 am</li>
        <li class="p-2 border border-gray-300 rounded-lg mb-2 text-center cursor-pointer">11:30 am</li>
        <li class="p-2 border border-gray-300 rounded-lg mb-2 text-center cursor-pointer">1:30 pm</li>
        <li class="p-2 border border-gray-300 rounded-lg mb-2 text-center cursor-pointer">2:30 pm</li>
        <li class="p-2 border border-gray-300 rounded-lg mb-2 text-center cursor-pointer">3:00 pm</li>
      </ul>
    </div>
    <div class="service mb-6">
      <label for="service" class="block mb-2">Select Service</label>
      <select id="service" class="w-full p-2 border border-gray-300 rounded-lg">
        <option>Massage</option>
        <option>Facial</option>
        <option>Aromatherapy</option>
        <option>Sauna</option>
        <option>Waxing</option>
        <option>Ventosa</option>
      </select>
    </div>
    <button id="proceedToPayment" class="w-full bg-purple-700 text-white p-3 rounded-lg mb-4">Proceed to Payment</button>
    <div class="navigation">
      <button onclick="navigateToPage('home')" class="w-full bg-gray-300 text-black p-3 rounded-lg">Home</button>
    </div>
  </div>

  <script>
    const calendarDays = document.getElementById('calendarDays');
    const currentMonth = document.getElementById('currentMonth');
    const selectedDate = document.getElementById('selectedDate');
    const timeSlots = document.getElementById('timeSlots');
    let selectedDay = 17;
    let currentYear = 2024;
    let currentMonthIndex = 1; // February

    const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    function generateCalendar() {
      const daysInMonth = new Date(currentYear, currentMonthIndex + 1, 0).getDate();
      let calendarHTML = '';
      let dayOfWeek = new Date(currentYear, currentMonthIndex, 1).getDay();

      for (let i = 0; i < dayOfWeek; i++) {
        calendarHTML += '<td></td>';
      }

      for (let day = 1; day <= daysInMonth; day++) {
        if (day === selectedDay) {
          calendarHTML += `<td class="selected bg-purple-700 text-white rounded-full">${day}</td>`;
        } else {
          calendarHTML += `<td class="cursor-pointer">${day}</td>`;
        }

        dayOfWeek++;
        if (dayOfWeek === 7) {
          calendarHTML += '</tr><tr>';
          dayOfWeek = 0;
        }
      }

      calendarDays.innerHTML = `<tr>${calendarHTML}</tr>`;
      currentMonth.textContent = `${monthNames[currentMonthIndex]} ${currentYear}`;
    }

    function updateSelectedDate(day) {
      selectedDay = day;
      selectedDate.textContent = `${monthNames[currentMonthIndex]} ${day}, ${currentYear}`;
      generateCalendar();
    }

    document.getElementById('prevMonth').addEventListener('click', () => {
      currentMonthIndex--;
      if (currentMonthIndex < 0) {
        currentMonthIndex = 11;
        currentYear--;
      }
      generateCalendar();
    });

    document.getElementById('nextMonth').addEventListener('click', () => {
      currentMonthIndex++;
      if (currentMonthIndex > 11) {
        currentMonthIndex = 0;
        currentYear++;
      }
      generateCalendar();
    });

    calendarDays.addEventListener('click', (e) => {
      if (e.target.tagName === 'TD' && e.target.textContent) {
        updateSelectedDate(parseInt(e.target.textContent));
      }
    });

    timeSlots.addEventListener('click', (e) => {
      if (e.target.tagName === 'LI') {
        document.querySelectorAll('.time-slots li').forEach(li => li.classList.remove('selected', 'bg-purple-700', 'text-white'));
        e.target.classList.add('selected', 'bg-purple-700', 'text-white');
      }
    });

    document.getElementById('proceedToPayment').addEventListener('click', () => {
  const selectedTimeSlot = document.querySelector('.time-slots li.selected');
  const selectedService = document.getElementById('service').value;

  if (selectedTimeSlot) {
    const selectedDateTime = `${selectedDate.textContent} at ${selectedTimeSlot.textContent}`;
    
    // Redirect to the checkout page with the selected details
    window.location.href = `checkout.php?date=${encodeURIComponent(selectedDate.textContent)}&time=${encodeURIComponent(selectedTimeSlot.textContent)}&service=${encodeURIComponent(selectedService)}`;
  } else {
    alert('Please select a time slot.');
  }
});

    function navigateToPage(page) {
      if (page === 'home') {
        window.location.href = 'index.php';
      }
    }

    generateCalendar();
  </script>
</body>

 
</body>
</html>