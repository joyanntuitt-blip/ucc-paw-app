<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Pages</title>

    @vite(['resources/css/app.css'])
    @PwaHead 

    <!-- Linked External JavaScript Controller Module -->
    <script src="resources/js/social-feeds.js" defer></script>
</head>
<body>
    <!-- Target mounting anchor node required by the Facebook SDK initialization setup -->
    <div id="fb-root"></div>

    <div class="container">
        <div class="header">
            <h1>University of the Commonwealth Caribbean</h1>
        </div>

        <div class="nav-row">
            <a href="/" class="nav-link">🏡 Home</a>
            <a href="/faculty-directory" class="nav-link">👥 Faculty Directory</a>
            <a href="/courses" class="nav-link">📚 Courses</a>
            <a href="/admissions" class="nav-link">🎓 Admissions</a>
            <a href="/social-media" class="nav-link active">📱 Social Media</a>
        </div> 

        <div class="feed-container">
            
            <!-- FACEBOOK WIDGET -->
            <div class="feed-card">
                <h2>Facebook</h2>
                <div class="fb-page" 
                     data-href="https://facebook.com" 
                     data-tabs="timeline" 
                     data-width="360" 
                     data-height="520" 
                     data-small-header="false" 
                     data-adapt-container-width="true" 
                     data-hide-cover="false" 
                     data-show-facepile="true">
                    <blockquote cite="https://facebook.com" class="fb-xfbml-parse-ignore">
                        <a href="https://facebook.com">UCC Facebook</a>
                    </blockquote>
                </div>
            </div>

            <!-- TWITTER / X WIDGET -->
            <div class="feed-card">
                <h2>Twitter / X</h2>
                <a class="twitter-timeline" 
                   data-height="520" 
                   data-theme="light" 
                   href="https://twitter.com">
                   Loading Tweets from @UCCJamaica...
                </a>
            </div>

            <!-- INSTAGRAM CALL TO ACTION CARD -->
            <div class="feed-card social-action-card instagram-theme">
                <h2>Instagram</h2>
                <div class="card-body-content">
                    <span class="platform-badge">📸 Photos & Stories</span>
                    <p>Follow our campus life, event highlights, student spotlights, and instant campus notifications.</p>
                    <a href="https://instagram.com" target="_blank" class="launch-btn" style="background: #e1306c; color: white; display: inline-block; padding: 10px 15px; text-decoration: none; border-radius: 4px; margin-top: 10px;">Open Instagram Profile</a>
                </div>
            </div>

            <!-- LINKEDIN PLATFORM CARD -->
            <div class="feed-card social-action-card linkedin-theme">
                <h2>LinkedIn</h2>
                <div class="card-body-content">
                    <span class="platform-badge">💼 Professional Network</span>
                    <p>Connect with UCC alumni, explore institutional announcements, faculty milestones, and corporate partnerships.</p>
                    <a href="https://linkedin.com" target="_blank" class="launch-btn">View Profile</a>
                </div>
            </div>

            <!-- YOUTUBE PLAYER EMBED -->
            <div class="feed-card">
                <h2>UCC Official YouTube Feed</h2>
                <iframe width="100%" 
                        height="520" 
                        src="https://youtube-nocookie.com" 
                        title="UCC YouTube Channel Content" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen>
                </iframe>
            </div>

        </div> <!-- End of feed-container -->
    </div> <!-- End of main container wrapper -->

    @RegisterServiceWorkerScript
</body>
</html>
