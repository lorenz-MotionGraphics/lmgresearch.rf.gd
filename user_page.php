<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <title>User Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body { font-family: Arial, sans-serif; }
        .user-container { display: flex; justify-content: center; align-items: center; height: 100vh; }
        .user-box { width: 100%; max-width: 400px; padding: 20px; border: 1px solid #ddd; border-radius: 5px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); }
    </style>
</head>
<body>
    <div class="user-container">
        <div class="user-box">
            <h4 class="text-center mb-4">Welcome, <?php session_start(); echo $_SESSION['username']; ?>!</h4>
            <p style="font-family: arial;"> Your engagement with this research platform is duly noted and contributes to its overall progress.</p>
            <br />
            <p>Database administrator</p>
            <p>Cyber security professional</p>
            <p>Systems integration professional</p>
            <p>IT audit analyst</p>
            <p>IT sales professional</p>
            <p>Software tester</p>
            <p>Computer programmer</p>
            <p>Network Engineer</p>
            <p>Network Administrator</p>
            <p>Systems Engineer</p>
            <p>Data privacy officer</p>
            <p>Computer technician</p>
            <p>IT tech support</p>
            <p>IT security specialist</p>
        </div>
    </div>
</body>
</html>
