<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body { font-family: Arial, sans-serif; }
        .signup-container { display: flex; justify-content: center; align-items: center; height: 100vh; }
        .signup-box { width: 100%; max-width: 400px; padding: 20px; border: 1px solid #ddd; border-radius: 5px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); }
        .signup-button { background-color: #4CAF50; color: white; width: 100%; padding: 10px; border: none; cursor: pointer; }
        .form-control:focus { border-color: blue !important; box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25) !important; }
    </style>
</head>
<body>
    <div class="signup-container">
        <div class="signup-box">
            <h4 class="text-center mb-4">Sign Up</h4>
            <form id="signup-form" action="process_signup.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" id="username" name="new_username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="new_email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" id="password" name="new_password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="full_name" class="form-label">Full Name:</label>
                    <input type="text" id="full_name" name="new_full_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="birth_date" class="form-label">Date of Birth:</label>
                    <input type="date" id="birth_date" name="new_birth_date" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="security_question" class="form-label">Why did you come to this site?</label>
                    <input type="text" id="security_question" name="new_security_question" class="form-control">
                </div>
                <button class="signup-button" type="submit">Sign Up</button>
                <p class="text-center mt-3">By clicking Sign Up, you agree to our <a href="#" id="showTerms">Terms and Conditions</a>.</p>
                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" id="agreeCheck" required>
                    <label class="form-check-label" for="agreeCheck">I agree to the Terms and Conditions</label>
                </div>
            </form>
        </div>
    </div>

    <!-- Terms and Conditions Modal -->
    <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="termsModalLabel">Terms and Conditions</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Add your terms and conditions content here -->
                    This is where the terms and conditions would be displayed.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Show the Terms and Conditions modal
        document.getElementById("showTerms").addEventListener("click", function() {
            $('#termsModal').modal('show');
        });
    </script>
</body>
</html>
