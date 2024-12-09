<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirmation</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="container bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
    <h1 class="text-2xl font-bold mb-6">Confirmation</h1>
    <div id="confirmationDetails" class="mb-6">
      <h2 class="text-lg font-bold">Appointment Details</h2>
      <p id="confirmedService" class="mb-2"></p>
      <p id="confirmedDateTime" class="mb-2"></p>
      <h2 class="text-lg font-bold">Payment Details</h2>
      <p id="confirmedCardType" class="mb-2"></p>
      <p id="confirmedCardNumber" class="mb-2"></p>
      <p id="confirmedNameOnCard" class="mb-2"></p>
    </div>
    <button onclick="window.print()" class="w-full bg-purple-700 text-white p-3 rounded-lg">Print Details</button>
    <button onclick="window.location.href='index.php'" class="w-full bg-gray-300 text-black p-3 rounded-lg mt-2">Back to Home</button>
  </div>

  <script>
    // Get appointment and payment details from URL parameters
    const urlParams = new URLSearchParams(window.location.search);
    const confirmedService = urlParams.get('service');
    const confirmedDate = urlParams.get('date');
    const confirmedTime = urlParams.get('time');
    const confirmedCardType = urlParams.get('cardType');
    const confirmedCardNumber = urlParams.get('cardNumber');
    const confirmedNameOnCard = urlParams.get('nameOnCard');

    // Display the details
    document.getElementById('confirmedService').textContent = `Service: ${confirmedService}`;
    document.getElementById('confirmedDateTime').textContent = `Date & Time: ${confirmedDate} at ${confirmedTime}`;
    document.getElementById('confirmedCardType').textContent = `Card Type: ${confirmedCardType}`;
    document.getElementById('confirmedCardNumber').textContent = `Card Number: **** **** **** ${confirmedCardNumber.slice(-4)}`; // Show only last 4 digits
    document.getElementById('confirmedNameOnCard').textContent = `Name on Card: ${confirmedNameOnCard}`;
  </script>
</body>
</html>