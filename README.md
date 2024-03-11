# Skills-Trek

## Installation

To start using this project, follow the steps below:
1. **Clone the repo :**
   ```bash
   git clone https://github.com/votre-utilisateur/nom-du-projet.git
2. **Install dependencies to the project :**
   ```bash
   composer install
   composer global require laravel/installer
   npm install -D tailwindcss postcss autoprefixer
   npx tailwindcss init -p
3. **Launch the website :**
   ```bash
    php artisan serve
    npm run dev
    ```



## Project

Our project is a website that allows question forms to be created and stored. The project was created for
Jobtrek so that when trainees come in, trainers can create question forms to evaluate the trainees.
The admin user will be able to create forms and store them within the application.
He can also create days and add trainees to them, using this method the admin can send the form of his choice to the day of his choice,
which will send a link by e-mail to all the trainees contained in that day.

## Features

The website is only static for now. We are working on the backend to make it dynamic. You can switch between the different pages of the website.
It will be possible to create an account and log in to the website. You will be able to create forms, edit them, add a timer and some anti-cheat systems will be added to avoid cheating during the tests.


### Technologies

- **[PHP](https://www.php.net/)**
- **[Laravel](https://laravel.com/docs/10.x)**
- **[Tailwind](https://tailwindcss.com/)**
- **[Vite](https://vitejs.dev/)**
- **[Composer](https://getcomposer.org/)**



## Contributing

If you want to contribute to the project, you can fork the repository and create a pull request. We will review your changes and merge them if they are relevant.

## License

```
BSD 2-Clause License

Copyright (c) 2024, Jobtrek

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this
   list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice,
   this list of conditions and the following disclaimer in the documentation
   and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE
FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
