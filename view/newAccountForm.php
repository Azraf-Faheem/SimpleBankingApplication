<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Homepage</title>
</head>
<body>
    <nav class="navbar">
        <h1>Create a new account</h1>
        <button class="home"><a href="../view/landingPage.php">Home</a></button><br>
        <button class="logout"><a href="../view/landingPage.php">Log Out</a></button>
    </nav>
   <br>
   <br>
   <br>
   <div class="form-container">
        <center><form>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required>
            <br>

            <label for="accountNumber">Account Number:</label><br>
            <input type="text" id="accountNumber" name="accountNumber" required>
            <br>

            <label for="creationDate">Creation Date:</label><br>
            <input type="date" id="creationDate" name="creationDate" required>
            <br>

            <label for="accountType">Account Type:</label><br>
            <select id="accountType" name="accountType" required>
                <option value="current">Current Account</option>
                <option value="savings">Savings Account</option>
                <option value="salary">Salary Account</option>
            </select>
            <br>

            <label for="deposit">Deposit:</label><br>
            <input type="text" id="deposit" name="deposit" required>
            <br>

            <input type="submit" value="Create">
        </form></center>
    </div>
</body>
    <footer class="footer">
        <p>&copy; 2024 All Rights Reserved by AZRAF FAHEEM</p>
    </footer>
</body>
</html>
