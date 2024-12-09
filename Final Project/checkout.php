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
    <h1 class="text-2xl font-bold mb-6">Checkout</h1>
    <div id="appointmentDetails" class="mb-6">
      <p id="selectedService" class="text-lg"></p>
      <p id="selectedDateTime" class="text-lg"></p>
    </div>
    <form id="paymentForm">
      <div class="mb-4">
        <label for="cardType" class="block mb-2">Card Type</label>
        <select id="cardType" class="w-full p-2 border border-gray-300 rounded-lg">
          <option>Visa</option>
          <option>MasterCard</option>
          <option>American Express</option>
          <option>Discover</option>
        </select>
      </div>
      <div class="mb-4">
        <label for="cardNumber" class="block mb-2">Card Number</label>
        <input type="text" id="cardNumber" class="w-full p-2 border border-gray-300 rounded-lg" required>
      </div>
      <div class="mb-4">
        <label for="expirationDate" class="block mb-2">Expiration Date (MM/YY)</label>
        <input type="text" id="expirationDate" class="w-full p-2 border border-gray-300 rounded-lg" required>
      </div>
      <div class="mb-4">
        <label for="cvv" class="block mb-2">CVV</label>
        <input type="text" id="cvv" class="w-full p-2 border border-gray-300 rounded-lg" required>
      </div>
      <div class="mb-4">
        <label for="nameOnCard" class="block mb-2">Name on Card</label>
        <input type="text" id="nameOnCard" class="w-full p-2 border border-gray-300 rounded-lg" required>
      </div>
      <button type="submit" class="w-full bg-purple-700 text-white p-3 rounded-lg">Complete Payment</button>
    </form>
  </div>

  <script>
    // Get appointment details from URL parameters
    const urlParams = new URLSearchParams(window.location.search);
    const selectedDate = urlParams.get('date');
    const selectedTime = urlParams.get('time');
    const selectedService = urlParams.get('service');

    // Display appointment details
    document.getElementById('selectedService').textContent = `Service: ${selectedService}`;
    document.getElementById('selectedDateTime').textContent = `Date & Time: ${selectedDate} at ${selectedTime}`;

    


    // Handle form submission
document.getElementById('paymentForm').addEventListener('submit', (e) => {
  e.preventDefault();

  // Get payment details
  const cardType = document.getElementById('cardType').value;
  const cardNumber = document.getElementById('cardNumber').value;
  const nameOnCard = document.getElementById('nameOnCard').value;

  // Redirect to confirmation page with details
  window.location.href = `confirmation.php?service=${encodeURIComponent(selectedService)}&date=${encodeURIComponent(selectedDate)}&time=${encodeURIComponent(selectedTime)}&cardType=${encodeURIComponent(cardType)}&cardNumber=${encodeURIComponent(cardNumber)}&nameOnCard=${encodeURIComponent(nameOnCard)}`;
});
  </script>
</body>
</html>