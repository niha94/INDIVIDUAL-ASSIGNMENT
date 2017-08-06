How It Work

The system interact with the SQLite database read and write directly from the database files stored on disk. 
The PHP code in the file name 'db_connection.php' is created to connect the system with SQLite database. 
After code is run, the database file name ‘myDB.db’ will be automatically created in the folder.That is mean the table is already created in the database.
Every PHP file must include with the 'include "db_connection.php" to make it connected with the SQLite database.
Then, the HTML code is write in PHP file to display a form for user to insert, update and delete the details such as name, age  and email.
Wherease, the PHP code is write to get the data from the method post int the HTML code.
All the query such as SELECT, INSERT, UPDATE and DELETE is also write in the PHP file to manipulate the data in database. 
