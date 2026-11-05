<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Social Media Pages</title>

    
    @vite(['resources/css/app.css'])
    @PwaHead <!-- Injects the PWA manifest reference strings automatically -->
</head>
<body>

    <!-- Main Content Container -->
    <div class="container">

        <!--Header to display the name of the University-->
        <div class="header">
            <h1> University of the Commonwealth Caribbean </h1>
        </div>

        <!-- Dashboard Navigation Row Links -->
        <div class="nav-row">
            <a href="/" class="nav-link">🏡 Home</a> <!--Link to the home page-->
            <a href="/faculty-directory" class="nav-link">👥 Faculty Directory</a> <!--Link to the faculty directory page-->
            <a href="/courses" class="nav-link">📚 Courses</a> <!--Link to the courses page-->
            <a href="/admissions" class="nav-link">🎓 Admissions</a> <!--Link to the admissions page-->
            <a href="/social-media" class="nav-link active">📱 Social Media</a> <!--Link to the social media page-->
        </div>
    </div>  

    <h1 class="dashboard-title"> UNIVERSITY OF THE COMMONWEALTH CARIBBEAN </h1>

    <div class="feed-container">

        <!-- FACEBOOK IN-APP VIEW -->
        <div class="feed-card">
            <h2>Facebook</h2>
            <div class="fb-page" 
                 data-href="https://www.facebook.com/uccjamaica" 
                 data-tabs="timeline" 
                 data-width="360" 
                 data-height="520" 
                 data-small-header="false" 
                 data-adapt-container-width="true" 
                 data-hide-cover="false" 
                 data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/uccjamaica" class="fb-xfbml-parse-ignore">
                    <a href="https://www.facebook.com/uccjamaica">University of the Commonwealth Caribbean Facebook Page</a>
                </blockquote>
            </div>
        </div>

        <!-- TWITTER / X IN-APP VIEW -->
        <div class="feed-card">
            <h2>Twitter / X</h2>
            <a class="twitter-timeline" 
               data-height="520" 
               data-theme="light" 
               href="https://x.com/uccjamaica">
               Loading Tweets from @UCCJamaica...
            </a>
             <iframe src="https://x.com/uccjamaica" 
                    width="100%" 
                    height="520" 
                    frameborder="0" 
                    scrolling="no" 
                    allowtransparency="true">
            </iframe>
        </div>

        <!-- INSTAGRAM IN-APP VIEW -->
        <div class="feed-card">
            <h2>Instagram</h2>
            <!-- Note: Standard Instagram security prevents raw framing of user profiles. 
                 Below is the secure container for an official Instagram Embed Token or access layout -->
            <iframe src="https://www.instagram.com/uccjamaica" 
                    width="100%" 
                    height="520" 
                    frameborder="0" 
                    scrolling="no" 
                    allowtransparency="true">
            </iframe>
        </div>

    </div>


    <!-- Assignment Target Email Floating Action Button to HOD -->
    <a href="mailto:hod.it@ucc.edu.jm?subject=Information Technology Enquiry" class="email-fab" title="Quick Email HOD">✉️</a>

    @RegisterServiceWorkerScript
</body>
</html>


