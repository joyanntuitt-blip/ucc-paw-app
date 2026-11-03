<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Faculy/Staff Directory</title>
    
    <!--Links the app.css file to the webage-->
    <link rel="stylesheet" href="resources/css/app.css">
</head>

<body>

    <!--Header to display the name of the University-->
    <div class="header">
        <h1>University of the Commonwealth Caribbean</h1>
    </div>

    <!--Menu bar for users-->
    <div class="menu-grid">
        <a href="{{ route('home') }}" class="menu-card">🏡 Home</a> <!--Link to the home page-->
        <a href="{{ route('faculty.directory') }}" class="menu-card">👥 Faculty/Staff Directory</a> <!--Link to the faculty directory page-->
        <a href="{{ route('courses') }}" class="menu-card">📚 Courses</a> <!--Link to the courses page-->
        <a href="{{ route('admissions') }}" class="menu-card">🎓 Admissions</a> <!--Link to the admissions page-->
        <a href="{{ route('social.media') }}" class="menu-card">📱 Social Media</a> <!--Link to the social media page-->
    </div>

    <h1> Faculty and Staff Members</h1>
    <p>The University of the Commonwealth Caribbean is the home to many lecturers ans staff with various ranges of skills and expetise in their field areas. </p>

    <!-- Class for the faculty diretory-->
    <div class="directory-grid">
    
        <!-- Faculty Member 1 Card Layout and Profile -->
        <div class="faculty-member">
            
            <!-- Faculty Photo -->
            <img src="/images/avatar-placeholder.png" alt="Otis Osborne" class="faculty-photo">
            
            <div class="info-block">
                <p> Name: Otis Osborne </p>
                
                <!-- Click-to-Dial Action for Faculty Member-->
                <a href="tel:01276543" class="telephone" title="Call Mr. Osborne">📞 Call Now</a>
                
                <!-- Click-to-Email Action for Faculty Member -->
                <a href="mailto:hod.it@ucc.edu.jm?subject=IT Department & Courses Enquiry" class="email" title="Email Mr. Osborne"> ✉️ Email</a>
            </div>
        </div>
    </div>



    

</body>
</html>
