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
        <p>Faculty and Staff Directory</p>
    </div>

    <!-- Main Content Container -->
    <div class="container">
        
        <!-- Dashboard Navigation Row Links -->
        <div class="nav-row">
            <a href="/" class="nav-link">🏡 Home</a>
            <a href="/faculty-directory" class="nav-link active">👥 Faculty Directory</a>
            <a href="/courses" class="nav-link">📚 Courses</a>
            <a href="/admissions" class="nav-link">🎓 Admissions</a>
            <a href="/social-media" class="nav-link">📱 Social Media</a>
        </div>

        <p class="intro-text">
            The University of the Commonwealth Caribbean is the home to many lecturers and staff with various ranges of skills and expertise in their field areas.
        </p>

        <!-- Directory Flex Grid -->
        <div class="directory-grid">
            
            <!-- Faculty Member Card: Otis Osborne -->
            <div class="faculty-member">
                <img src="/images/avatar-placeholder.png" alt="Otis Osborne" class="faculty-photo">
                
                <div class="info-block">
                    <p class="info-name">Mr. Otis Osborne</p>
                    <p class="info-role">HOD / IT Department Lecturer</p>
                    
                    <div class="action-group">
                        <a href="tel:01276543" class="telephone" title="Call Mr. Osborne">📞 Call Now</a>
                        <a href="mailto:hod.it@ucc.edu.jm?subject=IT Department Enquiry" class="email" title="Email Mr. Osborne">✉️ Email</a>
                    </div>
                </div>
            </div>

            <!-- Feel free to duplicate the faculty-member block right here for more professors! -->

        </div>
    </div>

    <!-- Assignment Target Email Floating Action Button to HOD -->
    <a href="mailto:hod.it@ucc.edu.jm?subject=IT Department Student Enquiry" class="email-fab" title="Quick Email HOD">✉️</a>

    @RegisterServiceWorkerScript
</body>
</html>
