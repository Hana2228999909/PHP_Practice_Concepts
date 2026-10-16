# Upload Certificate Using PHP

## Project Description
This project is a simple PHP web application that allows users to upload a certificate file through an HTML form. After uploading, the application displays information about the uploaded file and saves it inside a folder named `Docs`.

## Technologies Used
- HTML
- PHP
- XAMPP / Apache
- File Upload Handling

## Features
- Select a certificate file from the computer.
- Upload the selected certificate.
- Display file information:
  - File Name
  - File Size
  - File Type
  - Temporary File Name
- Automatically create the `Docs` folder if it does not exist.
- Save the uploaded certificate inside the `Docs` folder.
- Display a success or failure message.

## Project Structure


```

**Note:** The `Docs` folder is created automatically when a file is uploaded if the folder does not already exist.

## How to Run the Project

1. Install XAMPP on your computer.
2. Start Apache from the XAMPP Control Panel.
3. Create a project folder named `UploadCertificate` inside `htdocs`.
4. Save the PHP code as `index.php` inside the project folder.
5. Open your browser.
6. Visit the following URL:

```text
http://localhost/UploadCertificate/
```

7. Click **Choose File** and select a certificate.
8. Click **Upload**.
9. Check the `Docs` folder to find the uploaded file.

## How It Works

1. The HTML form allows the user to select a file.
2. PHP receives the uploaded file through the `$_FILES` superglobal.
3. The program retrieves the file name, size, type, and temporary location.
4. The `is_dir()` function checks whether the `Docs` folder exists.
5. The `mkdir()` function creates the folder if necessary.
6. The `move_uploaded_file()` function moves the uploaded file into the `Docs` folder.
7. PHP displays a success or failure message.

## Learning Objectives

- Understand HTML file upload forms.
- Learn how PHP handles uploaded files.
- Practice using `$_POST` and `$_FILES`.
- Understand `basename()`, `htmlspecialchars()`, `is_dir()`, and `mkdir()`.
- Learn how to save uploaded files using `move_uploaded_file()`.

## Author

**Hani Jama Hussein**

## Conclusion

This project demonstrates the basic process of uploading and storing certificate files using PHP and HTML. It is useful for beginners learning PHP file handling and web development.
