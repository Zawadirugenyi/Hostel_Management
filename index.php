<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="registration.css">
    <title>Registration</title>
</head>

<body >
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.querySelector('form');
        var emailInput = document.getElementById('email');

        form.addEventListener('submit', function(event) {
            // Validate email format (6 digits before @)
            var emailPattern = /^\d{6}@.*$/;
            if (!emailPattern.test(emailInput.value)) {
                // If email format is invalid, prevent form submission and show an error message
                event.preventDefault();
                alert('Error: Invalid email format. Please enter 6 digits before @.');
            }
        });
    });
</script>

<div class="container">

    <h1>Welcome!</h1>

    <form action="proc.php" method="post">
       
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary"> <a href="home.php"> Login</a></button>
    </form>
    <div style="margin-bottom: 40px;"></div>
    <p>Don't have an account? <a href="signup.php">Sign up here</a></p>

</div>

  
    <!-- Bootstrap5 JS  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>




    
</body>

</html>