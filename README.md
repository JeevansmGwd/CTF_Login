# CTF_Login
This project is a simple PHP-based login application designed for Capture The Flag (CTF) challenges, containerized using Docker. It includes a login page and a protected flag.php page that displays a flag upon successful authentication.

Features
User Authentication: A basic login system that validates user credentials.
Protected Flag Page: Access to flag.php is restricted to authenticated users.
Dockerized Environment: The application runs inside a Docker container for easy deployment.

Prerequisites
Docker installed on your system.
Setup Instructions
Clone the Repository:

git clone https://github.com/yourusername/your-repo-name.git
cd your-repo-name
Build the Docker Image:

docker build -t php-login-app .
Run the Docker Container:


docker run -d -p 8080:80 --name php-login-container php-login-app
This command maps port 80 inside the container to port 8080 on your host machine.

Access the Application:

Open your browser and navigate to http://localhost:8080 to view the login page.

Default Credentials
Username: ctf_user
Password: ctf_password
Use these credentials to log in and access the flag.php page.

Project Structure
.
├── Dockerfile
├── index.php
├── flag.php
└── README.md
Dockerfile: Defines the Docker image configuration.
index.php: The login page where users enter their credentials.
flag.php: Protected page that displays the flag upon successful login.
README.md: This file, providing an overview and setup instructions.
