


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        
        <?php if (isset($_GET['error'])): ?>
            <p class="error-msg"><?= htmlspecialchars($_GET['error']) ?></p>
        <?php endif; ?>

        <form action="auth.php" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    required 
                    placeholder="Masukkan email"
                    value="<?= isset($_COOKIE['email']) ? htmlspecialchars($_COOKIE['email']) : '' ?>">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="password-wrapper">
                    <input 
                        type="password" 
                        name="password" 
                        id="password" 
                        required 
                        placeholder="Masukkan password">
                </div>
            </div>

            <div class="form-group remember-me">
                <input type="checkbox" id="remember" name="remember" <?= isset($_COOKIE['email']) ? 'checked' : '' ?>>
                <label for="remember">Remember Me</label>
            </div>

            <button type="submit" class="btn-login">Login</button>
        </form>
    </div>

    <script>
        function togglePassword() {
            const password = document.getElementById("password");
            password.type = password.type === "password" ? "text" : "password";
        }
    </script>
</body>
</html>
