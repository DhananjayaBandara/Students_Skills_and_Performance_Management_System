
# University Resume Generation and Recruitment System

This web-based application enables university students to create professional resumes and allows employers to search for suitable candidates for internships or employment. The system provides separate functionalities for students, employers (searchers), and the admin.

## Features

### For Students:
- **Registration**: Students register with their university registration number, name, email, and password.
- **Login**: Access the system with a registration number and password.
- **Resume Creation**: Enter personal details, education, work experiences, technical skills (e.g., programming languages, frameworks, database tools), extracurricular activities, and a career summary.
- **Resume Viewing and Editing**: View generated resumes and make updates if needed.
- **Data Storage**: All details are stored securely in a MySQL database.

### For Employers (Searchers):
- **Registration**: Employers register using their company name, username, email, and password.
- **Login**: Access the system with a username and password.
- **Search**: Find students using criteria such as name, registration number, skills, programming languages, district, etc.
- **View Profiles**: Access detailed resumes of students matching the criteria.
- **Contact Students**: Connect with students via email or provided contact details.

### For Admin:
- **Admin Dashboard**: A separate admin page with:
  - View registered students.
  - View registered employers.
  - View user queries.
- **Management**: Monitor and manage system data and activities.

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript, Bootstrap
- **Backend**: PHP
- **Database**: MySQL
- **Security**: Passwords encrypted using hash functions
- **Additional Features**: Sessions and cookies for user authentication

## System Architecture

The system consists of separate database tables for:
- Registered students
- Registered employers
- Student details

## How to Use

1. Clone the repository:
   ```bash
   git clone <(https://github.com/DhananjayaBandara/Students_Skills_and_Performance_Management_System)>
   ```
2. Set up a local server (e.g., XAMPP, WAMP, or MAMP).
3. Import the provided MySQL database schema into your database.
4. Update database connection details in the configuration file.
5. Launch the system on your local server.

## Repository Structure

- `/student/`: Contains all student-related pages and functionalities.
- `/employer/`: Contains all employer-related pages and functionalities.
- `/admin/`: Contains admin dashboard pages.
- `/assets/`: Contains CSS, JavaScript, and Bootstrap files.
- `/database/`: MySQL database schema and related scripts.

## Contributions

Contributions are welcome! Feel free to submit a pull request or open an issue for suggestions or bug reports.
