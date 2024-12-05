<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Schedule</title>
    <link rel="stylesheet" href="scehule.css">
</head>
<body>
    <div class="container">
        <h1>Session Schedule</h1>
        <div class="session">
            <h2>Swedish Massage</h2>
            <p>Time: 10 am to 11 am</p>
        </div>
        <div class="session">
            <h2>Aromatherapy</h2>
            <p>Time: 12 pm to 1 pm</p>
        </div>
        <div class="session">
            <h2>Facial Treatment</h2>
            <p>Time: 2 pm to 3 pm</p>
        </div>
    </div>

    <div class="navigation">
    <button onclick="navigateToPage('home')">Home</button>
    </div>

    <script>
        function navigateToPage(page) {
            if (page === 'home') {
                window.location.href = 'index.php';
            }
        }
    
    </script>

<script src="script.js"></script>
</body>
</html>