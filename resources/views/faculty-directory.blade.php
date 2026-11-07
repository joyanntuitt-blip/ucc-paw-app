<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty and Staff Members Directory</title>
    
    <!-- Injects your single unified app.css file -->
    @vite(['resources/css/app.css'])
    @PwaHead
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
            <a href="/" class="nav-link">🏡 Home</a> <!--Link to the home page-->
            <a href="/faculty-directory" class="nav-link active">👥 Faculty Directory</a> <!--Link to the faculty directory page-->
            <a href="/courses" class="nav-link">📚 Courses</a> <!--Link to the courses page--> 
            <a href="/admissions" class="nav-link">🎓 Admissions</a> <!--Link to the admissions page-->
            <a href="/social-media" class="nav-link">📱 Social Media</a> <!--Link to the social media page-->
        </div>

        <p class="info-text">
            The University of the Commonwealth Caribbean is the home to many lecturers and staff with various ranges of skills and expertise in their field areas.
            This directory consists of Deans from the various Schools and Colleges, in addition to, Lecturers from the School of Mathematics, Science and Technology.
        </p>

        <!-- Directory Flex Grid 1 -->
        <div class="directory-grid">
    
            <!-- Faculty Member Card 1 -->
            <div class="faculty-member">
                <img src="/images/Dr. Andrea Sutherland.png" alt="Dr. Andrea Sutherland" class="faculty-photo">
                
                <div class="info-block">
                    <p class="info-name">Dr. Andrea Sutherland</p>
                    <p class="info-role">Dean, College of Graduate Studies and Research </p>
                    
                    <div class="action-group">
                        <a href="tel:01276543" class="telephone" title="Call Dr. Andrea Sutherland">📞 Call Now</a>
                        <a href="mailto:deansgsr@ucc.edu.jm?subject=Graduate Studies and Research Enquiry" class="email" title="Email Dr. Andrea Sutherland">✉️ Email</a>
                    </div>
                </div>
            </div>

             <!-- Faculty Member Card 2 -->
            <div class="faculty-member">
                <img src="/images/Dr. Leleith Donald-Tomlinson.png" alt="Leleith Donald-Tomlinson" class="faculty-photo">
                
                <div class="info-block">
                    <p class="info-name">Dr. Leleith Donald-Tomlinson</p>
                    <p class="info-role">Dean, College of Occupational and Applied Studies</p>
                    
                    <div class="action-group">
                        <a href="tel:01276543" class="telephone" title="Call Dr. Leleith Donald-Tomlinson">📞 Call Now</a>
                        <a href="mailto:deancoas@ucc.edu.jm?subject=Occupational and Applied Studies Enquiry" class="email" title="Email Dr. Leleith Donald-Tomlinson">✉️ Email</a>
                    </div>
                </div>
            </div>


             <!-- Faculty Member Card 3 -->
            <div class="faculty-member">
                <img src="/images/Mrs. Sonia Davidson.png" alt="Sonia Davidson" class="faculty-photo">
                
                <div class="info-block">
                    <p class="info-name">Mrs. Sonia Davidson</p>
                    <p class="info-role">Dean, School of Business, Entrepreneurship and Management</p>
                    
                    <div class="action-group">
                        <a href="tel:01276543" class="telephone" title="Call Mrs. Sonia Davidson">📞 Call Now</a>
                        <a href="mailto:deanbusinessmanagement@ucc.edu.jm?subject=Business, Entrepreneurship and Management Enquiry" class="email" title="Email Mrs. Sonia Davidson">✉️ Email</a>
                    </div>
                </div>
            </div>

             <!-- Faculty Member Card 4 -->
            <div class="faculty-member">
                <img src="/images/Dr. Eleasia Charles.png" alt="Eleasia Charles" class="faculty-photo">
                
                <div class="info-block">
                    <p class="info-name">Dr. Eleasia Charles</p>
                    <p class="info-role">Dean, School of Behavioural Science, Humanities and Law</p>
                    
                    <div class="action-group">
                        <a href="tel:01276543" class="telephone" title="Call Dr. Eleasia Charles">📞 Call Now</a>
                        <a href="mailto:hod.it@ucc.edu.jm?subject=Behavioural Science, Humanities and Law Enquiry" class="email" title="Email Dr. Eleasia Charles">✉️ Email</a>
                    </div>
                </div>
            </div>

             <!-- Faculty Member Card 5 -->
            <div class="faculty-member">
                <img src="/images/Dr. Peter Ndajah.png" alt="Peter Ndajah" class="faculty-photo">
                
                <div class="info-block">
                    <p class="info-name">Dr. Peter Ndajah</p>
                    <p class="info-role">Dean, School of Mathematics, Science and Technology </p>
                    
                    <div class="action-group">
                        <a href="tel:01276543" class="telephone" title="Call Dr. Peter Ndajah">📞 Call Now</a>
                        <a href="mailto:deanmathscitech@ucc.edu.jm?subject=Mathematics, Science and Technology Enquiry" class="email" title="Email Dr. Peter Ndajah">✉️ Email</a>
                    </div>
                </div>
            </div>

            <!-- Faculty Member Card 6 -->
            <div class="faculty-member">
                <img src="/images/Mr. Otis Osborne.jpg" alt="Otis Osborne" class="faculty-photo">
                
                <div class="info-block">
                    <p class="info-name">Mr. Otis Osborne</p>
                    <p class="info-role">Head of Department (HOD), Department of Information Technology</p>
                    
                    <div class="action-group">
                        <a href="tel:01276543" class="telephone" title="Call Mr. Osborne">📞 Call Now</a>
                        <a href="mailto:hod.it@ucc.edu.jm?subject=Information Technology Department Enquiry" class="email" title="Email Mr. Osborne">✉️ Email</a>
                    </div>
                </div>
            </div>

             <!-- Faculty Member Card 7 -->
            <div class="faculty-member">
                <img src="/images/Dr. Sajjad Rizvi.jpg" alt="Sajjad Rizvi " class="faculty-photo">
                
                <div class="info-block">
                    <p class="info-name">Dr. Sajjad Rizvi </p>
                    <p class="info-role">Visiting Professor, Department of Information Technology </p>
                    
                    <div class="action-group">
                        <a href="tel:01276543" class="telephone" title="Call Dr. Sajjad Rizvi ">📞 Call Now</a>
                        <a href="mailto:srizvi@faculty.ucc.edu.jm?subject=Information Technology Department Enquiry" class="email" title="Email Dr. Sajjad Rizvi ">✉️ Email</a>
                    </div>
                </div>
            </div>

             <!-- Faculty Member Card 8 -->
            <div class="faculty-member">
                <img src="/images/Mr. Eudurado Anderson.png" alt="Sajjad Rizvi " class="faculty-photo">
                
                <div class="info-block">
                    <p class="info-name"> Mr. Eudurado Anderson </p>
                    <p class="info-role">Group Chief Information and AI Officer </p>
                    
                    <div class="action-group">
                        <a href="tel:01276543" class="telephone" title="Call Dr. Mr. Eudurado Anderson ">📞 Call Now</a>
                        <a href="mailto:srizvi@faculty.ucc.edu.jm?subject=Information Technology/AI Enquiry" class="email" title="Email Mr. Eudurado Anderson ">✉️ Email</a>
                    </div>
                </div>
            </div>
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
