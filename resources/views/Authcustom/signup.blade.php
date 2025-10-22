<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Haima - Registration</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #ffe6e6;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .ines-registeration {
      flex: 1;
    }

    .ines-card {
      border-radius: 1rem;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .ines-footer {
      background: #b00020;
      color: #fff;
      text-align: center;
      padding: 1rem 0;
      width: 100%;
    }

    .ines-footer i {
      color: #ffcccc;
    }

    .ines-header-text {
      color: #800000;
    }
  </style>
</head>
<body>
  <div class="container ines-registeration py-5">
    <h2 class="text-center ines-header-text">
      <i class="fas fa-hand-holding-droplet fa-lg"></i> Haima
    </h2>
    <p class="text-center mt-3 ines-header-text">Every drop counts. Together, we save lives.</p>

    <div class="row justify-content-center">
      <div class="col-md-8 bg-white p-4 ines-card">
        <form>
          <h2 class="text-center mb-4">Create Your Account - Save Lives</h2>

          <div class="row">
            <!-- Full Name -->
            <div class="col-md-6 mb-3">
              <label class="form-label"><i class="fas fa-user me-2"></i>Full Name<span class="text-danger">*</span></label>
              <input type="text" class="form-control" placeholder="Sinou Ines" required>
            </div>

            <!-- Email -->
            <div class="col-md-6 mb-3">
              <label class="form-label"><i class="fas fa-envelope me-2"></i>Email Address<span class="text-danger">*</span></label>
              <input type="email" class="form-control" placeholder="name@example.com" required>
            </div>

            <!-- Password -->
            <div class="col-md-6 mb-3">
              <label class="form-label"><i class="fas fa-lock me-2"></i>Password<span class="text-danger">*</span></label>
              <div class="input-group">
                <input type="password" class="form-control" id="ines-password" required>
                <span class="input-group-text bg-light" id="ines-togglePassword" style="cursor: pointer;">
                  <i class="fas fa-eye"></i>
                </span>
              </div>
            </div>

            <!-- Phone -->
            <div class="col-md-6 mb-3">
              <label class="form-label"><i class="fas fa-phone me-2"></i>Phone Number<span class="text-danger">*</span></label>
              <input type="tel" class="form-control" placeholder="+237 6XX XX XX XX" required>
            </div>

            <!-- Blood Type -->
            <div class="col-md-6 mb-3">
              <label class="form-label"><i class="fas fa-tint me-2"></i>Blood Type<span class="text-danger">*</span></label>
              <select class="form-select" required>
                <option selected disabled>Select</option>
                <option>A+</option>
                <option>A-</option>
                <option>B+</option>
                <option>B-</option>
                <option>AB+</option>
                <option>AB-</option>
                <option>O+</option>
                <option>O-</option>
              </select>
            </div>

            <!-- DOB -->
            <div class="col-md-6 mb-3">
              <label class="form-label"><i class="fas fa-calendar-alt me-2"></i>Date of Birth<span class="text-danger">*</span></label>
              <input type="date" class="form-control" required>
            </div>

            <!-- Gender -->
            <div class="col-md-6 mb-3">
              <label class="form-label"><i class="fas fa-venus-mars me-2"></i>Gender<span class="text-danger">*</span></label>
              <div class="form-check">
                <input type="radio" name="gender" value="Male" class="form-check-input" id="ines-male">
                <label for="ines-male" class="form-check-label">Male</label>
              </div>
              <div class="form-check">
                <input type="radio" name="gender" value="Female" class="form-check-input" id="ines-female">
                <label for="ines-female" class="form-check-label">Female</label>
              </div>
            </div>

            <!-- Location -->
            <div class="col-md-6 mb-3">
              <label class="form-label"><i class="fas fa-map-marker-alt me-2"></i>Location<span class="text-danger">*</span></label>
              <input type="text" class="form-control" placeholder="City / Area" required>
            </div>

            <!-- Last Donation -->
            <div class="col-12 mb-4">
              <label class="form-label"><i class="fas fa-calendar-day me-2"></i>Last Donation Day</label>
              <input type="date" class="form-control">
            </div>

            <!-- Register Button -->
            <div class="col-12 mb-3 text-center">
              <button type="submit" class="btn btn-danger px-5">
                <i class="fas fa-user-plus"></i> Register
              </button>
            </div>

            <!-- Already have an account -->
            <div class="text-center">
              <small>Already have an account? <a href="#" class="text-danger">Login</a></small>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <footer class="ines-footer">
    <p class="mb-1">&copy; 2025 <strong>Haima</strong> - All rights reserved</p>
    <small>Built with <i class="fas fa-heart me-2"></i>to save lives in Cameroon</small>
  </footer>

  <script>
    // Toggle password visibility
    document.getElementById("ines-togglePassword").addEventListener("click", function () {
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
