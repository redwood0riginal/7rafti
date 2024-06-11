# 7rafti

![Laravel](https://img.shields.io/badge/laravel-v8.x-red)
![PHP](https://img.shields.io/badge/php-%5E7.3-blue)
![Hackathon](https://img.shields.io/badge/Hackathon-5th_Place-green)

7rafti is an application designed to connect young Moroccan craftsmen with clients who need their services. This project won the 5th prize in a hackathon.



## Table of Contents
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [Creators](#creators)
- [License](#license)

## Features
- 🔐 **User Registration & Authentication** ![Registration](https://img.shields.io/badge/feature-user--registration-brightgreen): Secure sign-up and login for both craftsmen and clients.
- 🧑‍🎨 **Profile Management** ![Profile](https://img.shields.io/badge/feature-profile--management-brightgreen): Users can manage their profiles, showcasing their skills and experience.
- 🛠️ **Job Posting & Bidding** ![Job Posting](https://img.shields.io/badge/feature-job--posting-brightgreen): Clients can post jobs, and craftsmen can bid on them.
- 💬 **Messaging System** ![Messaging](https://img.shields.io/badge/feature-messaging-brightgreen): In-app messaging to facilitate communication between clients and craftsmen.
- ⭐ **Rating & Review System** ![Rating](https://img.shields.io/badge/feature-rating--review-brightgreen): Clients can rate and review craftsmen based on their work.

## Installation

1. **Clone the Repository**:
    ```bash
    git clone https://github.com/HatimIlyas04/7ARFTY.git
    cd 7ARFTY
    ```

2. **Install Dependencies**:
    ```bash
    composer install
    ```

3. **Copy the `.env` File**:
    ```bash
    cp .env.example .env
    ```

4. **Generate an Application Key**:
    ```bash
    php artisan key:generate
    ```

5. **Configure the `.env` File**:
    Edit the `.env` file to set up your database and other environment settings.

6. **Run Database Migrations**:
    ```bash
    php artisan migrate
    ```

7. **Serve the Application**:
    ```bash
    php artisan serve
    ```

## Usage

- Visit `http://127.0.0.1:8000` in your web browser.
- Register as a new user.
- Create a profile if you are a craftsman, or post a job if you are a client.
- Use the messaging system to communicate and finalize details.
- Complete the job and leave a review.

## Contributing

1. **Fork the repository**.
2. **Create a new branch**:
    ```bash
    git checkout -b feature-branch
    ```
3. **Make your changes and commit them**:
    ```bash
    git commit -m "Description of changes"
    ```
4. **Push to the branch**:
    ```bash
    git push origin feature-branch
    ```
5. **Create a Pull Request**.

## Creators
- Hatim Ilyas [![GitHub followers](https://img.shields.io/github/followers/HatimIlyas04?label=Follow&style=social)](https://github.com/hatimIlyas04)
- Ahmed Tiguini [![GitHub followers](https://img.shields.io/github/followers/AhmedTiguini?label=Follow&style=social)](https://github.com/redwood0riginal)
