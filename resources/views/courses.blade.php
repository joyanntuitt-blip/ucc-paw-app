<!-- ===============================================
    STUDENT NAME: JOYANN E C TUITT
    AEORION ID: 20226997
    DEGREE: BSC INFORMATION TECHNOLOGY

    DATE: NOVEMBER 7 2026

    I CERTIFY THAT I HAVE NOT GIVEN OR RECEIVED 
    ANY UNAUTHORIZED ASSISTANCE ON THIS ASSIGNMENT
   =============================================== -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Title of webpage shown on the tab -->
    <title>UCC Courses</title>
    

    <!-- Links both stylesheet and your database javascript file through the Vite bundler pipeline -->
    @vite(['resources/css/app.css', 'resources/js/courses.js'])

    <!-- Injects the PWA manifest reference strings automatically -->
    @PwaHead 
</head>

<body>
    <!-- Main Content Container -->
    <div class="container">

    <!-- Header featuring local logo asset and university title -->
    <div class="header">
        <div class="header-content">
            <!-- Injects my local ucc logo.png file dynamically -->
            <img src="{{ asset('images/ucc logo.jpg') }}" alt="UCC Logo" class="header-logo">
            <h1>University of the Commonwealth Caribbean</h1>
        </div>
    </div>
        
    <!-- Dashboard Navigation Row Links -->
    <div class="nav-row">
        <a href="/" class="nav-link">🏡 Home</a><!--Link to the home page-->
        <a href="/faculty-directory" class="nav-link">👥 Faculty Directory</a> <!--Link to the faculty and staff directory page-->
        <a href="/courses" class="nav-link active">📚 Courses</a> <!--Link to the courses page-->
        <a href="/admissions" class="nav-link">🎓 Admissions</a> <!--Link to the admissions page-->
        <a href="/social-media" class="nav-link">📱 Social Media</a> <!--Link to the social media page-->
    </div>

    <p class="info-text">
        The Bachelor of Science in Information Technology prepares students for diverse careers in technology infrastructure, 
        network administration, cybersecurity, software development, and IT management. 
        This programme combines theoretical knowledge with practical skills in hardware, software, networking, and emerging technologies.

        It also provides students to engage in foundaional courses that can help them start or enchance an entrepreneurial career in Information technology.
    </p>

   <h1> <b> DEPARTMENT COURSE CATALOG </b> </h1>
   
   <!-- Container for the search feature connected to the Database -->
   <div class="filter-controls">
        <!-- Text displayed in the search bar to the user -->
        <input 
            type="text" 
            id="courseSearchInput" 
            placeholder="🔍 Search by course code, course name or course description..." >

        <!-- The filter parameters for the Database -->
        <select 
            id="creditFilterDropdown">

            <option value="all">All Pre-requisites</option>
            <option value="None">None</option>
            
        </select>
    </div>


<!-- The table structure for the Database data -->
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Course Name</th>
                    <th>Credits</th>
                    <th>Pre-requisites</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody id="courseTableBody">
                <tr>
                    <td colspan="5" class="loading" id="statusMessage">Loading courses from Firestore...</td>
                </tr>
            </tbody>
        </table>
    </div>

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
            public & private tertiary institutions that have been registered by the UCJ, to have achieved this significant & decisive accreditation status. 
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
</div><!-- End of main container wrapper -->

<!-- Assignment Target Email Floating Action Button to HOD -->
<a href="mailto:hod.it@ucc.edu.jm?subject=Information Technology Enquiry" class="email-fab" title="Quick Email HOD">✉️</a>

@RegisterServiceWorkerScript
</body>
</html>
