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

## System Visualization



![homepage1](https://github.com/user-attachments/assets/829c317a-afe4-423f-838e-ec856cb54dca)![homepage2](https://github.com/user-attachments/assets/65747e12-62f5-41eb-ac92-8d9ed1200dda)
![homepage3AboutUs](https://github.com/user-attachments/assets/d293d3f1-049b-42df-abf8-f45717bba44f)
![homepage4Student](https://github.com/user-attachments/assets/6c0f5a1b-bff8-493f-b26d-84d016508455)
![homepage5Searcher](https://github.com/user-attachments/assets/ee0cb4b7-dc61-4855-bd8f-b91f758526af)
![homepage6Queries](https://github.com/user-attachments/assets/30a1e8e7-ab71-4668-9f99-4145b9f83f47)
![footer](https://github.com/user-attachments/assets/c2c22f09-83e4-4de6-9095-df2f55cb5b91)
![getStartedPage](https://github.com/user-attachments/assets/4dd17131-d565-4a06-8551-ebce189f72d9)
![studentRegisterPage](https://github.com/user-attachments/assets/d1c2c101-4c13-45f2-81cd-85eeb21cd193)
![successfullRegistration](https://github.com/user-attachments/assets/4a6b2c4c-3ddc-46e7-bca0-90f1553afe64)
![studentLogingPage](https://github.com/user-attachments/assets/4fc99d01-1db3-4063-a7d8-c4d327fd7103)
![studentInfoPart1](https://github.com/user-attachments/assets/ff2cebe5-eba3-4105-a461-88741d6c261b)
![studentInfoPart2](https://github.com/user-attachments/assets/8f91104a-be51-4b7d-8de6-edbfc13ba64f)
![studentInfoPart3](https://github.com/user-attachments/assets/f6e37955-bce2-4752-bcf4-e0ed51b663c8)
![studentIndoPart4](https://github.com/user-attachments/assets/a1692504-6a33-4c49-b571-8d41ba00fe41)
![studentInfoPart5](https://github.com/user-attachments/assets/eb947305-e51a-48a7-8ab5-176f94a4e051)
![succesfullDataEntry](https://github.com/user-attachments/assets/2c02c58a-3d43-4327-9ffb-3c08c4916e16)
![resumePart1](https://github.com/user-attachments/assets/88d59f8c-4ae0-4568-9a4a-39ff5850f044)
![resumePart2](https://github.com/user-attachments/assets/6776fde5-d940-4c92-ac10-156b13e6eecb)
![searcherRegister](https://github.com/user-attachments/assets/2910c302-edab-4997-ae4c-402959baa61c)
![searcherLogin](https://github.com/user-attachments/assets/3d82a919-bee3-4ef4-8157-c16efc6fb54e)
![searchInterface](https://github.com/user-attachments/assets/6202be0f-1381-45ba-af7d-686657ad8977)
![searchExample](https://github.com/user-attachments/assets/b7a85150-b516-4747-8e08-adc270bc9a55)
![adminPage](https://github.com/user-attachments/assets/ad3c8869-36f7-4154-8953-377f3bd4f2de)
