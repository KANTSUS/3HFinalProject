<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Service</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
        }

        /* Layout */
        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Sidebar styles */
        .sidebar {
            width: 250px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .sidebar h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        .filter {
            margin-bottom: 20px;
        }

        .filter h3 {
            font-size: 18px;
            color: #34495e;
            margin-bottom: 10px;
        }

        select, input[type="range"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        #price-value {
            display: inline-block;
            margin-top: 10px;
            font-weight: bold;
        }

        /* Main Content styles */
        .service-list {
            flex: 1;
            margin-left: 20px;
        }

        .sorting {
            margin-bottom: 20px;
        }

        .sorting label {
            font-size: 16px;
            margin-right: 10px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .service-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        .service-card h4 {
            margin-bottom: 10px;
            font-size: 20px;
            color: #2c3e50;
        }

        .service-card p {
            margin-bottom: 10px;
            font-size: 16px;
            color: #7f8c8d;
        }

        .service-card span {
            font-size: 18px;
            font-weight: bold;
            color: #2ecc71;
        }

        /* Buttons */
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }

            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .sidebar {
                width: 100%;
                margin-bottom: 20px;
            }
        }

        @media (max-width: 480px) {
            .services-grid {
                grid-template-columns: 1fr;
            }

            .service-card {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2>Filters</h2>
            <div class="filter">
                <h3>Service Type</h3>
                <select id="service-type">
                    <option value="all">All</option>
                    <option value="massage">Massage</option>
                    <option value="facial">Facial</option>
                    <option value="aromatherapy">Aromatherapy</option>
                </select>
            </div>
            <div class="filter">
                <h3>Price Range</h3>
                <input type="range" id="price-range" min="0" max="100" value="100">
                <span id="price-value">$100</span>
            </div>
            <div class="filter">
                <h3>Duration</h3>
                <select id="duration">
                    <option value="all">All</option>
                    <option value="30">30 minutes</option>
                    <option value="60">60 minutes</option>
                    <option value="90">90 minutes</option>
                </select>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="service-list">
            <h1>Available Services</h1>
            <div class="sorting">
                <label for="sort-by">Sort by:</label>
                <select id="sort-by">
                    <option value="popularity">Popularity</option>
                    <option value="price">Price</option>
                    <option value="duration">Duration</option>
                </select>
            </div>

            <!-- Service Grid (example services added here) -->
            <div class="services-grid" id="services-grid">
                <div class="service-card">
                    <h4>Relaxing Massage</h4>
                    <p>Feel relaxed with a soothing massage.</p>
                    <span>$50</span>
                </div>
                <div class="service-card">
                    <h4>Facial Treatment</h4>
                    <p>Revitalize your skin with our facial treatments.</p>
                    <span>$70</span>
                </div>
                <div class="service-card">
                    <h4>Aromatherapy</h4>
                    <p>Relax with essential oils and aromatherapy.</p>
                    <span>$60</span>
                </div>
            </div>
        </main>
    </div>

    <!-- Navigation -->
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

    <script src="index.js"></script>
</body>
</html>
