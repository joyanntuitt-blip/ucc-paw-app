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
            <a href="/courses" class="nav-link">📚 Courses</a> <!--Link to the courses page-->
            <a href="/admissions" class="nav-link active">🎓 Admissions</a> <!--Link to the admissions page-->
            <a href="/social-media" class="nav-link">📱 Social Media</a> <!--Link to the social media page-->
        </div>
    </div>
    
    <br>

    <!-- Admissions Grid Layout Container -->
    <div class="admissions-grid">
    <!-- Addmissions Card 1 -->
        <div class="admissions-block">
            <h1 class="admissions-title"> ENTRY REQUIREMENTS FOR JAMAICAN STUDENTS </h1>

            <p class="body-text"> Degree: Bachelor of Science in Information Technology <br> Creits: 124 <br> Delivery Modality: Blended and 100% Online (via UCC Global) </p>

            <p class=""body-text"> The Bachelor of Science in Information Technology (IT) programme includes a rounded academic curriculum complemented by practical work. 
            Skills are taught in a context that makes them transferable to the job environment and students demonstrate their readiness by completing projects 
            that solve real world problems. The content and focus of the programme are constantly informed by current practice in the field 
            through a participatory approach that includes input from students, faculty, and advisory board. The curriculum reflects what is 
            pertinent in the information technology industry and is a rigorous course that balances professional competencies and academic abilities.
            
            The programme aims to produce graduates who have technical, business and interpersonal knowledge, skills, and competencies to 
            make significant contributions within the information technology industry nationally, regionally, and globally. </p>

            <h1 class="admissions-title"> PROGRAMME LEARNING GOALS </h1>

            <p class="body-text"> This programme will:
                &#9989; Equip students with comprehensive technical knowledge and skills in various areas of information technology, enabling them to effectively navigate and contribute to the rapidly changing digital environment.
                &#9989; Cultivate a culture of innovation and creativity among students, encouraging them to think critically, explore emerging technologies, and propose novel solutions to real-world IT challenges.
                &#9989; Instill ethical principles and practices in students' approach to information technology, emphasizing the use of technology in both personal and professional contexts.
                &#9989; Provide opportunities for students to develop strong leadership qualities and effective communication skills, enabling them to lead and collaborate in interdisciplinary teams, manage IT projects, and inspire others in the field of information technology. 
            </p>
            
         </div>

        <!-- Addmissions Card 1 -->
        <div class="admissions-block">
            <h1 class="admissions-title"> ENTRY REQUIREMENTS FOR JAMAICAN STUDENTS </h1>

            <p class="body-text">
                &#9989; To be unconditionally admitted into UCC undergraduate programmes, applicants must possess a minimum of 
                <b> five (5) subjects at the GCE or CSEC level (including mandatory English Language and Mathematics) 
                at grades A, B, C or 1, 2, 3 respectively. </b> A CSEC Grade 3 must have been obtained since 1998.
            </p>

            <p class="body-text">
                &#9989; Candidates with <b> four (4) CXCs </b> may apply pending outstanding subjects or may opt to complete UCC replacement courses: 
                <b> Core Mathematics, English for Academic Purposes, and Fundamentals of Accounting. </b>
            </p>

            <p class="body-text">
                &#9989; Applicants may apply under the Mature Entry option. Candidates must be at least 25 years old with a minimum of 
                <b> five (5) years </b> of work experience. Academic qualifications, résumé, job letter, and three professional references 
                are required.
            </p>

            <a href="https://www.ucc.edu.jm/apply/undergraduate/preform" class="Apply" target="_blank" rel="noopener noreferrer"> Apply Here </a>
        </div>
    </div>

            <br>

             <!-- Faculty Member Card 2 -->
            <div class="faculty-member">
                <img src="/images/Dr. Sajjad Rizvi.jpg" alt="Sajjad Rizvi " class="faculty-photo">
                
                <div class="info-block">
                    <p class="info-name">Dr. Sajjad Rizvi </p>
                    <p class="info-role">Visiting Professor, Department of Information Technologyr </p>
                    
                    <div class="action-group">
                        <a href="tel:01276543" class="telephone" title="Call Dr. Sajjad Rizvi ">📞 Call Now</a>
                        <a href="mailto:srizvi@faculty.ucc.edu.jm?subject=Information Technology Department Enquiry" class="email" title="Email Dr. Sajjad Rizvi ">✉️ Email</a>
                    </div>
                </div>
            </div>
       

    <!-- Assignment Target Email Floating Action Button to HOD -->
    <a href="mailto:hod.it@ucc.edu.jm?subject=Information Technology Enquiry" class="email-fab" title="Quick Email HOD">✉️</a>

    @RegisterServiceWorkerScript
</body>
</html>


