<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCC IT Web App</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f6f9; margin: 0; padding: 20px; }
        .header { background: #1E3A8A; color: white; padding: 20px; text-align: center; border-radius: 8px; margin-bottom: 30px; }
        .menu-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; max-width: 1000px; margin: 0 auto; }
        .menu-card { background: white; padding: 30px; text-align: center; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); text-decoration: none; color: #333; font-weight: bold; font-size: 1.2rem; transition: transform 0.2s; }
        .menu-card:hover { transform: translateY(-5px); background: #fdfdfd; }
        .email-fab { position: fixed; bottom: 30px; right: 30px; background: #EF4444; color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 24px; box-shadow: 0 4px 10px rgba(0,0,0,0.3); text-decoration: none; }
    </style>
</head>

<body>

    <!--Header to display the name of the University-->
    <div class="header">
        <h1>University of the Commonwealth Caribbean</h1>
    </div>

    <!--Menu bar for users-->
    <div class="menu-grid">
        <a href="{{ route('home') }}" class="menu-card">👥 Home</a> <!--Link to the home page-->
        <a href="{{ route('faculty.directory') }}" class="menu-card">👥 Faculty/Staff Directory</a> <!--Link to the faculty directory page-->
        <a href="{{ route('courses') }}" class="menu-card">📚 Courses</a> <!--Link to the courses page-->
        <a href="{{ route('admissions') }}" class="menu-card">🎓 Admissions</a> <!--Link to the admissions page-->
        <a href="{{ route('social.media') }}" class="menu-card">📱 Social Media</a> <!--Link to the social media page-->
    </div>

    <p> Test 3 - Courses </p>

    <!-- Email FAB -->
    <a href="mailto:hod.it@ucc.edu.jm?subject=Student Enquiry" class="email-fab" title="Email HOD">✉️</a>

</body>
</html>
