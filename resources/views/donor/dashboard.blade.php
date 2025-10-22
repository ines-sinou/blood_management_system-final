<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
<title>Donor Dashboard-haima</title>
<style>
body {
  background: #ffe6e6;
}

/* Sidebar */
.ines-sidebar {
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  width: 250px;
  background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));
  color: white;
  padding-top: 30px;
  box-shadow: 2px 0 5px rgba(0,0,0,0.1);
  z-index: 1000;
}
.ines-nav-link {
  color: white;
  padding: 15px 20px;
  border-radius: 0 25px 25px 0;
  transition: all 0.3s ease;
  text-decoration: none;
}
.ines-nav-link:hover, .ines-nav-link.active {
  background-color: #ffffff22;
}

/* Main Content */
.ines-main-content {
  margin-left: 250px;
  padding: 30px;
}

/* Welcome Card */
.ines-welcome-card {
  background: #800000;
  color: white;
  border-radius: 15px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.2);
  padding: 20px;
}
@media (max-width: 768px) {
  .ines-sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .ines-main-content {
    margin-left: 0;
  }
}

/* Profile Section */
.ines-profile-section {
  padding-top: 40px;
  border-top: 1px solid rgba(255,255,255,0.2);
}
.ines-profile-section img {
  width: 100px;
  height: 100px;
  object-fit: cover;
}

/* Content Sections */
.ines-content-section {
  display: none;
}
.ines-content-section.active {
  display: block;
}

/* Timeline */
.ines-timeline {
  position: relative;
  margin-left: 20px;
  padding-left: 20px;
  border-left: 3px solid #80000044;
}
.ines-timeline-item {
  position: relative;
  margin-bottom: 25px;
}
.ines-timeline-dot {
  position: absolute;
  left: -12px;
  top: 5px;
  width: 16px;
  height: 16px;
  border-radius: 50%;
}
.ines-timeline-content {
  margin-left: 10px;
}

/* Text Color */
.ines-text-maroon {
  color: #800000;
}

/* Podium */
.ines-podium div div {
  min-width: 130px;
  transition: transform 0.3s ease;
}
.ines-podium div div:hover {
  transform: translateY(-5px);
}
.ines-podium-box {
  box-shadow: 0 4px 8px rgba(0,0,0,0.2);
  transition: all 0.3s ease;
}
.ines-podium-box:hover {
  transform: translateY(-8px);
  box-shadow: 0 6px 14px rgba(0,0,0,0.3);
}

/* Card Hover */
.ines-card ul li:hover {
  background: #fff2f2;
  transform: scale(1.01);
  transition: all 0.2s ease;
}

/* Tables */
table tbody tr:hover {
  background-color: #ffe6e6;
  transform: scale(1.02);
}
.ines-bg-maroon{
    background: #800000;
}
</style>
</head>
<body>

<!-- Sidebar -->
<div class="ines-sidebar d-md-block d-none">
  <div class="text-center mb-4">
    <i class="fas fa-hand-holding-droplet fa-4x"></i>
    <h4 class="mt-2">haima</h4>
  </div>
  <nav class="nav flex-column">
    <a class="ines-nav-link active" href="#dashboard" onclick="inesShowSection('dashboard')"><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a>
    <a class="ines-nav-link" href="#history" onclick="inesShowSection('history')"><i class="fas fa-history me-2"></i> Donation History</a>
    <a class="ines-nav-link" href="#appointments" onclick="inesShowSection('appointments')"><i class="fas fa-calendar-check me-2"></i> Appointments</a>
    <a class="ines-nav-link" href="#leaderboard" onclick="inesShowSection('leaderboard')"><i class="fas fa-trophy me-2"></i> Leaderboard</a>
    <a class="ines-nav-link" href="#milestone" onclick="inesShowSection('milestone')"><i class="fas fa-chart-line me-2"></i> Milestone</a>
    <a class="ines-nav-link" href="#profile" onclick="inesShowSection('profile')"><i class="fas fa-user me-2"></i> Profile</a>
    <a class="ines-nav-link" href="#logout"><i class="fas fa-sign-out-alt me-2"></i> Logout</a>
  </nav>
  <div class="ines-profile-section mt-auto text-center">
    <img src="assets/profile.webp" class="rounded-circle mb-2" alt="">
    <p class="mb-1 fw-bold">Sinou Ines</p>
  </div>
