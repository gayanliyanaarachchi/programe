## Program E

An AIML compliant chat bot written using PHP and MySQL.
See http://sourceforge.net/projects/programe/ for more details.

### Installation instructions

**Prerequisites**: PHP (4.0.4+) compiled --with-mysql and --with-xml and a recent version of MySQL 3.23.xx and Apache. PHP version 4.2.2 recommended.


1. If you have a previous version of Program E delete all of its files and wipe its database.
2. Create a database for the program to use in MySQL.
3. Create the tables in the new database using `db.sql` which is in the sql directory.
4. By default, AIML files and `startup.xml` are in the aiml directory. Use the startup.xml file included in the distribution -- do not use the startup.xml you get with AIML files from alicebot.org
5. Edit dbprefs.php with your database information and aiml directory information. If you left your AIML files in the default directory you do not have to change this. See `dbprefs.php` for other options you can configure.
6. The src/admin directory must be writable by the web server because botloader.php 
  will attempt to create a file subs.inc. Or you can also create an empty subs.inc 
  file and make it writable.
7. From your web browser, access botloader.php (in src/admin directory) to load the AIML into the database. This might take a few minutes (On a dual PIII it takes approx. 1 minute for 10,000 categories). If your PHP is running in safe mode you might need to use botloaderinc.php to load the AIML files one at a time.
8. Access talk.html from your web browser and say something to the bot.


