<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <title>Learning Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body { font-family: Arial, sans-serif; background-color: #f5f5f5; }
        .user-container { display: flex; justify-content: center; align-items: center; height: 100vh; }
        .user-box { width: 100%; max-width: 400px; padding: 20px; border: 1px solid #ddd; border-radius: 5px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); background-color: #fff; }
        .card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
            background-color: #fff;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
        }
        .card h3 {
            margin: 0;
        }
        nav {
            background-color: #007BFF;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        nav h4 {
            margin: 0;
        }
    </style>
</head>
<body>
<nav>
   <h4 class="text-center mb-4">Welcome, <?php session_start(); echo $_SESSION['username']; ?>!</h4>
</nav>
    <div class="user-container">
        <div class="user-box">
            <p style="font-family: arial;"> Your engagement with this research platform is duly noted and contributes to its overall progress.</p>
            <br />
            <h3>Subject Catalog</h3>
            <div class="card">
                <h3>Mathematics</h3>
                <p>Explore the world of numbers and equations.</p>
            </div>
            <div class="card">
                <h3>Science</h3>
                <p>Discover the wonders of the natural world.</p>
            </div>
            <div class="card">
                <h3>History</h3>
                <p>Uncover the past and its impact on the present.</p>
            </div>
            <div class="card">
                <h3>Computer Science</h3>
                <p>Learn the fundamentals of programming and IT.</p>
            </div>
        </div>
    </div>
</body>
</html>
