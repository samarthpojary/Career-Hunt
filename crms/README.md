# CAREER HUNT - Campus Recruitment Management System (CRMS)

## Description
CAREER HUNT is a comprehensive Campus Recruitment Management System (CRMS) designed to streamline the recruitment process for educational institutions, companies, and job seekers. The system facilitates job postings, application submissions, and application management, providing a centralized platform for campus placements.

## Features
- **User Management**: Registration and login for job seekers, companies, and administrators.
- **Job Posting**: Companies can post job vacancies with detailed descriptions.
- **Application Management**: Users can apply for jobs, and companies can view, sort, select, or reject applications.
- **Admin Dashboard**: Overview of registered companies, users, vacancies, and application statistics.
- **Reports**: Generate reports on applications, vacancies, and user activities between dates.
- **Profile Management**: Users and companies can manage their profiles, including password changes and image uploads.
- **Search and Filter**: Users can search for jobs, and admins/companies can filter applications.
- **Responsive Design**: Built with Bootstrap for mobile-friendly interfaces.

## Technologies Used
- **Backend**: PHP
- **Database**: MySQL
- **Frontend**: HTML, CSS, JavaScript
- **Frameworks/Libraries**: Bootstrap, FontAwesome, jQuery
- **Development Environment**: XAMPP (Apache, MySQL, PHP)

## Installation Instructions
1. **Prerequisites**:
   - Install XAMPP on your system (available at https://www.apachefriends.org/).
   - Ensure Apache and MySQL services are running.

2. **Project Setup**:
   - Download or clone the project repository.
   - Place the project folder in the `htdocs` directory of your XAMPP installation (e.g., `C:\xampp\htdocs\crms`).

3. **Database Setup**:
   - Open phpMyAdmin (usually at http://localhost/phpmyadmin/).
   - Create a new database named `crmsdb`.
   - Import the database schema if provided (look for an SQL file in the project; otherwise, the tables will be created dynamically as needed).
   - Update the database connection details in `includes/dbconnection.php` if necessary (default: localhost, root, Samarth@9019, crmsdb).

4. **Run the Application**:
   - Start Apache and MySQL from the XAMPP control panel.
   - Open a web browser and navigate to `http://localhost/crms`.

## Usage
- **Home Page**: Access the main landing page at `index.php`.
- **User Module**: Job seekers can register at `user/user-signup.php`, login at `user/login.php`, and manage applications.
- **Company Module**: Companies can register at `company/comp-signup.php`, login at `company/login.php`, post jobs, and manage applications.
- **Admin Module**: Administrators can login at `admin/login.php` to access dashboards, reports, and management tools.
- **Key Pages**:
  - Admin Dashboard: `admin/dashboard.php`
  - Company Dashboard: `company/dashboard.php`
  - User Dashboard: `user/dashboard.php`

## Database Setup Details
- **Database Name**: `crmsdb`
- **Tables** (based on code analysis):
  - `tblcompany`: Stores company information.
  - `tbluser`: Stores user (job seeker) information.
  - `tblvacancy`: Stores job vacancy details.
  - `tblapplyjob`: Stores job application records.
  - Other tables may exist for additional features like education details, etc.
- Ensure the database user has appropriate permissions for CRUD operations.

## Contributing
Contributions are welcome! Please follow these steps:
1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Make your changes and test thoroughly.
4. Submit a pull request with a clear description of your changes.

## License
This project is licensed under the MIT License. See the LICENSE file for more details (if available).

## Contact
For questions or support, please contact the project maintainer.
