To run this:
- Make sure to have php installed (if not, go to https://www.php.net/downloads.php and help yourself)
- Make sure to have mariadb installed (if not, go here https://mariadb.org/download)
- Go to the Sample data folder, and run the netball.sql file to create the database
- Run the sample-netball.sql file to populate the database table with sample data
- Open the terminal and run the php command "php -S localhost:8000" (if error encountered, try restarting your system or choosing a different open port)
- php terminal should give you a link like "http://localhost:8000" which should have the website
- ensure config.php to have the proper credentials and details

Todo:
- Create a table for player
- Create sql 
- Create a table for tournaments
- Create  a table for coaches
- Create a table for teams
- Create a table for matches
- Create sample data for each table
- Implement addition and removal of table entities