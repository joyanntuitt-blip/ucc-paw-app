<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty and Staff Members</title>
    
    <!-- Injects your single unified app.css file -->
    @vite(['resources/css/app.css'])
    @PwaHead
</head>
<body>

    <!-- Unified Header Banner -->
    <div class="header">
        <h1>University of the Commonwealth Caribbean</h1>
    </div>

    <!-- Main Content Container -->
    <div class="container">
        
        <!-- Dashboard Navigation Row Links -->
        <div class="nav-row">
            <a href="/" class="nav-link">🏡 Home</a> <!--Link to the home page-->
            <a href="/faculty-directory" class="nav-link active">👥 Faculty Directory</a> <!--Link to the faculty directory page-->
            <a href="/courses" class="nav-link">📚 Courses</a> <!--Link to the courses page--> 
            <a href="/admissions" class="nav-link">🎓 Admissions</a> <!--Link to the admissions page-->
            <a href="/social-media" class="nav-link">📱 Social Media</a> <!--Link to the social media page-->
        </div>

        <p class="intro-text">
            The University of the Commonwealth Caribbean is the home to many lecturers and staff with various ranges of skills and expertise in their field areas.
        </p>

        <h1> Deans: Schools and Colleges </h1>

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
        </div>

        <br>
        <hr>


        <h1> School of Mathematics, Science and Technology </h1> 

        <br>

        <!-- Directory Flex Grid 2-->
        <div class="directory-grid"></div>
            <!-- Faculty Member Card 1 -->
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
        </div>
    </div>

    @RegisterServiceWorkerScript
</body>
</html>
