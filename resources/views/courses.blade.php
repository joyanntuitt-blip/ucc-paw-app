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
<body class="bg-gray-50">

    <!--Header to display the name of the University-->
    <div class="header">
        <h1>University of the Commonwealth Caribbean</h1>
    </div>

    <!-- Main Content Container -->
    <div class="container mx-auto px-4">
        
        <!-- Dashboard Navigation Row Links -->
        <div class="nav-row">
            <a href="/" class="nav-link">🏡 Home</a><!--Link to the home page-->
            <a href="/faculty-directory" class="nav-link">👥 Faculty Directory</a> <!--Link to the faculty directory page-->
            <a href="/courses" class="nav-link active">📚 Courses</a> <!--Link to the courses page-->
            <a href="/admissions" class="nav-link">🎓 Admissions</a> <!--Link to the admissions page-->
            <a href="/social-media" class="nav-link">📱 Social Media</a> <!--Link to the social media page-->
        </div>

        <p class="intro-text">
            The University of the Commonwealth Caribbean is the home to many lecturers and staff with various ranges of skills and expertise in their field areas.
        </p>
    </div>

    <!-- 1. The visual container shell that pulls data from your cloud dashboard layout -->
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-xl shadow-lg border border-gray-100 my-4">
        <h3 class="text-xl font-bold mb-4 text-blue-900 flex items-center">
            <span class="mr-2">📁</span> UCC IT Live Resource Pathway Logs
        </h3>
        <div id="firebase-loading-spinner" class="text-gray-500 italic py-2 animate-pulse">
            Synchronizing real-time cloud data pipelines...
        </div>
        <ul id="firebase-data-container" class="space-y-2 hidden">
            <!-- Live values loop dynamically here -->
        </ul>
    </div>

    <!-- 2. The script handling real-time data sync processes -->
    <script type="module">

    // FIX: Changed bare npm package imports to standalone Web CDN links for full browser compatibility
    import { initializeApp } from "https://gstatic.com";
    import { getAnalytics } from "https://gstatic.com";
    import { getFirestore, collection, onSnapshot } from "https://gstatic.com"; 

    // Your web app's Firebase configuration
    const firebaseConfig = {
        apiKey: "AIzaSyAf4Rz3FDpvarIQ864U2sJQT2MKbuP8EpY",
        authDomain: "ucc-app-a2722.firebaseapp.com",
        projectId: "ucc-app-a2722",
        storageBucket: "ucc-app-a2722.firebasestorage.app",
        messagingSenderId: "387566053301",
        appId: "1:387566053301:web:1583ff7e65067e567c1bfc",
        measurementId: "G-TWKGDCMKBC"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
    const db = getFirestore(app); 

    // Point the collection reference directly to your 'courses' collection
    const collectionTargetRef = collection(db, 'courses');

    const loadingSpinner = document.getElementById('firebase-loading-spinner');
    const dataContainer = document.getElementById('firebase-data-container');

    // Listen to real-time updates inside your Cloud Firestore collection layout 
    onSnapshot(collectionTargetRef, (querySnapshot) => {
        // Toggle element visibility layers smoothly
        loadingSpinner.classList.add('hidden');
        dataContainer.classList.remove('hidden');
        dataContainer.innerHTML = '';

        if (!querySnapshot.empty) {
            // Iterate through every document entry mapping inside the collection tree
            querySnapshot.forEach((doc) => {
                const entryKey = doc.id; // Document identifier name
                const docData = doc.data(); // Document contents object
                
                // Dynamically reads fields from the Database schema. 
                const entryValue = docData.code || docData.name || JSON.stringify(docData);

                const listItem = document.createElement('li');
                listItem.className = "p-3 bg-gray-50 rounded-lg border border-gray-100 text-gray-700 flex justify-between items-center hover:bg-gray-100 transition-all duration-200";
                listItem.innerHTML = `
                    <span class="font-medium text-gray-900">${entryKey}</span>
                    <span class="text-sm bg-blue-100 text-blue-800 px-3 py-1 rounded-full font-semibold">${entryValue}</span>
                `;
                dataContainer.appendChild(listItem);
            });
        } else {
            dataContainer.innerHTML = `<li class="text-gray-400 italic p-3">No pathway dataset records are currently mapped in this Firestore collection.</li>`;
        }
    }, (error) => {
        console.error("Firebase Firestore Sync Error:", error);
        loadingSpinner.innerHTML = `<span class="text-red-600 font-medium">⚠️ Connection Refused: Check your Cloud Firestore security rules.</span>`;
    });
    </script>

    <!-- Assignment Target Email Floating Action Button to HOD -->
    <a href="mailto:hod.it@ucc.edu.jm?subject=Information Technology Enquiry" class="email-fab" title="Quick Email HOD">✉️</a>

    @RegisterServiceWorkerScript
</body>
</html>
