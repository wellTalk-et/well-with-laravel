# Well Platforms

> [!NOTE]
> Welcome to the Well Platforms repository! This is not the main branch. This project is currently being built with React and aims to provide an intuitive user experience from discovery to video chatting.

WellTalk is a platform offering online mentorship in any field, anytime, anywhere. We include homecare nurse functionality for health support, ensuring users receive prompt, secure results. WellTalk empowers individuals with accessible, expert guidance for personal and professional growth.

![thumbnail.png](resources/assets/overview/thumbnail.png)

## Overview

This page guides you through the user flow, starting from the discovery page and leading up to the video chatting section. The key routes included are:

**Home (Discovery Page):** The starting point where users can explore the platform.

**Login and Register:** Secure routes for user authentication.

**Questions Page:** A direct Q&A section designed to match clients with the best mentors.

**Confirmation:** Ensures users are ready to proceed.

**Payment:** Handles transactions smoothly.

**Video Chatting:** The final step where users can connect with their mentors.
We hope this sneak peek gives you a clear understanding of the user journey and the features we are building. Stay tuned for more updates!

![Screenshot 2024-08-13 233102.png](resources/assets/overview/Screenshot%202024-08-13%20233102.png)

![Screenshot 2024-08-13 233129.png](resources/assets/overview/Screenshot%202024-08-13%20233129.png)

![Screenshot 2024-08-13 233141.png](resources/assets/overview/Screenshot%202024-08-13%20233141.png)

![Screenshot 2024-08-13 233207.png](resources/assets/overview/Screenshot%202024-08-13%20233207.png)


## getting started

### Prerequisites

Ensure you have the following tools installed on your system:
- [PHP](https://www.php.net/) (>= 8.0)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) (>= 14.x)
- [NPM](https://www.npmjs.com/)
- [Laravel](https://laravel.com/) (>= 9.x)


### Installation

1. **Clone the repository:**

    `git clone git@github.com:wellTalk-et/well-with-laravel.git`
    `cd well-with-laravel`

    <br>

2. **Install PHP dependencies:**

    `composer install`

    <br>

3. **Install Node.js dependencies:**


    `npm install`

    <br>

4. **Set up environment variables:**

    `cp .env.example .env`
    > Create agora app_key, token and channel **<a href="https://console.agora.io/">Here</a>** and then place it to your **.env** file

    <br>

5. **Generate application key and migrate**

    `php artisan key:generate`

    `php artisan migrate`

    <br>

6. **Build Assets**

    `npm run build`

    <br>
7. **serve the applicateion**

    `php artisan serve`

    > for the development mode and asset bundling  
    
    `npm run dev`

    > For the queue service and real time communications run this two command

    `php artisan reverb:start`
    <br>

    `php artisan queue:listen`

    <br>

> Enjoy
>
> Reach me at **@abey_avi** on telegram or **linkedin.com/in/abeyasmare/** on linkedin
>
