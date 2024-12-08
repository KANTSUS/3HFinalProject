<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="create.css">
</head>
<body>
    
<section class="personal-info">
    <h2>Personal Information</h2>
    <form>
        <label for="name">Name:</label>
        <input placeholder="Name"type="text" id="name" >

        <label for="email">Email:</label>
        <input placeholder="Email" type="email" id="email" >

        <label for="phone">Phone Number:</label>
        <input placeholder="Phone Number" type="tel" id="phone" >

        <label for="address">Address:</label>
        <input placeholder="Address" type="text" id="address" >

    
        <button type="submit" onclick="navigateToBook('book')">Save Change</button>
        
       
    
        </form>
        <div class="navigation">
            <button onclick="navigateToPage('home')">Home</button>
        </div>
        </section>

        <script>
        function navigateToBook() {
            var username = document.getElementById('name').value; 
            
            window.location.href = 'booknow.php?username=' + encodeURIComponent(username);
        }
        </script>

        
    
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