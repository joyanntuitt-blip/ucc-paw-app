/* filepath: resources/js/course-catalog.js */
import { initializeApp } from "firebase/app";
import { getFirestore, collection, getDocs } from "firebase/firestore";

const firebaseConfig = {
    apiKey: "AIzaSyAf4Rz3FDpvarIQ864U2sJQT2MKbuP8EpY",
    authDomain: "://firebaseapp.com",
    projectId: "ucc-app-a2722",
    storageBucket: "ucc-app-a2722.firebasestorage.app",
    messagingSenderId: "387566053301",
    appId: "1:387566053301:web:1583ff7e65067e567c1bfc",
    measurementId: "G-TWKGDCMKBC"
};

const app = initializeApp(firebaseConfig);
const db = getFirestore(app);

// In-memory array to store downloaded database records
let allCourses = [];

async function loadCoursesFromFirestore() {
    try {
        const querySnapshot = await getDocs(collection(db, "courses"));
        allCourses = []; // Clear array

        querySnapshot.forEach((doc) => {
            allCourses.push(doc.data());
        });

        // Initial render of all courses
        renderTable(allCourses);
        setupFilterListeners();

    } catch (error) {
        console.error("Firestore read error: ", error);
        const statusMsg = document.getElementById('statusMessage');
        if (statusMsg) statusMsg.innerText = "Error loading database content.";
    }
}

// Function to print the records into your HTML grid display
function renderTable(coursesToDisplay) {
    const tableBody = document.getElementById('courseTableBody');
    if (!tableBody) return;
    tableBody.innerHTML = ''; 

    if (coursesToDisplay.length === 0) {
        tableBody.innerHTML = `<tr><td colspan="5" style="text-align:center; padding:30px; color:#7f8c8d;">No matching courses found.</td></tr>`;
        return;
    }

    coursesToDisplay.forEach((course) => {
        tableBody.innerHTML += `
            <tr>
                <td class="code">${course.code || "N/A"}</td>
                <td><strong>${course.name || "Untitled"}</strong></td>
                <td>${course.credits !== undefined ? course.credits : "-"}</td>
                <td>${course['pre-requisites'] || "None"}</td>
                <td>${course.description || "No description available."}</td>
            </tr>
        `;
    });
}

// Attach input monitoring listeners to the search inputs
function setupFilterListeners() {
    const searchInput = document.getElementById('courseSearchInput');
    const creditFilter = document.getElementById('creditFilterDropdown');

    if (!searchInput || !creditFilter) return;

    const filterData = () => {
        const searchTerm = searchInput.value.toLowerCase().trim();
        const selectedCredits = creditFilter.value;

        const filtered = allCourses.filter(course => {
            const matchesSearch = 
                (course.code && course.code.toLowerCase().includes(searchTerm)) ||
                (course.name && course.name.toLowerCase().includes(searchTerm));

            const matchesCredits = 
                selectedCredits === "all" || 
                String(course.credits) === selectedCredits;

            return matchesSearch && matchesCredits;
        });

        renderTable(filtered);
    };

    searchInput.addEventListener('input', filterData);
    creditFilter.addEventListener('change', filterData);
}

loadCoursesFromFirestore();
