<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Haima - Login</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background: linear-gradient(135deg, #ffe6e6, #fff);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow-x: hidden;
      position: relative;
    }

    /* Subtle falling blood drops */
    .ines-blood-drop {
      position: absolute;
      top: -10px;
      width: 10px;
      height: 15px;
      background: #b00020;
      border-radius: 50% 50% 60% 60%;
      opacity: 0.7;
      animation: ines-fall 6s linear infinite;
    }

    @keyframes ines-fall {
      0% {
        transform: translateY(0);
        opacity: 0.8;
      }
      100% {
        transform: translateY(100vh);
        opacity: 0;
      }
    }

    .ines-card {
      border-radius: 1rem;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
      overflow: hidden;
    }

    .ines-left-banner {
      background: linear-gradient(180deg, #800000, #b00020);
      color: #fff;
      text-align: center;
      position: relative;
    }

    .ines-left-banner i {
      font-size: 3rem;
      color: #ffcccc;
      text-shadow: 0 0 10px rgba(255, 0, 0, 0.6);
      animation: ines-glowPulse 2s ease-in-out infinite;
    }

    @keyframes ines-glowPulse {
      0%, 100% {
        text-shadow: 0 0 10px rgba(255, 0, 0, 0.6);
      }
      50% {
        text-shadow: 0 0 20px rgba(255, 50, 50, 0.9);
      }
    }

    .ines-info-box i {
      color: #b00020;
    }

    .ines-footer {
      background: #b00020;
      font-size: 0.9rem;
      padding: 1rem 0;
      color: #fff;
    }

    @media (max-width: 768px) {
      .ines-left-banner {
        display: none;
      }
    }
  </style>
</head>
<body>
  <!-- Falling drops -->
  <div class="ines-blood-drop" style="left:10%; animation-delay: 0s;"></div>
  <div class="ines-blood-drop" style="left:30%; animation-delay: 2s;"></div>
  <div class="ines-blood-drop" style="left:60%; animation-delay: 1s;"></div>
  <div class="ines-blood-drop" style="left:80%; animation-delay: 3s;"></div>

  <div class="container ines-login-section">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="ines-card">
          <div class="row g-0">
            <!-- Left Banner -->
            <div class="col-md-5 ines-left-banner d-flex flex-column justify-content-center align-items-center p-4">
              <i class="fas fa-hand-holding-droplet mb-3"></i>
              <h2>Haima</h2>
              <p class="mt-3">Every drop counts.<br>Together, we save lives.</p>
            </div>

            <!-- Login Form -->
            <div class="col-md-7">
              <div class="card-body p-5">
                <h3 class="mb-4 text-center text-danger">Login to your Haima account</h3>
                <form>
                  <div class="mb-3">
                    <label class="form-label">
                      <i class="fas fa-envelope me-2"></i>Email Address <span class="text-danger">*</span>
                    </label>
                    <input type="email" class="form-control" placeholder="name@example.com" required>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">
                      <i class="fas fa-lock me-2"></i>Password <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                      <input type="password" id="ines-password" class="form-control" required>
                      <span class="input-group-text bg-light" id="ines-togglePassword" style="cursor:pointer;">
                        <i class="fas fa-eye"></i>
                      </span>
                    </div>
                  </div>

                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="ines-remember">
                      <label for="ines-remember" class="form-check-label">Remember me</label>
                    </div>
                    <a href="#" class="text-decoration-none text-danger">Forgot Password?</a>
                  </div>

                  <div class="d-grid">
                    <button type="submit" class="btn btn-danger">Login</button>
                  </div>
                </form>

                <div class="ines-info-box mt-4">
                  <p><i class="fas fa-lock me-2"></i>Your data is protected and encrypted</p>
                  <p><i class="fas fa-headset me-2"></i>Need help? Contact our support team anytime</p>
                </div>

                <p class="text-center mt-4">
                  Don't have an account?
                  <a href="{{ route('register') }}" class="text-danger fw-bold">Register</a>
                </p>
              </div>
            </div>
          </div>
        </div>

        <footer class="container-fluid text-center ines-footer mt-4 rounded-bottom fixed-bottom">
          <p class="mb-1">&copy; 2025 <strong>Haima</strong> — All rights reserved</p>
          <small>Built with ❤️ to save lives in Cameroon</small>
        </footer>
      </div>
    </div>
  </div>

  <script>
    // Toggle password visibility
    document.getElementById("ines-togglePassword").addEventListener("click", function() {
      const password = document.getElementById("ines-password");
      const icon = this.querySelector("i");
      if (password.type === "password") {
        password.type = "text";
        icon.classList.replace("fa-eye", "fa-eye-slash");
      } else {
        password.type = "password";
        icon.classList.replace("fa-eye-slash", "fa-eye");
      }
    });
  </script>
</body>
</html>
