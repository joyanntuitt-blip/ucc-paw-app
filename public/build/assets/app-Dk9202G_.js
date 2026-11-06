import{collection as e,getDocs as t,getFirestore as n,initializeApp as r}from"https://gstatic.com";var i=0;a();function a(){let e,t=document.getElementsByClassName(`mySlides`),n=document.getElementsByClassName(`dot`);for(e=0;e<t.length;e++)t[e].style.display=`none`;for(i++,i>t.length&&(i=1),e=0;e<n.length;e++)n[e].className=n[e].className.replace(` active`,``);t[i-1].style.display=`block`,n[i-1].className+=` active`,setTimeout(a,5e3)}var o=r({apiKey:`AIzaSyAf4Rz3FDpvarIQ864U2sJQT2MKbuP8EpY`,authDomain:`://firebaseapp.com`,projectId:`ucc-app-a2722`,storageBucket:`ucc-app-a2722.firebasestorage.app`,messagingSenderId:`387566053301`,appId:`1:387566053301:web:1583ff7e65067e567c1bfc`,measurementId:`G-TWKGDCMKBC`}),s=n(o);async function c(){let n=await t(e(s,`courses`)),r=document.getElementById(`courseTableBody`);r&&(r.innerHTML=``,n.forEach(e=>{let t=e.data();r.innerHTML+=`
            <tr>
                <td class="code">${t.code||`N/A`}</td>
                <td><strong>${t.name||`Untitled`}</strong></td>
                <td>${t.credits===void 0?`-`:t.credits}</td>
                <td>${t[`pre-requisites`]||`None`}</td>
                <td>${t.description||`No description available.`}</td>
            </tr>
        `}))}c();