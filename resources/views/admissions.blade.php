<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty and Staff Members</title>
    
    <!-- Injects your single unified app.css file -->
    @vite(['resources/css/app.css'])
    @PwaHead <!-- Injects the PWA manifest reference strings automatically -->
</head>
<body>

    <!--Header to display the name of the University-->
    <div class="header">
        <h1>University of the Commonwealth Caribbean</h1>
    </div>

    <!-- Main Content Container -->
    <div class="container">
        
        <!-- Dashboard Navigation Row Links -->
        <div class="nav-row">
            <a href="/" class="nav-link">🏡 Home</a><!--Link to the home page-->
            <a href="/faculty-directory" class="nav-link">👥 Faculty Directory</a> <!--Link to the faculty directory page-->
            <a href="/courses" class="nav-link">📚 Courses</a> <!--Link to the courses page-->
            <a href="/admissions" class="nav-link active">🎓 Admissions</a> <!--Link to the admissions page-->
            <a href="/social-media" class="nav-link">📱 Social Media</a> <!--Link to the social media page-->
        </div>
    </div>
    
    <br>

    <!-- Admissions Grid Layout Container -->
    <div class="admissions-grid">
    <!-- Addmissions Card 1 -->
        <div class="admissions-block">
            <h1 class="admissions-title">ENTRY REQUIREMENTS FOR JAMAICAN STUDENTS</h1>

            <p class="body-text">
                &#9989; To be unconditionally admitted into UCC undergraduate programmes, applicants must possess a minimum of 
                five (5) subjects at the GCE or CSEC level (including mandatory English Language and Mathematics) 
                at grades A, B, C or 1, 2, 3 respectively. A CSEC Grade 3 must have been obtained since 1998.
            </p>

            <p class="body-text">
                Candidates with four (4) CXCs may apply pending outstanding subjects or may opt to complete UCC replacement courses: 
                Core Mathematics, English for Academic Purposes, and Fundamentals of Accounting.
            </p>

            <p class="body-text">
                Applicants may apply under the Mature Entry option. Candidates must be at least 25 years old with a minimum of 
                five (5) years of work experience. Academic qualifications, résumé, job letter, and three professional references 
                are required.
            </p>

            <a href="https://www.ucc.edu.jm/apply/undergraduate/preform" class="Apply" target="_blank" rel="noopener noreferrer"> Apply Here </a>
        </div>
    </div>

            <br>

             <!-- Faculty Member Card 2 -->
            <div class="faculty-member">
                <img src="/images/Dr. Sajjad Rizvi.jpg" alt="Sajjad Rizvi " class="faculty-photo">
                
                <div class="info-block">
                    <p class="info-name">Dr. Sajjad Rizvi </p>
                    <p class="info-role">Visiting Professor, Department of Information Technologyr </p>
                    
                    <div class="action-group">
                        <a href="tel:01276543" class="telephone" title="Call Dr. Sajjad Rizvi ">📞 Call Now</a>
                        <a href="mailto:srizvi@faculty.ucc.edu.jm?subject=Information Technology Department Enquiry" class="email" title="Email Dr. Sajjad Rizvi ">✉️ Email</a>
                    </div>
                </div>
            </div>
       

    <!-- Assignment Target Email Floating Action Button to HOD -->
    <a href="mailto:hod.it@ucc.edu.jm?subject=Information Technology Enquiry" class="email-fab" title="Quick Email HOD">✉️</a>

    @RegisterServiceWorkerScript
</body>
</html>


