/* ==========================================
   STYLING FOR SLIDESHOW
   ========================================== */

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}

/* ==========================================
 STYLING FOR DATABASE IN THE COUSRSES PAGE 
   ========================================== */
 import { initializeApp } from "https://gstatic.com";
import { getFirestore, collection, getDocs } from "https://gstatic.com";

// Your exact Firebase project configuration configuration parameters
const firebaseConfig = {
    apiKey: "AIzaSyAf4Rz3FDpvarIQ864U2sJQT2MKbuP8EpY",
    authDomain: "://firebaseapp.com",
    projectId: "ucc-app-a2722",
    storageBucket: "ucc-app-a2722.firebasestorage.app",
    messagingSenderId: "387566053301",
    appId: "1:387566053301:web:1583ff7e65067e567c1bfc",
    measurementId: "G-TWKGDCMKBC"
};

// Initialize Firebase Core and Database Services
const app = initializeApp(firebaseConfig);
const db = getFirestore(app);

async function loadCoursesFromFirestore() {
    // Uses the query syntax referenced under 'Get all documents in a collection'
    const querySnapshot = await getDocs(collection(db, "courses"));
    const tableBody = document.getElementById('courseTableBody');
    
    if (!tableBody) return;
    tableBody.innerHTML = ''; 

    querySnapshot.forEach((doc) => {
        const course = doc.data();
        
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

// Fire database retrieval call
loadCoursesFromFirestore();

