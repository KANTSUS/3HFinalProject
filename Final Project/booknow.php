<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="container bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
    <h1 class="text-2xl font-bold mb-6">Payment Details</h1>

    <div class="mb-6">
      <h2 class="text-lg font-semibold">Appointment Summary</h2>
      <div id="appointmentSummary" class="bg-gray-50 p-4 rounded-lg">
        <!-- Summary will be populated here -->
      </div>
    </div>

    <form id="paymentForm">
      <div class="mb-4">
        <label for="cardType" class="block mb-2">Card Type</label>
        <select id="cardType" class="w-full p-2 border border-gray-300 rounded-lg">
          <option>Visa</option>
          <option>Mastercard</option>
          <option>American Express</option>
        </select>
      </div>
      <div class="mb-4">
        <label for="cardNumber" class="block mb-2">Card Number</label>
        <input type="text" id="cardNumber" class="w-full p-2 border border-gray-300 rounded-lg" required>
      </div>
      <div class="mb-4">
        <label for="expirationDate" class="block mb-2">Expiration Date</label>
        <input type="text" id="expirationDate" class="w-full p-2 border border-gray-300 rounded-lg" required>
      </div>
      <div class="mb-4">
        <label for="cvv" class="block mb-2">CVV</label>
        <input type="text" id="cvv" class="w-full p-2 border border-gray-300 rounded-lg" required>
      </div>
      <div class="mb-6">
        <label for="nameOnCard" class="block mb-2">Name on Card</label>
        <input type="text" id="nameOnCard" class="w-full p-2 border border-gray-300 rounded-lg" required>
      </div>

      <button type="submit" class="w-full bg-purple-700 text-white p-3 rounded-lg">Complete Payment</button>
    </form>
  </div>

  <script>
    // Retrieve data from localStorage
    const selectedDate = localStorage.getItem('selectedDate');
    const selectedTime = localStorage.getItem('selectedTime');
    const selectedService = localStorage.getItem('selectedService');

    // Populate appointment summary
    const appointmentSummary = document.getElementById('appointmentSummary');
    if (selectedDate && selectedTime && selectedService) {
      appointmentSummary.innerHTML = `
        <p><strong>Date:</strong> ${selectedDate}</p>
        <p><strong>Time:</strong> ${selectedTime}</p>
        <p><strong>Service:</strong> ${selectedService}</p>
      `;
    } else {
      appointmentSummary.innerHTML = '<p>Details not found.</p>';
    }

    // Handle form submission
    document.getElementById('paymentForm').addEventListener('submit', (e) => {
      e.preventDefault();
      // Here, you can handle the payment processing logic
      alert('Payment processed successfully!');
      // Optionally, clear localStorage after the payment is complete
      localStorage.removeItem('selectedDate');
      localStorage.removeItem('selectedTime');
      localStorage.removeItem('selectedService');
    });
  </script>
</body>
</html>
