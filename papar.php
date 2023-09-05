<!DOCTYPE html>
<html>
<head>
    <title>Text Processing Result</title>
</head>
<body>
<h1>Text Processing Result</h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input text from the form
    $inputText = $_POST["input_text"];

    // Count the number of words
    $wordCount = str_word_count($inputText);

    // Count the number of characters
    $charCount = strlen($inputText);

    // Reverse the input text
    $reversedText = strrev($inputText);
    ?>
    <p>Text: <?php echo $inputText; ?></p>
    <p>Bilangan perkataan: <?php echo $wordCount; ?></p>
    <p>bilangan huruf: <?php echo $charCount; ?></p>
    <p>Reversed Text: <?php echo $reversedText; ?></p>
    <?php
} else {
    echo "<p>No input received.</p>";
}
?>
</body>
</html>
