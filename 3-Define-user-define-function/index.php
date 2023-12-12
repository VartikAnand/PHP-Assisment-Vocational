<html>

<head>
    <title>User define function in php</title>
    <style>
    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f0f0f0;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    h1 {
        margin-bottom: 20px;
    }

    label,
    input[type="submit"] {
        margin-bottom: 15px;
        display: block;
    }

    input[type="text"],
    input[type="submit"] {
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
        border-radius: 5px;
        border: 1px solid #ccc;
        margin: 10px auto;
    }

    input[type="submit"] {
        background-color: #007bff;
        color: white;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }



    p {
        margin-top: 20px;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <center>
        <h1>User define function in php example</h1>
    </center>
    <form action="" method="post">
        <h1>Calculate Square</h1>
        <label for="number">Enter a number:</label>
        <input type="text" id="number" name="number" placeholder="E.g., 5" />
        <input type="submit" value="Calculate Square" />

        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Function to calculate square
        function calculateSquare($number) {
            return $number * $number;
        }

        // Retrieve user input
        $inputNumber = $_POST['number'];

        // Validate if input is numeric
        if (is_numeric($inputNumber)) {
            $result = calculateSquare($inputNumber);
            echo "<p>The square of $inputNumber is: $result</p>";
        } else {
            echo "<p>Please enter a valid number.</p>";
        }
    }
    ?>
    </form>
</body>

</html>