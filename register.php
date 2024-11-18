<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">
    <div class="bg-white p-4 rounded shadow-lg" style="width: 400px;">
        <h2 class="text-center mb-4 text-dark">Register</h2>
        <form method="POST" action="register.php" onsubmit="return handleRegister(event)">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
        <br>
        <h6><a href="login.php">Sudah Punya Akun?</a></h6>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function handleRegister(event) {
            event.preventDefault(); // Mencegah pengiriman form biasa

            // Simulasi pengiriman data ke server dan berhasil
            const isRegistered = true; // Anda bisa mengganti dengan respons dari server

            if (isRegistered) {
                alert('Registrasi berhasil! Anda akan dialihkan ke halaman login.');
                window.location.href = "login.html"; // Redirect ke halaman login
            } else {
                alert('Registrasi gagal! Silakan coba lagi.');
            }
        }
    </script>
</body>
</html>
