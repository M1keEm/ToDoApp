# ToDoApp

A simple and intuitive To-Do application built with Laravel. This project helps you manage your tasks efficiently with features like task creation, updating, and deletion.

## Features

- **Task Management**: Create, update, and delete tasks.
- **User Authentication**: Secure user authentication system.
- **Responsive Design**: Works seamlessly on both desktop and mobile devices.
- **Database Integration**: Utilizes MySQL for storing tasks and user data.

## Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/M1keEm/ToDoApp.git
   cd ToDoApp
2. **Install dependencies:**
   ```bash
   composer install
3. **Set up environment variables:**

    - Copy .env.example to .env:

    ```bash
    cp .env.example .env
    ```
    
    - Update .env with your database credentials:

    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password    
    ```
    - Complete any necessary steps to be able to run migrations and serve the app, using:

    ```bash
    php artisan migrate
    php artisan serve
    
4.  **Access the application:**

    Open your browser and navigate to http://localhost:8000.

## Contributing

Contributions are welcome! If you'd like to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/YourFeatureName`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature/YourFeatureName`).
5. Open a pull request.

Please ensure your code follows the existing style and includes appropriate documentation.

---

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

## Acknowledgments

- [Laravel](https://laravel.com/) for the powerful PHP framework.

- [Bootstrap](https://getbootstrap.com/) for the responsive design components.

---

## Contact

If you have any questions or suggestions, feel free to reach out:

- **MikeEm** - [My Github](https://github.com/m1keem)
- **Project Link** - [Repository](https://github.com/m1keem/tictactoe)
