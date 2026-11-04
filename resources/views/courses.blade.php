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
            <a href="/courses" class="nav-link active">📚 Courses</a> <!--Link to the courses page-->
            <a href="/admissions" class="nav-link">🎓 Admissions</a> <!--Link to the admissions page-->
            <a href="/social-media" class="nav-link">📱 Social Media</a> <!--Link to the social media page-->
        </div>

        <p class="intro-text">
            The University of the Commonwealth Caribbean is the home to many lecturers and staff with various ranges of skills and expertise in their field areas.
        </p>
    </div>

    <!-- 1. The visual container shell that pulls data from your cloud dashboard layout -->
    <div class="p-6 bg-white rounded-xl shadow-lg border border-gray-100 my-4">
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

    // Import the functions you need from the SDKs you need
    import { initializeApp } from "firebase/app";
    import { getAnalytics } from "firebase/analytics";
    // FIX 1: Imported required functions from the Realtime Database package
    import { getDatabase, ref, onValue } from "firebase/database"; 

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
    // FIX 2: Initialize the Realtime Database instance using your app
    const database = getDatabase(app); 

    // Reference the node pathway directory inside your Realtime Database tree
    const databaseTargetRef = ref(database, 'resources');

    const loadingSpinner = document.getElementById('firebase-loading-spinner');
    const dataContainer = document.getElementById('firebase-data-container');

    // Listen to remote changes automatically without page reloads
    onValue(databaseTargetRef, (snapshot) => {
        const dataPayload = snapshot.val();
        
        // Toggle element visibility layers smoothly
        loadingSpinner.classList.add('hidden');
        dataContainer.classList.remove('hidden');
        dataContainer.innerHTML = '';

        if (dataPayload) {
            // Iterate through matching node entries and map layout structures dynamically
            Object.keys(dataPayload).forEach(entryKey => {
                const entryValue = dataPayload[entryKey];
                const listItem = document.createElement('li');
                
                listItem.className = "p-3 bg-gray-50 rounded-lg border border-gray-100 text-gray-700 flex justify-between items-center hover:bg-gray-100 transition-all duration-200";
                listItem.innerHTML = `
                    <span class="font-medium text-gray-900">${entryKey}</span>
                    <span class="text-sm bg-blue-100 text-blue-800 px-3 py-1 rounded-full font-semibold">${entryValue.value !== undefined ? entryValue.value : entryValue}</span>
                `;
                dataContainer.appendChild(listItem);
            });
        } else {
            dataContainer.innerHTML = `<li class="text-gray-400 italic p-3">No pathway dataset records are currently mapped in this reference tree.</li>`;
        }
    }, (error) => {
        console.error("Firebase Database Sync Error:", error);
        loadingSpinner.innerHTML = `<span class="text-red-600 font-medium">⚠️ Connection Refused: Check your Firebase Database security rules.</span>`;
    });
    </script>


    
    <!-- Assignment Target Email Floating Action Button to HOD -->
    <a href="mailto:hod.it@ucc.edu.jm?subject=Information Technology Enquiry" class="email-fab" title="Quick Email HOD">✉️</a>

    @RegisterServiceWorkerScript
</body>
</html>


