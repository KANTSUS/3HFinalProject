<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Service</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        .sidebar {
            background-color: #fff;
            padding: 20px;
            width: 250px;
            height: 100vh;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            overflow-y: auto;
        }

        h2 {
            margin-top: 0;
        }

        .filter {
            margin-bottom: 20px;
        }

        .filter h3 {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .filter select, .filter input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .filter input[type="range"] {
            width: calc(100% - 30px);
            display: inline-block;
        }

        #price-value {
            font-weight: bold;
            margin-left: 10px;
        }

        /* Main Section Styles */
        main {
            margin-left: 270px;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .sorting {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .sorting label {
            font-size: 16px;
            color: #333;
        }

        .sorting select {
            font-size: 14px;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Service Grid */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .service-item {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .service-item:hover {
            transform: translateY(-5px);
        }

        .service-item h4 {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }

        .service-item p {
            font-size: 14px;
            color: #555;
            margin-bottom: 10px;
        }

        .service-item .price {
            font-size: 16px;
            font-weight: bold;
            color: #333;
        }

        .service-item .duration {
            font-size: 14px;
            color: #777;
        }

        /* Navigation Button */
        .navigation {
            margin-top: 20px;
            text-align: center;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #5c6bc0;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #3f4a9e;
        }
    </style>
</head>
<body>
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

        <div class="services-grid" id="services-grid">
            <div class="service-item">
                <h4>Relaxing Massage</h4>
                <p>A calming full-body massage with essential oils.</p>
                <div class="price">$50</div>
                <div class="duration">60 minutes</div>
            </div>

            <div class="service-item">
                <h4>Refreshing Facial</h4>
                <p>A soothing facial with nourishing creams and masks.</p>
                <div class="price">$60</div>
                <div class="duration">60 minutes</div>
            </div>

            <div class="service-item">
                <h4>Aromatherapy Treatment</h4>
                <p>Experience the healing power of essential oils in a relaxing atmosphere.</p>
                <div class="price">$70</div>
                <div class="duration">60 minutes</div>
            </div>
        </div>
    </main>
        
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
