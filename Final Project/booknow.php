<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Appointment Booking</title>
  <link rel="stylesheet" href="booknow.css">
</head>
<body>
  <div class="container">
    <header>
      <button class="back-button" onclick="navigateToPage('home')">&#8592;</button>
      <h1>dayschedule</h1>
    </header>
    <div class="booking-container">
      <div class="left-panel">
        <img src="profile.jpg" alt="Profile Picture" class="profile-img">
        
        <h2>
          <?php
            if (isset($_GET['username'])) {
                echo htmlspecialchars($_GET['username']);
            } else {
                echo "Guest";  
            }
          ?>
        </h2>

        <h3>Book an appointment</h3>
        <p><span>🕒</span> 30 minutes</p>
        <p>30-minute consultation meeting</p>
        <p><span>ℹ️</span> This is an online meeting on Google Meet.<br>
           You will receive an email with joining instructions/link to join the meeting.</p>
      </div>

      <div class="right-panel">
        <h2>Select a Date & Time</h2>
        <div class="calendar">
          <div class="month">
            <button class="arrow">&#8592;</button>
            <span>FEBRUARY 2022</span>
            <button class="arrow">&#8594;</button>
          </div>
          <div class="days">
            <div>Sun</div><div>Mon</div><div>Tue</div><div>Wed</div><div>Thu</div><div>Fri</div><div>Sat</div>
            <div></div><div></div><div></div><div></div><div></div>
            <div>30</div><div>31</div><div>1</div><div>2</div><div>3</div><div>4</div><div>5</div>
            <div>6</div><div>7</div><div>8</div><div>9</div><div>10</div><div>11</div><div>12</div>
            <div>13</div><div>14</div><div>15</div><div>16</div>
            <div class="selected">17</div>
            <div>18</div><div>19</div><div>20</div><div class="active">21</div><div>22</div>
            <div>23</div><div>24</div><div>25</div><div>26</div><div>27</div>
          </div>
        </div>
        <div class="time-zone">
          <label for="time-zone">Select Time Zone</label>
          <select id="time-zone">
            <option value="Asia/Calcutta">Asia/Calcutta (IST +05:30)</option>
          </select>
        </div>
        <div class="time-slots">
          <h3>Feb 17, 2022</h3>
          <div class="time-slot">9:00 am</div>
          <div class="time-slot">9:30 am</div>
          <div class="time-slot">10:00 am</div>
          <div class="time-slot">10:30 am</div>
          <div class="time-slot">11:00 am</div>
          <div class="time-slot">11:30 am</div>
          <div class="time-slot">1:30 pm</div>
          <div class="time-slot">2:30 pm</div>
          <div class="time-slot">3:00 pm</div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function navigateToPage(page) {
        if (page === 'home') {
            window.location.href = 'index.php';
        }
    }
  </script>

  <script src="index.js"></script>
</body>
</html>