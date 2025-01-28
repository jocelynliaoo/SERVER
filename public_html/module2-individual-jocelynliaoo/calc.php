
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>calculator</title>
</head>
<body>
    <h1>Calculator</h1>
    <form method="POST" action="">
        <input type="number" name="num1" placeholder="First Number">

        <label for="add"><input type="radio" name="operation" value="add"> +
        </label>
       
        <label for="sub">
        <input type="radio" name="operation" value="sub">-
        </label>

        <label for="divide"> <input type="radio" name="operation" value="divide">/
        </label>

        <label for="multiply"><input type="radio" name="operation" value="multiply">
        x</label>

        <input type="number" name="num2" placeholder="Second Number" required>
        <button>Calculate</button>
    </form>
    <?php 
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $value = '';

        switch($operation){
            case 'add':
                $value = $num1 + $num2;
                break;
            case 'sub':
                $value = $num1 - $num2;
                break;
            case 'multiply':
                $value = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = 'Error';
                }
            default:
                $result = 'Invalid operation';
        }
        echo "<p>Result: $value</p>";

    }
    ?>
</body>
</html>