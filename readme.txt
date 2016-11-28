==========  A) File Structure in COEN174-Le,Zaveri,Andersen Folder ==========

Folder 1: Cgi-bin
1. php-cgi.cgi

Folder 2: coen174
1. actualform.php
2. appstyle.css
3. averages.html
4. confirmform.php
5. detailed1.html
6. detailed2.html
7. form.html
8. formstyle.html
9. geturl.js
10. login.html
11. mappings.js
12. Folder: Shane 
Shane 1. .htaccess
Shane 2. .htpasswd
Shane 3. averages.html
Shane 4. detailed1.html
Shane 5. detailed2.html
Shane 6. Shane_View.html

Folder 3: php-cgi
1. addCSV.php
2. addScore.php
3. checkPass.php
4. checkPin.php
5. addData.php
6. getAvg.php
7. getData.php
8. getDetRep.php
9. getDetRepSco.php
10. getEverything.php
11. getPres.php
12. getStudents.php
13. shane_view.php
14. test.php

---------- File Descriptions ----------------

Judge form files:
1. form.html -- home login page for judges
2. actualform.php -- actual evaluation form that judges fill out
3. confirmform.php -- confirmation page for evaluation form with submit

csv file for judge pins:
1. pins.csv -- where judge ids are stored

Administrator portal files:
1. login.html -- administrator login page 
2. Shane_View.html -- administrator portal home page
3. averages.html -- summary score reports
4. detailed1.html -- detailed score report selection page
5. detailed2.html -- detailed score report 

php files for gets and posts to mySQL:
1. addCSV.php  -- upload CSV to mySQL
2. addScore.php -- add input scores to mySQL
3. getStudents.php -- get students from a given presentation  
4. checkPin.php -- check judge pins
5. getAvg.php -- get summary score report
6. getData.php -- get student data
7. getDetRep.php -- get data for detailed page 1
8. getDetRepSco.php -- get text and numerical data per presentation
9. getEverything.php -- get all numerical data
10. getPres.php -- get presentations

standalone helper js functions:
1. mappings.js 
2. geturl.js

css files styling judge form and admin portal:
1. appstyle.css
2. formstyle.css

==========  B) Set Up and Use ==========

1. Transfer all files onto server 


2. Change the .htaccess file in php-cgi to have your username instead of ‘~kanderse’

3. Check permissions(ls -l) to confirm that the php-cgi folder is 755, Uploads folder in php-cgi is 777, php files are 755, and .txt files are 600

4. Navigate to cgi-bin and check permission for php-cgi.cgi (Should be 755)

5. Go to judge form at /form.html

---- Valid judges that are in pins.csv
ID: KQ3R97RM	Name: Darren Atkinson	Dept: COEN
ID: Q9W8E7R6	Name: Nathan Matsunaga	Dept: COEN

6. Go to admin portal at coen174/login.html
---- un: shane
---- pw: password

7. To log out of admin portal
---- clear history and close out of the browser 

==========  C) Admin Portal ==========

1. To add judges:
- open pins.csv
- col 1:  a unique 8 character ID
- col 2:  First and Last name of judge
- col 3:  4 letter code for department that judge will be in 

COEN- Computer Engineering
ELEN- Electrical Engineering
MECH- Mechanical Engineering
BIOE- Bioengineering
CENG- Civil Engineering
INTR- Interdisciplinary


2. To load pre-session data: 
headers for csv

3. Mappings in Comprehensive report csv

-DP= Design Project

DP1: "Technical Accuracy",
DP2: "Creativity and Innovation",
DP3: "Supporting Analytical Work",
DP4: "Methodical Design Process Demonstrated",
DP5: "Addresses Project Complexity Appropriately",
DP6: "Expectation of Completion",
DP7: "Design and Analysis of Tests",
DP8: "Quality of Response during Q&A"

-P= Presentation 

P1: "Organization",
P2: "Use of Allotted Time",
P3: "Visual Aids",
P4: "Confidence and Poise"

-C= Considerations

C1: "Economic",
C2: "Sustainability",
C3: "Ethical",
C4: "Social",
C5: "Environmental",
C6: "Manufacturability",
C7: "Health and Safety",
C8: "Political"

4. Detailed score reports
- ordered by Department, advisor, than presentation name
