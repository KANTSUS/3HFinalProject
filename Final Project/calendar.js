let currentDate = new Date();

function renderCalendar(date) {
    const daysContainer = document.getElementById('calendar-days');
    const monthYearLabel = document.getElementById('month-year');
    const month = date.getMonth();
    const year = date.getFullYear();

    
    const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    monthYearLabel.textContent = `${monthNames[month]} ${year}`;

   
    daysContainer.innerHTML = '';

    
    const firstDay = new Date(year, month, 1).getDay();
    const totalDays = new Date(year, month + 1, 0).getDate();

    
    for (let i = 0; i < firstDay; i++) {
        const blankDiv = document.createElement('div');
        daysContainer.appendChild(blankDiv);
    }

    
    for (let day = 1; day <= totalDays; day++) {
        const dayDiv = document.createElement('div');
        dayDiv.textContent = day;
        dayDiv.classList.add('day');

       
        if (day === currentDate.getDate() && month === currentDate.getMonth() && year === currentDate.getFullYear()) {
            dayDiv.classList.add('selected');
        }

       
        dayDiv.onclick = () => selectDate(day, month, year);

        daysContainer.appendChild(dayDiv);
    }
}

function selectDate(day, month, year) {
    
    document.querySelectorAll('.day').forEach(dayEl => dayEl.classList.remove('selected'));
    event.target.classList.add('selected');

   
    alert(`Selected date: ${day}/${month + 1}/${year}`);
}

function changeMonth(delta) {
    currentDate.setMonth(currentDate.getMonth() + delta);
    renderCalendar(currentDate);
}


document.addEventListener('DOMContentLoaded', () => {
    renderCalendar(currentDate);
});