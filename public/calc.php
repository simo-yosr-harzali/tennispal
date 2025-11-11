<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Calculator;

$result = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = (float) $_POST['a'];
    $b = (float) $_POST['b'];
    $op = $_POST['op'];

    $calc = new Calculator();
    $result = $calc->calculate($a, $b, $op);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator | TennisPal</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<h2>Simple Calculator (OOP)</h2>

<form method="POST">
    <input type="number" name="a" step="any" placeholder="First number" required>
    <select name="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="b" step="any" placeholder="Second number" required>
    <button type="submit">Calculate</button>
</form>

<?php if ($result !== null): ?>
    <h3>Result: <?= htmlspecialchars($result) ?></h3>
<?php endif; ?>
</body>
</html>


