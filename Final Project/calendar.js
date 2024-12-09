let currentDate = new Date();

function renderCalendar(date) {
    const daysContainer = document.getElementById('calendar-days');
    const monthYearLabel = document.getElementById('month-year');
    const month = date.getMonth();
    const year = date.getFullYear();

    // Set the month and year label
    const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    monthYearLabel.textContent = `${monthNames[month]} ${year}`;

    // Clear existing days
    daysContainer.innerHTML = '';

    // Get the first day of the month and the total number of days
    const firstDay = new Date(year, month, 1).getDay();
    const totalDays = new Date(year, month + 1, 0).getDate();

    // Fill in empty spaces for days before the first of the month
    for (let i = 0; i < firstDay; i++) {
        const blankDiv = document.createElement('div');
        daysContainer.appendChild(blankDiv);
    }

    // Add each day of the month
    for (let day = 1; day <= totalDays; day++) {
        const dayDiv = document.createElement('div');
        dayDiv.textContent = day;
        dayDiv.classList.add('day');

        // Highlight the current date
        if (day === currentDate.getDate() && month === currentDate.getMonth() && year === currentDate.getFullYear()) {
            dayDiv.classList.add('selected');
        }

        // Add click event for date selection
        dayDiv.onclick = () => selectDate(day, month, year);

        daysContainer.appendChild(dayDiv);
    }
}

function selectDate(day, month, year) {
    // Highlight the selected date
    document.querySelectorAll('.day').forEach(dayEl => dayEl.classList.remove('selected'));
    event.target.classList.add('selected');

    // Perform any additional actions, such as updating a form input or displaying the selected date
    alert(`Selected date: ${day}/${month + 1}/${year}`);
}

function changeMonth(delta) {
    currentDate.setMonth(currentDate.getMonth() + delta);
    renderCalendar(currentDate);
}

// Initialize the calendar
document.addEventListener('DOMContentLoaded', () => {
    renderCalendar(currentDate);
});