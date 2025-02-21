
# CTFLogin

This project is a simple PHP-based login application designed for Capture The Flag (CTF) challenges, containerized using Docker. It includes a login page and a protected flag.php page that displays a flag upon successful authentication.
## Features

User Authentication: A basic login system that validates user credentials. 
Protected Flag Page: Access to flag.php is restricted to authenticated users. 
Dockerized Environment: The application runs inside a Docker container for easy deployment.


## Prerequisites
Docker installed on your system.
## Installation

Clone the repository:

```bash
git clone https://github.com/JeevansmGwd/CTF_Login
cd your-repo-name
```
Build the Docker Image:
```bash
docker build -t php-login-app .
```

Run the Docker Container:

```bash
docker run -d -p 8080:80 --name php-login-container php-login-app
```
This command maps port 80 inside the container to port 8080 on your host machine.

Access the Application:
Open your browser and navigate to http://localhost:8080 to view the login page.


    
## Contributing

Contributions are welcome! Please feel free to fork the repository, make your changes, and submit a pull request.

## 🚀 About Me

Motivated developer with a focus on testing, validating, and securing software applications. I’m passionate about making development processes more efficient, delivering high-quality and secure results. Eager to bring skills, security expertise, and fresh ideas to a dynamic team while continuing to improve my software development and cybersecurity expertise.
## 🔗 Links
[![linkedin](https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](www.github.com/JeevansmGwd)
[![twitter](https://img.shields.io/badge/twitter-1DA1F2?style=for-the-badge&logo=twitter&logoColor=white)](www.x.com/Jeevansm_Gowda)


## Other Common Github Profile Sections
🔭 I’m currently working on Aiml-Based Insider Treat Detection

🌱 I’m currently learning Automation using Python

👯 I’m looking to collaborate on Security Related and Development Projects

🤝 I’m looking for help with Development Projects

👨‍💻 All of my projects are available at www.github.com/JeevansmGwd

💬 Ask me about Security, Development

📫 How to reach me jeevansm99@gmail.com

📄 Know about my experiences www.linkedin.com/in/jeevansmgwd

