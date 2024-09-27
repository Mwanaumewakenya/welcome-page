<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #f7f8fa;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('background.jpg'); /* Background image */
            background-size: cover;
            background-position: center;
        }

        .welcome-container {
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent background */
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 450px;
            animation: fadeIn 1.5s ease-in-out;
        }

        .welcome-container h1 {
            font-size: 32px;
            font-weight: 600;
            color: #007bff;
        }

        .welcome-container p {
            font-size: 18px;
            margin-bottom: 30px;
            color: #333;
        }

        .welcome-container .btn {
            width: 100%;
            font-size: 16px;
            font-weight: 600;
            padding: 15px;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .welcome-container .btn:hover {
            transform: scale(1.05);
        }

        .welcome-container .admin-btn {
            background-color: #007bff;
            color: white;
            margin-bottom: 20px;
        }

        .welcome-container .teacher-btn {
            background-color: #28a745;
            color: white;
        }

        .welcome-container .btn i {
            margin-right: 10px;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: scale(0.8);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        footer {
            position: fixed;
            bottom: 10px;
            width: 100%;
            text-align: center;
            color: #333;
            font-size: 14px;
        }

        .marquee {
            font-size: 18px;
            color: #007bff;
            margin-bottom: 20px;
            font-weight: 500;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        marquee {
            font-size: 18px;
            font-weight: 600;
            color: #ff6600;
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 30px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .welcome-icon {
            font-size: 50px;
            color: #007bff;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="welcome-container">
        <i class="fas fa-school welcome-icon"></i>
        <h1>Welcome to the School System</h1>

        <!-- Marquee for intro message -->
        <marquee behavior="scroll" direction="left">Empowering Education with Innovation & Technology. Choose your role to begin!</marquee>

        <p>Experience the future of education. Please select your login role to continue:</p>

        <!-- Admin Login Button -->
        <a href="adminLogin.php" class="btn admin-btn">
            <i class="fas fa-user-shield"></i> Admin Login
        </a>

        <!-- Teacher Login Button -->
        <a href="teacherLogin.php" class="btn teacher-btn">
            <i class="fas fa-chalkboard-teacher"></i> Class Teacher Login
        </a>
    </div>

    <footer>
        &copy; <?php echo date("Y"); ?> Mwanaumewakenya Softwares. All rights reserved.
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
