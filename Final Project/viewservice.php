<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Service</title>
    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="styles.css">
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
            <!-- Service Item 1: Massage -->
            <div class="service-item">
                <h4>Relaxing Massage</h4>
                <p>A calming full-body massage with essential oils.</p>
                <div class="price">$50</div>
                <div class="duration">60 minutes</div>
            </div>

            <!-- Service Item 2: Facial -->
            <div class="service-item">
                <h4>Refreshing Facial</h4>
                <p>A soothing facial with nourishing creams and masks.</p>
                <div class="price">$60</div>
                <div class="duration">60 minutes</div>
            </div>

            <!-- Service Item 3: Aromatherapy -->
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
