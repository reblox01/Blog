# .Blog 

![Thumbnail](https://github.com/reblox01/Blog/blob/707ce907d4326c1f5336553b3920820c5e84fdb6/public/images/Thumbnail.png)

## Overview

An engaging mini blog website built with Laravel, featuring user registration, blog posting, social media sharing, and a sleek TailwindCSS interface.
Our simple yet powerful platform allows users to effortlessly publish their articles and dive into a world of diverse perspectives. Whether you're a 
seasoned writer or just starting out, share your voice and engage with a community passionate about storytelling. 

## Features

- **User Registration & Authentication**: Secure user sign-up and login using Laravel Auth.
- **Blog Posting**: Users can create and publish their own blog posts.
- **Social Media Sharing**: Share posts on various social media platforms.
- **Blog Viewing**: Browse and read blogs posted by other users.
- **Responsive Design**: Styled with TailwindCSS for a modern, responsive user experience.
- **Email Notifications**: SMTP integration for email communication.

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/reblox01/Blog.git
   cd Blog
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```
   
3. **Environment Configuration**
    - Copy the `.env.example` file to `.env`:
  
         ```bash
         cp .env.example .env
         ```
     
    - Update the `.env` file with your database, SMTP, and other configurations.
  
4. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

5. **Run Migrations**
   ```bash
   php artisan migrate
   ```

6. **Run the Application**
   ```bash
   php artisan serve
   ```

## Usage

- Visit `http://localhost:8000` to view the application.
- Register or log in to start creating and reading blog posts.
- Share posts on social media platforms directly from the post view.

## Contributing

Contributions are welcome! Please follow these steps:

  1. Fork the repository.
  2. Create a new branch `git checkout -b feature/your-feature-name`
  3. Make your changes and commit them `git commit -m 'Add your feature'`
  4. Push to the branch `git push origin feature/your-feature-name`
  5. Create a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Support

If you find this project useful and would like to support its development, consider buying me a coffee:

<a href="https://www.buymeacoffee.com/arosck1"><img src="https://img.buymeacoffee.com/button-api/?text=Buy me a coffee&emoji=☕&slug=arosck1&button_colour=BD5FFF&font_colour=ffffff&font_family=Cookie&outline_colour=000000&coffee_colour=FFDD00" /></a>

## Acknowledgements

- [Laravel](https://laravel.com/) - The PHP framework used
- [TailwindCSS](https://tailwindcss.com/) - Utility-first CSS framework
- [SMTP](https://www.simplemail.com/) - Simple Mail Transfer Protocol for email

## Contact

For any questions or inquiries, please contact [0x8D](mailto:mirocairo15@gmail.com).
