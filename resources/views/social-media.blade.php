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
            <a href="/" class="nav-link">🏡 Home</a> <!--Link to the home page-->
            <a href="/faculty-directory" class="nav-link">👥 Faculty Directory</a> <!--Link to the faculty directory page-->
            <a href="/courses" class="nav-link">📚 Courses</a> <!--Link to the courses page-->
            <a href="/admissions" class="nav-link">🎓 Admissions</a> <!--Link to the admissions page-->
            <a href="/social-media" class="nav-link active">📱 Social Media</a> <!--Link to the social media page-->
        </div>

        <p class="intro-text">
            The University of the Commonwealth Caribbean is the home to many lecturers and staff with various ranges of skills and expertise in their field areas.
        </p>
    </div>

    
    
    <!-- Assignment Target Email Floating Action Button to HOD -->
    <a href="mailto:hod.it@ucc.edu.jm?subject=Information Technology Enquiry" class="email-fab" title="Quick Email HOD">✉️</a>

    @RegisterServiceWorkerScript
</body>
</html>


