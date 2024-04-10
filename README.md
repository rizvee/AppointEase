# AppointEase

**Author:** Hasan Rizvee  
**Version:** 1.0  
**Compatible Browsers:** IE9, IE10, IE11, Firefox, Safari, Opera, Chrome, Edge  
**Files Included:** JavaScript JS, HTML, CSS, PHP  
**Software Version:** PHP 7.x, PHP 5.x  
**Tags:** ajax, appointment, appointment booking, appointment system, booking, booking form, booking.com, bootstrap 4, google spreadsheet, online booking, PHP, responsive, schedule appointment, scheduling, wizard form

## Description

AppointEase is a PHP-based Appointment Booking and Scheduling system designed for businesses and service providers. It offers a modern design, seamless AJAX interactions, and responsive layout using the Bootstrap 4 framework. Key features include:

- Easy installation and quick start
- Responsive design for various devices
- AJAX functionality for smoother interactions
- Integration with email and Google Spreadsheet
- Support for SMTP configuration
- Mail auto-responder for client acknowledgment
- Service categorization for easy selection
- Flexible date and time selection
- Office hour restriction for scheduling
- Payment integration with multiple options
- Customization and extensibility with clean code
- Smooth validation to prevent errors
- Suitable for various appointment booking scenarios

# Installation Guide

1. **Download:**  
   - Download the AppointEase files from [GitHub](http://github.com/rizvee/appointease).

2. **Extract:**  
   - Extract the downloaded ZIP file to your web server's root directory.

3. **Database Setup:**  
   - Create a new MySQL database on your server.
   - Import the `database.sql` file located in the `database` folder to your newly created database.

4. **Configuration:**  
   - Navigate to the `includes` folder.
   - Open the `config.php` file in a text editor.
   - Update the database credentials (`DB_HOST`, `DB_USER`, `DB_PASS`, `DB_NAME`) with your MySQL database details.

5. **SMTP Configuration (Optional):**  
   - If you want to enable email functionality, configure the SMTP settings in the `mailer.php` file located in the `includes` folder.

6. **Testing:**  
   - Open your web browser and navigate to the URL where you extracted the AppointEase files.
   - You should see the installation page.
   - Follow the on-screen instructions to complete the installation process.

7. **Accessing Admin Panel:**  
   - Once the installation is complete, you can access the admin panel by navigating to `http://yourdomain.com/admin`.
   - Use the default username and password (admin/admin) to log in.
   - It is recommended to change the default login credentials after logging in for security reasons.


## Author's Links

- [GitHub](http://github.com/rizvee)
- [Portfolio](https://rizvee.github.io)
- [LinkedIn](linkedin.com/in/hasanrizvee)

# Frequently Asked Questions (FAQ)

## 1. How can I customize the appearance of the booking form?

You can customize the appearance of the booking form by modifying the CSS styles in the `style.css` file located in the `assets/css` folder. You can also modify the HTML structure of the booking form in the `booking-form.php` file located in the `templates` folder.

## 2. Can I integrate AppointEase with my existing website?

Yes, you can integrate AppointEase with your existing website by including the necessary PHP files and HTML snippets in your web pages. You can also customize the design to match the look and feel of your website.

## 3. Is it possible to add additional fields to the booking form?

Yes, you can add additional fields to the booking form by modifying the HTML structure in the `booking-form.php` file. You can also modify the database schema and update the PHP scripts to handle the new fields.

## 4. How do I configure email notifications for new appointments?

You can configure email notifications for new appointments by updating the SMTP settings in the `mailer.php` file located in the `includes` folder. Make sure to provide valid SMTP credentials and recipient email addresses for notifications.

## 5. Can AppointEase handle multiple service providers or locations?

Yes, AppointEase can handle multiple service providers or locations by customizing the database schema and PHP scripts to accommodate different providers or locations. You can also add filtering options to the booking form to allow users to select their preferred provider or location.

## 6. Is there a way to restrict appointment scheduling to specific time slots?

Yes, you can restrict appointment scheduling to specific time slots by customizing the PHP scripts to check for available time slots based on your business hours and existing appointments. You can also add validation logic to the booking form to prevent users from selecting unavailable time slots.

## 7. How can I customize the confirmation page after booking?

You can customize the confirmation page after booking by modifying the HTML structure and content in the `confirmation.php` file located in the `templates` folder. You can also include additional information or branding elements to enhance the user experience.

## 8. Can I integrate AppointEase with payment gateways for online payments?

Yes, you can integrate AppointEase with payment gateways for online payments by adding payment processing logic to the PHP scripts and integrating with the payment gateway APIs. You can also customize the booking form to collect payment information from users during the booking process.

