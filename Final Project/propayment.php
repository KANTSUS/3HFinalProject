
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .checkout-container, .payment-details-container {
            max-width: 400px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .navigation button {
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .navigation button:hover {
            background-color: #2980b9;
        }
        .payment-details {
            margin-top: 20px;
        }
        .payment-details p {
            font-size: 16px;
            margin: 5px 0;
        }
    </style>
</head>
<body>

<div class="checkout-container">
    <h2>Checkout</h2>
    <form id="checkout-form">
        <div class="form-group">
            <label for="card-type">Card Type</label>
            <select id="card-type" name="card-type" required>
                <option value="">Select Card Type</option>
                <option value="visa">Visa</option>
                <option value="mastercard">MasterCard</option>
            </select>
        </div>
        <div class="form-group">
            <label for="card-number">Card Number</label>
            <input type="text" id="card-number" name="card-number" required placeholder="1234 5678 9012 3456">
        </div>
        <div class="form-group">
            <label for="expiration-date">Expiration Date (MM/YY)</label>
            <input type="text" id="expiration-date" name="expiration-date" required placeholder="MM/YY">
        </div>
        <div class="form-group">
            <label for="cvv">CVV</label>
            <input type="number" id="cvv" name="cvv" required placeholder="123" maxlength="3">
        </div>
        <div class="form-group">
            <label for="name-on-card">Name on Card</label>
            <input type="text" id="name-on-card" name="name-on-card" required placeholder="John Doe">
        </div>
        <button type="submit">Pay Now</button>
    </form>
</div>

<!-- Navigation -->
<div class="navigation">
    <button onclick="navigateToPage('home')">Home</button>
</div>

<div class="payment-details-container" id="payment-details-container" style="display: none;">
    <h2>Payment Details</h2>
    <div class="payment-details">
        <p><strong>Card Type:</strong> <span id="display-card-type"></span></p>
        <p><strong>Card Number:</strong> <span id="display-card-number"></span></p>
        <p><strong>Expiration Date:</strong> <span id="display-expiration-date"></span></p>
        <p><strong>CVV:</strong> <span id="display-cvv"></span></p>
        <p><strong>Name on Card:</strong> <span id="display-name-on-card"></span></p>
    </div>
</div>

<script>
    document.getElementById('checkout-form').addEventListener('submit', function(event) {
        event.preventDefault();
        
        const cardType = document.getElementById('card-type').value;
        const cardNumber = document.getElementById('card-number').value;
        const expirationDate = document.getElementById('expiration-date').value;
        const cvv = document.getElementById('cvv').value;
        const nameOnCard = document.getElementById('name-on-card').value;

        document.getElementById('display-card-type').innerText = cardType;
        document.getElementById('display-card-number').innerText = cardNumber;
        document.getElementById('display-expiration-date').innerText = expirationDate;
        document.getElementById('display-cvv').innerText = cvv;
        document.getElementById('display-name-on-card').innerText = nameOnCard;

        document.querySelector('.checkout-container').style.display = 'none';
        document.getElementById('payment-details-container').style.display = 'block';
    });

    function navigateToPage(page) {
        if (page === 'home') {
            window.location.href = 'index.php';
        }
    }
</script>

</body>
</html>