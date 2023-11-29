<?php
$key = $_GET['key'];
$balance = $_GET['balance'];

// Update the balance in the text file
$filename = 'keys.txt';
$fileContent = file_get_contents($filename);
$lines = explode("\n", $fileContent);

foreach ($lines as &$line) {
    $parts = explode(':', $line);
    $currentKey = trim($parts[0]);

    if ($currentKey === $key) {
        // Deduct the balance
        $newBalance = max(0, intval(trim($parts[1])) - $balance);
        $line = $currentKey . ':' . $newBalance;
        break;
    }
}

// Save the updated content back to the file
file_put_contents($filename, implode("\n", $lines));

echo 'Balance updated successfully';
?>
