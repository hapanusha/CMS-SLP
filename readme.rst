--------------------
What is Complaint Management System to Sri Lanka Police (CMS-SLP)
--------------------

CMS-SLP is a web-based offence complaints management
system for Sri Lanka Polices and it will be used for managing offence complaints
handling process in each police station.



--------------------
Server Requirements
--------------------

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

--------------------
Installation
--------------------

1. Download the CMS-SLP zip folder from the link below
https://github.com/hapanusha/CMS-SLP.git

2. upload the downloaded zip file to your domain root folder ("public html" in windows server OR "var" in linux server)

3. Extract the folder here

4. Go to MySQL and create a user

5. Create a database and import the "cms.sql" database file.

6. Edit the files mentioned below:

	(1) /cms/application/config/config.php : set the base url here
	
	
	(2) /cms/application/config/database.php : edit the default variable (hostname, username, password, database)
		