</div>

<!-- Main Content -->
<div class="ines-main-content">

  <!-- Welcome Card -->
  <div class="ines-welcome-card mb-4 fixed">
    <button class="btn d-md-none m-3" onclick="document.querySelector('.ines-sidebar').classList.toggle('d-none')" style="background:gray;">
      <i class="fas fa-bars"></i>
    </button>
    <h2>Welcome, Sinou Ines!</h2>
    <p>Your contributions have saved <strong>12 lives</strong> so far. Keep making a difference!</p>
  </div>

  <!-- Dashboard Section -->
  <section class="ines-content-section active" id="dashboard">
    <div class="container-fluid py-4">
      <p class="text-muted">Here’s an overview of your donation journey today.</p>
       <!-- OVERVIEW CARDS -->
    <div class="row g-4 mb-4">
      <div class="col-md-3 col-6">
        <div class="card stat-card border-0 shadow-sm">
          <div class="card-body text-center">
            <i class="fas fa-tint fa-2x text-danger mb-2"></i>
            <h4 class="fw-bold">12</h4>
            <p class="text-muted mb-0">Units Donated</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="card stat-card border-0 shadow-sm">
          <div class="card-body text-center">
            <i class="fas fa-users fa-2x text-danger mb-2"></i>
            <h4 class="fw-bold">24</h4>
            <p class="text-muted mb-0">Community Members</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="card stat-card border-0 shadow-sm">
          <div class="card-body text-center">
            <i class="fas fa-trophy fa-2x text-warning mb-2"></i>
            <h4 class="fw-bold">3rd</h4>
            <p class="text-muted mb-0">Leaderboard Rank</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="card stat-card border-0 shadow-sm">
          <div class="card-body text-center">
            <i class="fas fa-heartbeat fa-2x text-danger mb-2"></i>
            <h4 class="fw-bold">36</h4>
            <p class="text-muted mb-0">Lives Saved</p>
          </div>
        </div>
      </div>
    </div>

    <!-- MAIN ROW -->
    <div class="row g-4">
      <!-- LEFT: ACTIVITY -->
      <div class="col-lg-7">
        <div class="card border-0 shadow-sm rounded-4">
          <div class="card-header bg-danger text-white fw-bold">
            <i class="fas fa-clock me-2"></i>Recent Donation Activity
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <span><i class="fas fa-calendar-day text-danger me-2"></i>12 Oct 2025</span>
                <span class="badge bg-success">Completed</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <span><i class="fas fa-calendar-day text-danger me-2"></i>05 Sept 2025</span>
                <span class="badge bg-success">Completed</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <span><i class="fas fa-calendar-day text-danger me-2"></i>18 Jul 2025</span>
                <span class="badge bg-success">Completed</span>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- RIGHT: GOAL & PROFILE -->
      <div class="col-lg-5">
        <div class="card border-0 shadow-sm rounded-4 text-center">
          <div class="card-body">
            <img src="assets/profile.webp" class="rounded-circle border border-danger mb-3" width="100" height="100" alt="Profile">
            <h5 class="fw-bold">Your Next Goal</h5>
            <p class="text-muted">You’re <strong>5 donations</strong> away from Gold Donor status!</p>
            <div class="progress mb-2" style="height: 10px;">
              <div class="progress-bar bg-danger" style="width: 70%;"></div>
            </div>
            <small class="text-muted">70% Completed</small>
          </div>
        </div>
      </div>
    </div>

    <!-- DONATION INSIGHTS -->
    <div class="row mt-5">
      <div class="col-12">
        <div class="card border-0 shadow-sm rounded-4 p-4">
          <h5 class="fw-bold text-danger mb-3"><i class="fas fa-chart-line me-2"></i>Donation Insights</h5>
          <p class="text-muted">Track your progress and compare with previous months (Chart placeholder).</p>
          <div class="text-center py-4 bg-light rounded-3 text-muted">📊 Chart Coming Soon</div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- History Section -->
  <section class="ines-content-section" id="history">
  <div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h3 class="fw-bold ines-text-maroon">
        <i class="fas fa-history me-2 text-danger"></i>Donation History
      </h3>
      <button class="btn btn-danger">
        <i class="fas fa-plus me-2"></i>New Donation
      </button>
    </div>

    <!-- TIMELINE SECTION -->
    <div class="card border-0 shadow-sm rounded-4 mb-4">
      <div class="card-body">
        <h5 class="fw-bold text-danger mb-3">
          <i class="fas fa-stream me-2"></i>Recent Donations
        </h5>

        <div class="ines-timeline">
          <div class="ines-timeline-item">
            <div class="ines-timeline-dot bg-danger"></div>
            <div class="ines-timeline-content">
              <h6 class="fw-bold mb-0">12 Oct 2025</h6>
              <p class="text-muted mb-1">Donated 1 Unit at Yaoundé Central Hospital</p>
              <span class="badge bg-success">Completed</span>
            </div>
          </div>

          <div class="ines-timeline-item">
            <div class="ines-timeline-dot bg-danger"></div>
            <div class="ines-timeline-content">
              <h6 class="fw-bold mb-0">05 Sept 2025</h6>
              <p class="text-muted mb-1">Donated 1 Unit at Douala Blood Bank</p>
              <span class="badge bg-success">Completed</span>
            </div>
          </div>

          <div class="ines-timeline-item">
            <div class="ines-timeline-dot bg-secondary"></div>
            <div class="ines-timeline-content">
              <h6 class="fw-bold mb-0">20 Nov 2025</h6>
              <p class="text-muted mb-1">Scheduled for Buea Regional Hospital</p>
              <span class="badge bg-warning text-dark">Upcoming</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- TABLE SECTION -->
    <div class="card border-0 shadow-sm rounded-4">
      <div class="card-body">
        <h5 class="fw-bold text-danger mb-3">
          <i class="fas fa-table me-2"></i>Full Donation Records
        </h5>
        <div class="table-responsive">
          <table class="table table-hover align-middle">
            <thead class="table-danger text-center">
              <tr>
                <th>Date</th>
                <th>Location</th>
                <th>Volume (ml)</th>
                <th>Status</th>
                <th>Certificate</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <tr>
                <td>12 Oct 2025</td>
                <td>Yaoundé Central Hospital</td>
                <td>450</td>
                <td><span class="badge bg-success">Completed</span></td>
                <td><button class="btn btn-sm btn-outline-danger"><i class="fas fa-download"></i></button></td>
              </tr>
              <tr>
                <td>05 Sept 2025</td>
                <td>Douala Blood Bank</td>
                <td>500</td>
                <td><span class="badge bg-success">Completed</span></td>
                <td><button class="btn btn-sm btn-outline-danger"><i class="fas fa-download"></i></button></td>
              </tr>
              <tr>
                <td>18 Jul 2025</td>
                <td>Buea Regional Hospital</td>
                <td>450</td>
                <td><span class="badge bg-secondary">Pending</span></td>
                <td><button class="btn btn-sm btn-outline-secondary" disabled><i class="fas fa-clock"></i></button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Appointments Section -->
 <section class="ines-content-section" id="appointments">
  <div class="container-fluid py-4">
    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center ines-text-maroon mb-4">
      <h3 class="fw-bold ines-text-maroon">
        <i class="fas fa-calendar-check me-2 text-danger"></i>Your Appointments
      </h3>
      <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#scheduleModal">
        <i class="fas fa-plus me-2"></i>New Appointment
      </button>
    </div>

    <!-- UPCOMING APPOINTMENTS -->
    <div class="row g-4 mb-4">
      <div class="col-md-6">
        <div class="card ines-card p-4">
          <h5 class="fw-bold text-danger mb-2">Next Appointment</h5>
          <p class="text-muted mb-2"><strong>Date:</strong> 20 Nov 2025</p>
          <p class="text-muted mb-2"><strong>Location:</strong> Buea Regional Hospital</p>
          <p class="text-muted mb-2"><strong>Status:</strong> <span class="badge bg-warning text-dark">Scheduled</span></p>
          <div class="d-flex mt-3">
            <button class="btn btn-outline-danger me-2"><i class="fas fa-edit me-1"></i> Reschedule</button>
            <button class="btn btn-danger"><i class="fas fa-times me-1"></i> Cancel</button>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card ines-card p-4">
          <h5 class="fw-bold text-danger mb-2">Second Appointment</h5>
          <p class="text-muted mb-2"><strong>Date:</strong> 05 Dec 2025</p>
          <p class="text-muted mb-2"><strong>Location:</strong> Yaoundé Central Hospital</p>
          <p class="text-muted mb-2"><strong>Status:</strong> <span class="badge bg-secondary">Upcoming</span></p>
          <div class="d-flex mt-3">
            <button class="btn btn-outline-danger me-2"><i class="fas fa-edit me-1"></i> Reschedule</button>
            <button class="btn btn-danger"><i class="fas fa-times me-1"></i> Cancel</button>
          </div>
        </div>
      </div>
    </div>

    <!-- FULL APPOINTMENT TABLE -->
    <div class="card ines-card p-4">
      <h5 class="fw-bold text-danger mb-3"><i class="fas fa-table me-2"></i>All Appointments</h5>
      <div class="table-responsive">
        <table class="table table-hover align-middle text-center">
          <thead class="table-danger">
            <tr>
              <th>Date</th>
              <th>Location</th>
              <th>Time</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>20 Nov 2025</td>
              <td>Buea Regional Hospital</td>
              <td>10:00 AM</td>
              <td><span class="badge bg-warning text-dark">Scheduled</span></td>
              <td>
                <button class="btn btn-sm btn-outline-danger me-1"><i class="fas fa-edit"></i></button>
                <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
              </td>
            </tr>
            <tr>
              <td>05 Dec 2025</td>
              <td>Yaoundé Central Hospital</td>
              <td>02:00 PM</td>
              <td><span class="badge bg-secondary">Upcoming</span></td>
              <td>
                <button class="btn btn-sm btn-outline-danger me-1"><i class="fas fa-edit"></i></button>
                <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
              </td>
            </tr>
            <tr>
              <td>12 Oct 2025</td>
              <td>Douala Blood Bank</td>
              <td>11:00 AM</td>
              <td><span class="badge bg-success">Completed</span></td>
              <td>
                <button class="btn btn-sm btn-outline-secondary" disabled><i class="fas fa-check"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

  <!-- Leaderboard Section -->
 <section class="ines-content-section" id="leaderboard">
         <div class="container-fluid py-4">
    <div class="row g-4">
      
      <!-- LEFT SIDE: ACCOMPLISHMENTS -->
      <div class="col-lg-4">
        <div class="card shadow-lg border-0 rounded-4 p-4 h-100 ines-bg-maroon text-white">
          <h4 class="fw-bold mb-3">
            <i class="fas fa-medal me-2 text-warning"></i>Your Accomplishments
          </h4>
          <div class="d-flex align-items-center mb-3">
            <img src="assets/profile.webp" alt="Profile" class="rounded-circle me-3" width="70" height="70">
            <div>
              <h5 class="mb-0">Sinou Ines</h5>
              <small class="text-light">Silver Donor</small>
            </div>
          </div>
          <p class="fs-6 mb-3">
            🎉 You ranked <strong>3rd</strong> in the <em>“New Donor Wave”</em> this quarter.
          </p>
          <p>🏅 Earned <strong>Silver Donor</strong> badge for 10 lifetime donations.</p>

          <div class="progress my-3" style="height: 10px;">
            <div class="progress-bar bg-warning" style="width: 70%;"></div>
          </div>
          <small>70% progress toward next level (Gold Donor)</small>

          <div class="mt-4">
            <img src="assets/badge1.png" width="50" class="me-2" alt="">
            <img src="assets/badge2.png" width="50" class="me-2" alt="">
            <img src="assets/badge3.png" width="50" alt="">
          </div>
        </div>
      </div>

      <!-- RIGHT SIDE: LEADERBOARD -->
      <div class="col-lg-8">
        <div class="card shadow-lg border-0 rounded-4 p-4">
          <h4 class="fw-bold text-danger mb-4">
            <i class="fas fa-trophy text-warning"></i> Weekly Donor Leaderboard
          </h4>

          <!-- TOP 3 IN STAIR FORM -->
          <div class="d-flex justify-content-center align-items-end mb-4 podium">
            <!-- SECOND PLACE -->
            <div class="text-center me-3">
              <div class="bg-secondary text-white rounded-3 px-3 py-3 mb-2 ines-podium-box" style="height:80px;">
                <img src="assets/profile.webp"class="rounded-circle border border-light mb-2" width="50" height="50" alt="">
                <div>2️⃣<br><strong>Marie</strong><br><small>18 Donations</small></div>
              </div>
            </div>
            <!-- FIRST PLACE -->
            <div class="text-center">
              <div class="bg-warning text-dark rounded-3 px-3 py-4 mb-2 ines-podium-box" style="height:100px;">
                <img src="assets/profile.webp" class="rounded-circle border border-dark mb-2" width="60" height="60" alt="">
                <div>🥇<br><strong>Alice</strong><br><small>20 Donations</small></div>
              </div>
            </div>
            <!-- THIRD PLACE -->
            <div class="text-center ms-3">
              <div class="bg-danger text-white rounded-3 px-3 py-3 mb-2 ines-podium-box" style="height:70px;">
                <img src="assets/boyprofile.png" class="rounded-circle border border-light mb-2" width="50" height="50" alt="">
                <div>3️⃣<br><strong>John</strong><br><small>15 Donations</small></div>
              </div>
            </div>
          </div>

          <!-- REST OF THE LEADERBOARD -->
          <div class="table-responsive">
            <table class="table table-sm align-middle text-center">
              <thead class="table-danger">
                <tr>
                  <th>Rank</th>
                  <th>Profile</th>
                  <th>Name</th>
                  <th>Region</th>
                  <th>Donations</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>4</td>
                  <td><img src="assets/profile.webp" class="rounded-circle" width="40" height="40" alt=""></td>
                  <td>Sarah</td>
                  <td>North</td>
                  <td>12</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td><img src="assets/boyprofile.png" class="rounded-circle" width="40" height="40" alt=""></td>
                  <td>Paul</td>
                  <td>West</td>
                  <td>10</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td><img src="assets/profile.webp" class="rounded-circle" width="40" height="40" alt=""></td>
                  <td>Emma</td>
                  <td>South</td>
                  <td>8</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div>
    </section>

  <!-- Milestone Section -->
 <section class="ines-content-section" id="milestone">
  <div class="container-fluid py-4">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h3 class="fw-bold ines-text-maroon">
        <i class="fas fa-calendar-check me-2"></i>Your Donation Goals
      </h3>
      <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#newGoalModal">
        <i class="fas fa-plus me-2"></i>Set New Goal
      </button>
    </div>

    <!-- ACTIVE GOALS -->
    <div class="row g-4 mb-4">
      <div class="col-md-6">
        <div class="card ines-card p-4">
          <h5 class="fw-bold text-danger mb-3">Goal: Donate 1 Unit This Month</h5>
          <p class="text-muted mb-2"><strong>Target Date:</strong> 31 Oct 2025</p>
          <p class="text-muted mb-2"><strong>Status:</strong> <span class="badge bg-warning text-dark">In Progress</span></p>

          <div class="progress mb-3" style="height: 15px;">
            <div class="progress-bar bg-danger" style="width: 50%;"></div>
          </div>
          <small class="text-muted">50% completed</small>

          <div class="mt-3 d-flex justify-content-between">
            <button class="btn btn-outline-danger"><i class="fas fa-edit me-1"></i> Edit Goal</button>
            <button class="btn btn-danger"><i class="fas fa-times me-1"></i> Cancel Goal</button>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card ines-card p-4">
          <h5 class="fw-bold text-danger mb-3">Goal: Schedule 2 Donations This Quarter</h5>
          <p class="text-muted mb-2"><strong>Target Date:</strong> 31 Dec 2025</p>
          <p class="text-muted mb-2"><strong>Status:</strong> <span class="badge bg-success">On Track</span></p>

          <div class="progress mb-3" style="height: 15px;">
            <div class="progress-bar bg-success" style="width: 70%;"></div>
          </div>
          <small class="text-muted">70% completed</small>

          <div class="mt-3 d-flex justify-content-between">
            <button class="btn btn-outline-danger"><i class="fas fa-edit me-1"></i> Edit Goal</button>
            <button class="btn btn-danger"><i class="fas fa-times me-1"></i> Cancel Goal</button>
          </div>
        </div>
      </div>
    </div>

    <!-- FULL GOALS TABLE -->
    <div class="card ines-card p-4">
      <h5 class="fw-bold text-danger mb-3"><i class="fas fa-table me-2"></i>All Donation Goals</h5>
      <div class="table-responsive">
        <table class="table table-hover align-middle text-center">
          <thead class="table-danger">
            <tr>
              <th>Goal</th>
              <th>Target Date</th>
              <th>Progress</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Donate 1 Unit This Month</td>
              <td>31 Oct 2025</td>
              <td>
                <div class="progress" style="height: 10px;">
                  <div class="progress-bar bg-danger" style="width: 50%;"></div>
                </div>
                <small>50%</small>
              </td>
              <td><span class="badge bg-warning text-dark">In Progress</span></td>
              <td>
                <button class="btn btn-sm btn-outline-danger me-1"><i class="fas fa-edit"></i></button>
                <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
              </td>
            </tr>
            <tr>
              <td>Schedule 2 Donations This Quarter</td>
              <td>31 Dec 2025</td>
              <td>
                <div class="progress" style="height: 10px;">
                  <div class="progress-bar bg-success" style="width: 70%;"></div>
                </div>
                <small>70%</small>
              </td>
              <td><span class="badge bg-success">On Track</span></td>
              <td>
                <button class="btn btn-sm btn-outline-danger me-1"><i class="fas fa-edit"></i></button>
                <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
              </td>
            </tr>
            <tr>
              <td>Complete 5 Donations This Year</td>
              <td>31 Dec 2025</td>
              <td>
                <div class="progress" style="height: 10px;">
                  <div class="progress-bar bg-secondary" style="width: 20%;"></div>
                </div>
                <small>20%</small>
              </td>
              <td><span class="badge bg-secondary">Not Started</span></td>
              <td>
                <button class="btn btn-sm btn-outline-danger me-1"><i class="fas fa-edit"></i></button>
                <button class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</section>


  <!-- Profile Section -->
  <section class="ines-content-section" id="profile">
    <div class="container-fluid py-4">
      <!-- Profile cards: add ines-card -->
    </div>
  </section>

</div>

<script>
function inesShowSection(id){
  const sections = document.querySelectorAll('.ines-content-section');
  const links = document.querySelectorAll('.ines-nav-link');
  sections.forEach(sec => sec.classList.remove('active'));
  document.getElementById(id).classList.add('active');
  links.forEach(link => link.classList.remove('active'));
  event.target.closest('a').classList.add('active');
}
</script>

</body>
</html>
