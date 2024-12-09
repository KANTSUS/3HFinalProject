<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            background-image: url('https://i0.wp.com/luaresort.com/wp-content/uploads/2022/05/lua-resort-balatonfured-Body-Treatment-2034-Edit-scaled.jpg?resize=640%2C640&ssl=1');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .sidebar {
            background-color: rgba(44, 62, 80, 0.9); /* Slight transparency for better visibility */
            color: white;
            padding: 20px;
            width: 250px;
            display: flex;
            flex-direction: column;
        }
        .sidebar h2 {
            margin-top: 0;
        }
        .sidebar label {
            margin-top: 20px;
            display: block;
        }
        .sidebar select, .sidebar input[type="range"] {
            width: 100%;
            margin-top: 10px;
            padding: 5px;
        }
        .sidebar .price-range {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
        .sidebar .price-range span {
            margin-left: 10px;
        }
        .main-content {
            flex: 1;
            padding: 20px;
        }
        .main-content h1 {
            text-align: center;
        }
        .main-content .sort-by {
            text-align: center;
            margin-bottom: 20px;
        }
        .main-content .sort-by select {
            padding: 5px;
        }
        .services {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .service-card {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 200px;
            cursor: pointer;
            transition: transform 0.2s ease-in-out;
        }
        .service-card h3 {
            margin-top: 0;
        }
        .service-card p {
            color: #555;
        }
        .service-card .price {
            color: red;
            font-weight: bold;
        }
        .service-card.selected {
            border: 2px solid #007bff;
            transform: scale(1.05);
        }
        .home-button {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .home-button button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .home-button button:hover {
            background-color: #0056b3;
        }
        /* Confirmation Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }
        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            text-align: center;
        }
        .modal-content button {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .modal-content .cancel-btn {
            background-color: #dc3545;
        }
        .modal-content button:hover {
            background-color: #218838;
        }
        .modal-content .cancel-btn:hover {
            background-color: #c82333;
        }
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
            }
            .main-content {
                padding: 10px;
            }
            .services {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Filters</h2>
        <label for="service-type">Service Type</label>
        <select id="service-type">
            <option value="all">All</option>
        </select>
        <label for="price-range">Price Range</label>
        <div class="price-range">
            <input type="range" id="price-range" min="0" max="100" value="100">
            <span>$100</span>
        </div>
        <label for="duration">Duration</label>
        <select id="duration">
            <option value="30">30 minutes</option>
            <option value="60">60 minutes</option>
            <option value="90">90 minutes</option>
        </select>
    </div>
    <div class="main-content">
        <h1>Available Services</h1>
        <div class="sort-by">
            Sort by: 
            <select>
                <option value="popularity">Popularity</option>
            </select>
        </div>
        <div class="services">
            <div class="service-card" data-base-price="50" id="massage-card">
                <h3>Massage</h3>
                <p>A relaxing massage to relieve stress and tension.</p>
                <div class="price">$50</div>
            </div>
            <div class="service-card" data-base-price="60" id="facial-card">
                <h3>Facial</h3>
                <p>A rejuvenating facial to nourish your skin.</p>
                <div class="price">$60</div>
            </div>
            <div class="service-card" data-base-price="40" id="aromatherapy-card">
                <h3>Aromatherapy</h3>
                <p>Calming aromatherapy to enhance relaxation.</p>
                <div class="price">$40</div>
            </div>
            <div class="service-card" data-base-price="70" id="sauna-card">
                <h3>Sauna</h3>
                <p>Relax and detoxify with sauna therapy.</p>
                <div class="price">$70</div>
            </div>
            <div class="service-card" data-base-price="80" id="waxing-card">
                <h3>Waxing</h3>
                <p>Smooth and silky skin with waxing treatment.</p>
                <div class="price">$80</div>
            </div>
            <div class="service-card" data-base-price="60" id="ventosa-card">
                <h3>Ventosa</h3>
                <p>Improve circulation with ventosa therapy.</p>
                <div class="price">$60</div>
            </div>
        </div>
        <div class="home-button">
            <button id="confirm-button" style="display:none;">Confirm</button>
        </div>
    </div>

    <!-- Confirmation Modal -->
    <div class="modal" id="confirmation-modal">
        <div class="modal-content">
            <h3>Confirm Your Selection</h3>
            <p id="confirmation-message"></p>
            <button id="confirm-yes" class="btn">Yes</button>
            <button id="confirm-no" class="cancel-btn">No</button>
        </div>
    </div>

    <script>
        // Price update logic based on selected duration
        document.getElementById('duration').addEventListener('change', function() {
            const duration = parseInt(this.value);
            const serviceCards = document.querySelectorAll('.service-card');
            serviceCards.forEach(card => {
                const basePrice = parseInt(card.getAttribute('data-base-price'));
                const updatedPrice = basePrice + (duration === 30 ? 30 : (duration === 60 ? 30 : 90)); // Add $30 for 30 or 60 minutes, $90 for 90 minutes
                card.querySelector('.price').textContent = `$${updatedPrice}`;
            });
        });

        // Handle price range update
        document.getElementById('price-range').addEventListener('input', function() {
            this.nextElementSibling.textContent = `$${this.value}`;
        });

        // Service selection logic
        let selectedService = null;
        const serviceCards = document.querySelectorAll('.service-card');

        serviceCards.forEach(card => {
            card.addEventListener('click', function() {
                // Deselect previously selected card
                if (selectedService) {
                    selectedService.classList.remove('selected');
                }
                // Select the new service card
                this.classList.add('selected');
                selectedService = this;

                // Show confirm button
                document.getElementById('confirm-button').style.display = 'block';
            });
        });

        // Confirmation popup logic
        document.getElementById('confirm-button').addEventListener('click', function() {
            const serviceName = selectedService.querySelector('h3').textContent;
            const servicePrice = selectedService.querySelector('.price').textContent;
            document.getElementById('confirmation-message').textContent = `You have selected ${serviceName} for ${servicePrice}. Do you want to confirm?`;
            document.getElementById('confirmation-modal').style.display = 'flex';
        });

        // Handle confirmation choices
        document.getElementById('confirm-yes').addEventListener('click', function() {
            alert('You have confirmed your selection!');
            document.getElementById('confirmation-modal').style.display = 'none';
        });

        document.getElementById('confirm-no').addEventListener('click', function() {
            document.getElementById('confirmation-modal').style.display = 'none';
        });
    </script>
</body>
</html>
