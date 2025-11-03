<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <title>HAIMA Landing Page</title>

  <style>
    body, html {
      margin: 0;
      height: 100%;
      background: #fdfdfd;
      overflow-x: hidden;
    }

    .navbar {
      min-height: auto;
      background: #800000;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 100;
    }

    /* Hero Section */
    .ines-hero-section {
      padding-top: 120px;
      padding-bottom: 60px;
      background: #ffe6e6;
      color: #800000;
      min-height: 100vh;
      overflow: hidden;
    }

    .ines-hero-text h1 {
      font-size: 3.2rem;
      line-height: 1.2;
      animation: fadeInText 1.5s ease forwards;
      opacity: 0;
    }

    .ines-hero-text p {
      animation: fadeInText 1.8s ease forwards;
      opacity: 0;
      font-size: 1.2rem;
    }

    .btn-primary {
      background: #fff;
      color: #800000;
      border: none;
      font-weight: 600;
      border-radius: 30px;
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background: #ffcccc;
      color: #800000;
    }

    /* Splash Image & Drop */
    #ines-splashWrapper {
      position: relative;
      height: 480px;
      max-width: 100%;
      margin: 0 auto;
    }
    .ines-btn-maroon{
     background: #fff;
      color: #800000;
      border: none;
      font-weight: 600;
      border-radius: 10px;
      transition: all 0.3s ease;
    }

    #ines-drop {
      position: absolute;
      width: 35px;
      height: 55px;
      background: radial-gradient(circle at 30% 30%, #ff6666, #800000);
      border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
      box-shadow: 0 0 20px rgba(255, 50, 50, 0.9);
      opacity: 0;
      z-index: 10;
    }

    #ines-splashImage {
      width: 100%;
      height: 460px;
      object-fit: contain;
      transition: opacity 1s ease-in-out, transform 1s ease-in-out;
      opacity: 0;
      transform: scale(0.95);
    }

    #ines-splashImage.show {
      opacity: 1;
      transform: scale(1);
    }

    .ines-ripple {
      position: absolute;
      border-radius: 50%;
      background: rgba(255, 0, 0, 0.35);
      transform: translate(-50%, -50%) scale(0);
      animation: rippleEffect 1.2s ease-out forwards;
      pointer-events: none;
      z-index: 0;
    }

    @keyframes fadeInText {
      to { opacity: 1; transform: translateY(0); }
      from { opacity: 0; transform: translateY(20px); }
    }

    @keyframes fall {
      0% { transform: translateY(0); opacity: 1; }
      90% { transform: translateY(230px); opacity: 1; }
      100% { transform: translateY(240px); opacity: 0; }
    }

    @keyframes rippleEffect {
      to { transform: translate(-50%, -50%) scale(4); opacity: 0; }
    }

    @media (max-width: 992px) {
      #ines-splashWrapper { height: 340px; }
      #ines-splashImage { height: 320px; }
    }

    @media (max-width: 576px) {
      #ines-splashWrapper { height: 260px; }
      #ines-splashImage { height: 240px; }
    }

    /* About Section */
    .ines-about-section {
      background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));
      color: #fff;
      padding: 80px 0;
    }

    .ines-glass-card {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 15px;
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      border: 1px solid rgba(255, 255, 255, 0.18);
    }

    .ines-how-it-works {
      background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));
    }

    .ines-step-card {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 12px;
      backdrop-filter: blur(6px);
      transition: transform 0.3s ease;
      border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .ines-step-card:hover {
      transform: translateY(-5px);
    }

    .ines-step-icon {
      color: #ff4d4d;
    }
     .accordion-button{
      background-color: #fff;
      color: #dc3545;
      font-weight: 600;
    }
    .accordion-button :not(.collapsed){
      background-color: #dc3545;
      color: #fff;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a href="#" class="navbar-brand"><i class="fas fa-hand-holding-droplet fa-2x me-2"></i>HAIMA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a href="#home" class="nav-link active"><i class="fas fa-home me-2"></i>Home</a></li>
          <li class="nav-item"><a href="#about" class="nav-link"><i class="fas fa-circle-info me-2"></i>About</a></li>
          <li class="nav-item"><a href="#features" class="nav-link"><i class="fas fa-puzzle-piece me-2"></i>Features</a></li>
          <li class="nav-item"><a href="#how" class="nav-link"><i class="fas fa-gears me-2"></i>How it Works</a></li>
          <li class="nav-item"><a href="#faqs" class="nav-link"><i class="fas fa-circle-question me-2"></i>FAQs</a></li>
          <li class="nav-item"><a href="#contact" class="nav-link"><i class="fas fa-phone me-2"></i>Contact</a></li>
        </ul>
      </div>
        <a href="{{ route('login') }}" class="btn ines-btn-maroon">Login</a>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="ines-hero-section d-flex align-items-center" id="home">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-6 ines-hero-text">
          <h1 class="fw-bold display-4 mb-3">Donate Blood, <br> Save a Life Today ❤️</h1>
          <p class="lead mb-4">HAIMA connects donors and hospitals in real-time — because every second counts when saving lives.</p>
          <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-4 shadow">
            <i class="fas fa-hand-holding-heart me-2"></i> Get Started
          </a>
        </div>

        <div class="col-lg-5 text-center mt-5 mt-lg-0">
          <div id="ines-splashWrapper">
            <div id="ines-drop"></div>
            <img id="ines-splashImage" src="assets/blood-donation.png" alt="Blood donation animation">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="ines-about-section py-5" id="about" >
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-md-0">
          <img src="assets/boysuffering.webp" class="img-fluid rounded" alt="">
        </div>
        <div class="col-md-6 text-white">
          <div class="ines-glass-card text-center p-4">
            <h2 class="mb-4 fw-bold">Why We Exist</h2>
            <p class="lead">Behind Haima lies a story of pain and purpose. In a Hospital, a young boy lost his life because plateletss were not available in time. The staff did their best, but blood  transfusion wasn't enough. His family searched desperatly, contacted every connection- but by the time they found the right component... it was too late
            </p>
            <p>
              Haima was born from that loss. Our platform ensures no one else loses a loved one because they couldn't locate blood or components on time. We connect donors, labs, and hospitals in real-time because time saves lives 
            </p>
            <div class="mt-4">
              <i class="fas fa-heartbeat fa-2x me-3 text-danger"></i>
              <i class="fas fa-hands-helping fa-2x text-danger"></i>
              <i class="fas fa-tint fa-2x text-danger"></i>
            </div>
          </div>
        </div>
      </div>
        <h2 class="display-5 mb-4">
            Be the Reason Someone Lives
        </h2>
        <p class="lead mb-4">Join Our Mission to make blood and its compnents accessible to every life in need</p>
        <a href="{{ route('register') }}" class="btn btn-light btn-lg">Become a Donor</a>
    </div>
    </div>
  </section>
 <!-- features -->
  <section id="features" class="py-5 btn-light">
    <div class="container text-center">
      <h2 class="fw-bold mb-4">
        Why Choose <span class="text-danger">HAIMA</span>?
      </h2>
      <p class="mb-5 text-muted">HAIMA simplifies blood donation and component tracking, making it faster and safer for patient in need</p>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="p-4 shadow rounded h-100 bg-white">
            <i class="fas fa-heartbeat fa-3x text-danger mb-3"></i>
            <h5 class="fw-bold">Smart Blood Matching</h5>
            <p class="text-muted">Automatically matches blood type and component available in seconds</p>
          </div>
        </div>
         <div class="col-md-4">
          <div class="p-4 shadow rounded h-100 bg-white">
            <i class="fas fa-clock fa-3x text-danger mb-3"></i>
            <h5 class="fw-bold">Real-Time Inventory</h5>
            <p class="text-muted">View available units instantly across connected hospitals and donors</p>
          </div>
        </div>
         <div class="col-md-4">
          <div class="p-4 shadow rounded h-100 bg-white">
            <i class="fas fa-bell fa-3x text-danger mb-3"></i>
            <h5 class="fw-bold">Automated Notifications</h5>
            <p class="text-muted">Get alerts  for urgent blood needs, donation appointments, and updates</p>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <!-- How it Works -->
  <section class="ines-how-it-works py-5 text-center text-white" id="how" >
    <div class="container">
      <h2 class="fw-bold mb-4">How it Works</h2>
      <p class="mb-5">A simple, secure and life-saving process</p>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="ines-step-card p-4">
            <div class="ines-step-icon mb-3"><i class="fas fa-user-plus fa-2x"></i></div>
            <h5>1. Donor Registration</h5>
            <p>Donors can easily create an account to start saving lives.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="ines-step-card p-4">
            <div class="ines-step-icon mb-3"><i class="fas fa-envelope-open-text fa-2x"></i></div>
            <h5>2. Staff Access Request</h5>
            <p>Hospital and Lab technicians must contact admin for account setup.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="ines-step-card p-4">
            <div class="ines-step-icon mb-3"><i class="fas fa-heartbeat fa-2x"></i></div>
            <h5>3. Start Saving Lives</h5>
            <p>Donors give blood. Hospitals manage components. Patients benefit.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
   <section class="py-5 bg-light" id="faqs" >
    <div class="container">
      <h2 class="text-center">Frequently Asked Questions</h2>
      <div class="accordion" id="faqAccordion">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1">
              How to become a blood donor?
            </button>
          </h2>
          <div  id="faqCollapse1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Register through our platform, complete your profile, and once verified you'll be eligible to donate
            </div>
          </div>
        </div>
           <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2">
              Can I request a specific blood component?
            </button>
          </h2>
          <div  id="faqCollapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Yes! You can select the component (plasma, platelets, etc.) when submitting a request
            </div>
          </div>
        </div>
           <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3">
              How secure is my information?
            </button>
          </h2>
          <div  id="faqCollapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Your data is encrypted and securely stored. We respect your privacy and follow strict data protection policies
            </div>
          </div>
        </div>
           <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4">
              How do I cancel or reschedule my appointment?
            </button>
          </h2>
          <div  id="faqCollapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Simply log in and go to your dashboard to manage your appointments easily
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
    <footer class="text-white pt-5" style="background:#b00020;">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4">
          <h4 class="fw-bold">Haima</h4>
          <p>A platform dedicated to improving access to blood and its components in Cameroon through smart digital solutions</p>
        </div>
        <div class="col-md-4 mb-4">
          <h5 class="fw-bold">Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="#about" class="text-white text-decoration-none">About US</a></li>
             <li><a href="#features" class="text-white text-decoration-none">features</a></li>
              <li><a href="#how" class="text-white text-decoration-none">How it works</a></li>
               <li><a href="#faqs" class="text-white text-decoration-none">FAQs</a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-4">
          <h5 class="fw-bold">Contact</h5>
          <p><i class="fas fa-envelope me-2"></i>support@haima.org</p>
          <p><i class="fas fa-phone me-2"></i>+237 676 454 328</p>
          <p><i class="fas fa-map-marker-alt me-2"></i>Yaounde, Cameroon</p>
        </div>
      </div>
      <div class="text-center py-3 border-top mt-3">
        <small>&copy; 2025 Haima. All rights reserved</small>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const drop = document.getElementById('ines-drop');
    const splash = document.getElementById('ines-splashImage');
    const wrapper = document.getElementById('ines-splashWrapper');

    const splashImages = [
      'assets/blood-donation.png',
      'assets/Zw.webp',
      'assets/man donating blood.png',
      'assets/Blood-Donation-PNG-Clipart.webp',
      'assets/blood-donation-camp.webp'
    ];

    let index = 0;

    function animateDrop() {
      const rect = wrapper.getBoundingClientRect();
      drop.style.left = (rect.width / 2 - 14) + 'px';
      drop.style.top = '0px';
      drop.style.opacity = 1;
      drop.style.animation = 'fall 2s ease-in forwards';

      drop.addEventListener('animationend', () => {
        drop.style.opacity = 0;
        splash.src = splashImages[index];
        splash.classList.add('show');

        const ripple = document.createElement('div');
        ripple.className = 'ines-ripple';
        ripple.style.top = '50%';
        ripple.style.left = '50%';
        wrapper.appendChild(ripple);

        setTimeout(() => {
          ripple.remove();
          splash.classList.remove('show');
          drop.style.animation = 'none';
          void drop.offsetWidth;
          index = (index + 1) % splashImages.length;
          animateDrop();
        }, 2500);
      }, { once: true });
    }

    window.addEventListener('load', animateDrop);
    
  </script>
</body>
</html>
