<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCC Home Page</title>
    
    <!-- Injects your single unified app.css file -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @PwaHead <!-- Injects the PWA manifest reference strings automatically -->

</head>
<body>

    <!-- Main Content Container -->
    <div class="container">

     <!-- Header featuring local logo asset and university title -->
    <div class="header">
        <div class="header-content">
            <!-- Injects your local logo.png file dynamically -->
            <img src="{{ asset('images/ucc logo.jpg') }}" alt="UCC Logo" class="header-logo">
            <h1>University of the Commonwealth Caribbean</h1>
        </div>
    </div>

   



        <!-- Dashboard Navigation Row Links -->
        <div class="nav-row">
            <a href="/" class="nav-link active">🏡 Home</a><!--Link to the home page-->
            <a href="/faculty-directory" class="nav-link">👥 Faculty Directory</a> <!--Link to the faculty directory page-->
            <a href="/courses" class="nav-link">📚 Courses</a> <!--Link to the courses page-->
            <a href="/admissions" class="nav-link">🎓 Admissions</a> <!--Link to the admissions page-->
            <a href="/social-media" class="nav-link">📱 Social Media</a> <!--Link to the social media page-->
        </div>

        <p class="info-text">
            The University of the Commonwealth Caribbean is the home to many lecturers and staff with various ranges of skills and expertise in their field areas.
        </p>

        <br>

       <h2 class="info-text"> <b> UCC Showcase </b></h2>

      <div class="slideshow-container">

      <div class="mySlides fade">
        <img src="/images/ucc building.jpg" style="width:100%">
      </div>

      <div class="mySlides fade">
        <img src="/images/ucc group.jpg" style="width:100%">
      </div>

      <div class="mySlides fade">
        <img src="/images/ucc grad.jpg" style="width:100%">
      </div>

      </div>
      <br>

      <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
      </div>

      <br> 

      <!-- Main Footer Section Container Wrapper -->
       <footer class="footer">

      <!-- COLUMN 1: Branding & Quick Actions -->
      <div class="footer-column">
          <h3>UCC Jamaica</h3>
          <p><strong>University of the Commonwealth Caribbean</strong></p>
          <p>Fostering Leadership & Innovation globally.</p>
      </div>

      <!-- COLUMN 2: Location & Contact Details -->
      <div class="footer-column">
          <h3>Main Campus Location</h3>
          <p>📍 17 Worthington Avenue,<br>Kingston 5, Jamaica W.I.</p>
          <p><strong>Campus Telephone:</strong><br>1 (876) 906-3000</p>

          <!-- Call Button inside column -->
          <a href="tel:8769063000" class="btn-call" title="Call Main Campus" > 📞 Call Now </a>
      </div>

      <!-- COLUMN 3: General Overview -->
      <div class="footer-column">
          <h3>Accreditation Status</h3>
          <p>
              The University of the Commonwealth Caribbean (UCC) is registered with and recognised by the University Council of Jamaica (UCJ), 
              the official accreditation body for tertiary education in Jamaica, as a University. The University of the Commonwealth Caribbean 
              has since achieved institutional accreditation by the UCJ. This positions the UCC as one of only six institutions, of the eighty 
              public & private tertiary institutions that have been registered by the UCJ, to have achieved this significant & decisive accreditation 
              status. 
            </p>
      </div>

      <!-- COLUMN 4: Institutional Accreditation Info -->
      <div class="footer-column">
          <h3>General Overview</h3>
          <p>
              UCC is registered with and recognized by the <strong>University Council of Jamaica (UCJ)</strong>, the official accreditation body for tertiary education in Jamaica, as a University. 
          </p>
          <p>
              Positions the UCC as one of only six accredited institutional providers.
          </p>
      </div>
      </footer>
    </div>
    
    <!-- Assignment Target Email Floating Action Button to HOD -->
    <a href="mailto:hod.it@ucc.edu.jm?subject=Information Technology Enquiry" class="email-fab" title="Quick Email HOD">✉️</a>

    @RegisterServiceWorkerScript
</body>
</html>


