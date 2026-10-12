# Registration Form (PHP)

## 1. Project Description

This project is a simple Registration Form developed using **HTML and PHP**. It allows users to enter their personal information and submit the form.

## 2. Features

* **Full Name:** Allows users to enter their full name.
* **Password:** Allows users to enter their password.
* **Gender:** Allows users to select Male or Female.
* **Comment:** Allows users to write a comment.
* **Reset Form:** Clears all entered information.
* **Register Button:** Submits the form and displays the submitted information.
* **Registration Message:** Displays a successful registration message after submission.

## 3. Technologies Used

* HTML5
* PHP

## 4. Requirements

To run this project, you need:

* XAMPP
* A web browser
* A code editor, such as Visual Studio Code

## 5. Installation and Setup

1. Install and open XAMPP.
2. Start **Apache** from the XAMPP Control Panel.
3. Create a project folder named `registration` inside `C:\xampp\htdocs\`.
4. Save the PHP code in a file named `index.php` inside the `registration` folder.
5. Open your web browser.
6. Enter the following URL:

   `http://localhost/registration/`

## 6. How to Use

1. Enter your full name.
2. Enter your password.
3. Select your gender.
4. Write a comment (optional).
5. Click **Register** to submit the form.
6. The submitted information and a registration success message will appear.
7. Click **Reset Form** to clear the form.

## 7. PHP Functions Used

* `isset()` – Checks whether the Register button has been submitted.
* `trim()` – Removes unnecessary spaces from the beginning and end of text.
* `htmlspecialchars()` – Helps prevent HTML injection when displaying user input.
* `nl2br()` – Converts newline characters into HTML line breaks.
* `$_POST` – Collects data submitted through the form.

## 8. Expected Output

After submitting the form, the page displays:

* Registration Successful!
* Full Name
* Password confirmation message
* Gender
* Comment

## 9. Conclusion

This project demonstrates the basic use of HTML forms and PHP form processing. It helps beginners understand how to collect, process, and display user-submitted information.
