# User-Authentication-PHP-MySQL-Web-Project


# Description:
This repository hosts a PHP-based user authentication system integrated with MySQL, specifically tailored for NUML (National University of Modern Languages). The system provides essential functionalities for managing user accounts securely:

- User Registration: Users can register with their name, email, password, username, and upload a profile image. Input validation ensures data integrity before storing user information in the MySQL database.

- Password Security: Passwords are securely hashed using PHP's password_hash function before storage. This ensures that plaintext passwords are never stored, enhancing security against data breaches.

- User Login: Registered users can securely log in using their email and password credentials. Authentication involves verifying hashed passwords stored in the database against user-provided login credentials.

- Session Management: Sessions are used to keep users authenticated across multiple pages of the application. PHP's session handling ensures that only authenticated users can access protected resources.

- Profile Management: Users can update their profile information, including their username and profile picture. File upload functionalities are securely handled to prevent unauthorized access and ensure data integrity.

- Database Integration (PHP PDO): PHP Data Objects (PDO) are utilized for interacting with the MySQL database. Prepared statements are used to prevent SQL injection attacks, enhancing the overall security of database operations.

- Frontend Design (Bootstrap): The frontend interface is designed using Bootstrap, providing a responsive and visually appealing layout that adapts to various screen sizes and devices. This ensures a consistent user experience across desktop and mobile platforms.

# Key Technologies:

- Backend: PHP
- Database: MySQL
- Security: Password hashing (password_hash), session management
- Data Access: PHP PDO (Prepared Statements)
- Frontend: Bootstrap (HTML, CSS)
- 
Contributions are welcome to enhance features, security measures, or usability aspects of the system.
