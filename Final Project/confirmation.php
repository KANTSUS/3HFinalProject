<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Appointment Confirmation</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="container bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
    <h1 class="text-2xl font-bold mb-6">Appointment Confirmation</h1>
    
    <div id="appointmentDetails" class="mb-6">
      <h2 class="text-lg mb-2">Appointment Details</h2>
      <p><strong>Date:</strong> <span id="confirmDate"></span></p>
      <p><strong>Time:</strong> <span id="confirmTime"></span></p>
      <p><strong>Service:</strong> <span id="confirmService"></span></p>
    </div>

    <div id="paymentDetails" class="mb-6">
      <h2 class="text-lg mb-2">Payment Details</h2>
      <p><strong>Card Type:</strong> <span id="confirmCardType"></span></p>
      <p><strong>Card Number:</strong> <span id="confirmCardNumber"></span></p>
      <p><strong>Expiration Date:</strong> <span id="confirmExpDate"></span></p>
      <p><strong>CVV:</strong> <span id="confirmCVV"></span></p>
      <p><strong>Name on Card:</strong> <span id="confirmNameOnCard"></span></p>
    </div>

    <button onclick="window.location.href = 'index.html'" class="w-full bg-gray-300 text-black p-3 rounded-lg">Go Back to Home</button>
  </div>

  <script>
    window.onload = function() {
      // Retrieve appointment and payment details from localStorage
      const appointmentDetails = JSON.parse(localStorage.getItem('appointmentDetails'));
      const paymentDetails = JSON.parse(localStorage.getItem('paymentDetails'));

      if (appointmentDetails && paymentDetails) {
        // Populate the confirmation page with the retrieved details
        document.getElementById('confirmDate').textContent = appointmentDetails.date;
        document.getElementById('confirmTime').textContent = appointmentDetails.time;
        document.getElementById('confirmService').textContent = appointmentDetails.service;

        document.getElementById('confirmCardType').textContent = paymentDetails.cardType;
        document.getElementById('confirmCardNumber').textContent = paymentDetails.cardNumber;
        document.getElementById('confirmExpDate').textContent = paymentDetails.expDate;
        document.getElementById('confirmCVV').textContent = paymentDetails.cvv;
        document.getElementById('confirmNameOnCard').textContent = paymentDetails.nameOnCard;
      } else {
        // If no data is found, redirect to booking page
        window.location.href = 'index.html';
      }
    };
  </script>
</body>
</html>
