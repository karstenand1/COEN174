==========  A) FILES  ==========

Judge form files:
1. form.html
2. actualform.php
3. confirmform.php

csv file for judge pins:
1. pins.csv

Administrator portal files:
1. login.html
2. Shane_View.html
3. averages.html
4. detailed1.html
5. detailed2.html

php files for gets and posts to mySQL:
1. addCSV.php
2. addScore.php
3. checkPass.php
4. checkPin.php
5. confirmform.php
6. getAvg.php
7. getData.php
8. getDetRep.php
9. getDetRepSco.php
10. getEverything.php
11. getPres.php
12. getStudents.php

standalone helper js functions:
1. mappings.js
2. geturl.js

css files styling judge form and admin portal:
1. appstyle.css
2. formstyle.css

==========  B) Set Up and Use ==========

1. Transfer all files into webpages folder

2. Change the .htaccess file in php-cgi to have your username instead of ‘~kanderse’

3. Check permissions(ls -l) to confirm that the php-cgi folder is 755, Uploads folder in php-cgi is 777, php files are 755, and .txt files are 600

4. Navigate to cgi-bin and check permission for php-cgi.cgi (Should be 755)

5. Go to judge form at /form.html

---- Valid judges that are in pins.csv
ID: KQ3R97RM	Name: Darren Atkinson	Dept: COEN
ID: Q9W8E7R6	Name: Nathan Matsunaga	Dept: COEN

6. Go to admin portal at /login.html
---- pw: giveUsAnA

==========  C) Configure ==========

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

- Go to admin portal and upload .csv
- Make sure it has the headings and in the order listed
