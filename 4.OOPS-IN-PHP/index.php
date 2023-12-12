<!DOCTYPE html>
<html>

<head>
    <title>Oops Example in PHP</title>
    <style>
    body {
        margin: 50px auto;
        width: 60%;
        padding: 20px;
        background-color: #f5f5f5;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 8px;
    }

    input[type="text"],
    input[type="number"],
    input[type="submit"] {
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin-bottom: 15px;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: white;
        cursor: pointer;
    }
    </style>
</head>

<body>
    <!-- Car details form -->
    <form method="post">
        <h2>Enter Car Details</h2>
        <label for="company">Car company:</label>
        <input type="text" id="company" name="company" required><br>

        <label for="model">Car Model:</label>
        <input type="text" id="model" name="model" required><br>

        <label for="year">Car Year:</label>
        <input type="number" id="year" name="year" required><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    // Car class definition
    class Car {
        public $company;
        public $model;
        public $year;

        // Constructor to initialize Car object
        public function __construct($company, $model, $year) {
            $this->company = $company;
            $this->model = $model;
            $this->year = $year;
        }

        // Method to display car information
        public function displayInfo() {
            echo "<h2>Car Information</h2>";
            echo "<p>Company: {$this->company}</p>";
            echo "<p>Model: {$this->model}</p>";
            echo "<p>Year: {$this->year}</p>";
        }
    }

    // Form submission handling
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve input values from form
        $company = $_POST['company'];
        $model = $_POST['model'];
        $year = $_POST['year'];

        // Create Car object with provided details
        $car = new Car($company, $model, $year);

        // Display car information
        $car->displayInfo();
    }
    ?>
</body>

</html>