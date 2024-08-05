# Basic PHP Codes Repository

A collection of fundamental PHP code snippets designed for beginners. This repository features simple examples covering essential PHP concepts including variables, control structures, functions, and form handling. Ideal for those new to PHP or seeking to refresh their skills.

Welcome to the Basic PHP Codes repository! This project is a collection of fundamental PHP code snippets and examples designed to help you learn and understand PHP programming. Whether you're just starting out or looking to refresh your skills, this repository offers a variety of practical examples that cover essential PHP concepts.

## Table of Contents

- [Introduction](#introduction)
- [Getting Started](#getting-started)
- [Code Examples](#code-examples)
  - [Hello World](#hello-world)
  - [Variables and Data Types](#variables-and-data-types)
  - [Control Structures](#control-structures)
  - [Functions](#functions)
  - [Forms and User Input](#forms-and-user-input)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Introduction

This repository provides simple PHP code examples to help you get started with PHP development. The examples included are meant to illustrate basic concepts and are not intended for production use. They should serve as a foundation upon which you can build more complex applications.

## Getting Started

To get started with the code examples in this repository, follow these steps:

1. **Clone the Repository**: 
   ```bash
   git clone https://github.com/yourusername/basic-php-codes.git
   ```
   
2. **Navigate to the Project Directory**:
   ```bash
   cd basic-php-codes
   ```
   
3. **Set Up a Local PHP Server**:
   If you have PHP installed locally, you can use PHP’s built-in server to run the examples. For example:
   ```bash
   php -S localhost:8000
   ```

4. **Open Your Browser**:
   Go to `http://localhost:8000` to view the PHP code examples.

## Code Examples

### Hello World

**File:** `hello_world.php`

```php
<?php
echo "Hello, World!";
?>
```

This simple script outputs "Hello, World!" to the browser.

### Variables and Data Types

**File:** `variables.php`

```php
<?php
$integer = 42;
$float = 3.14;
$string = "Hello, PHP!";
$boolean = true;

echo "Integer: $integer <br>";
echo "Float: $float <br>";
echo "String: $string <br>";
echo "Boolean: " . ($boolean ? 'true' : 'false') . "<br>";
?>
```

This example demonstrates basic PHP data types and how to use them.

### Control Structures

**File:** `control_structures.php`

```php
<?php
$number = 10;

// If-Else Statement
if ($number > 0) {
    echo "Number is positive <br>";
} else {
    echo "Number is zero or negative <br>";
}

// For Loop
for ($i = 0; $i < 5; $i++) {
    echo "Iteration: $i <br>";
}
?>
```

This script shows how to use if-else statements and loops in PHP.

### Functions

**File:** `functions.php`

```php
<?php
function greet($name) {
    return "Hello, $name!";
}

echo greet("Alice") . "<br>";
echo greet("Bob") . "<br>";
?>
```

Learn how to define and call functions in PHP.

### Forms and User Input

**File:** `form.php`

```php
<!DOCTYPE html>
<html>
<body>

<form method="post" action="process_form.php">
  Name: <input type="text" name="name">
  <input type="submit">
</form>

</body>
</html>
```

**File:** `process_form.php`

```php
<?php
$name = htmlspecialchars($_POST['name']);
echo "Hello, $name!";
?>
```

This example demonstrates handling form data with PHP.

## Usage

Each PHP file in this repository is a standalone example. You can run these examples on your local server to see how they work. Modify the code as needed to experiment and learn more about PHP programming.

## Contributing

Contributions are welcome! If you have suggestions for new examples or improvements, please submit a pull request or open an issue.

1. **Fork the Repository**: Click the "Fork" button at the top right of this page.
2. **Clone Your Fork**: 
   ```bash
   git clone https://github.com/yourusername/basic-php-codes.git
   ```
3. **Create a New Branch**: 
   ```bash
   git checkout -b feature/your-feature
   ```
4. **Commit Your Changes**: 
   ```bash
   git add .
   git commit -m "Add new feature"
   ```
5. **Push to Your Fork**: 
   ```bash
   git push origin feature/your-feature
   ```
6. **Submit a Pull Request**: Go to the original repository and submit a pull request.

## License

This repository is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact

If you have any questions or need further assistance, feel free to reach out:

- **GitHub**: [Its-Shreya](https://github.com/Its-Shreya)

Thank you for visiting the Basic PHP Codes repository. Happy coding!

