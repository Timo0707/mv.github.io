<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Home</title>
</head>
<body>
    <div class="TopBar">
        <a class="TopButton" href="home.php">Home</a>
        <a class="CurrentSelected">Boeken</a>
        <a class="TopButton" href="help.php">Help</a>
        <button class="MenuButton" onclick="OpenMenu()">☰</button>
    </div>

    <div class="mainPurchase">
        <form>
            <label for="first-name">First name</label><br>
            <input type="text" name="first-name" placeholder="First name"><br>

            <label for="last-name">Last name</label><br>
            <input type="text" name="last-name" placeholder="Last name"><br>

            <label for="time">Time</label><br>
            <select name="time">
                <option value="10:00">10:00</option>
                <option value="11:00">11:00</option>
                <option value="12:00">12:00</option>
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
                <option value="16:00">16:00</option>
                <option value="17:00">17:00</option>
                <option value="18:00">18:00</option>
            </select>

            <button type="submit">Login</button>
        </form>
    </div>

    <div id="SideMenu" class="Menu">
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
        <a href="account.php">Account</a>
    </div>
</body>
<script>
    let isOpen = false
    function OpenMenu() {
        if (isOpen == false) {
            document.getElementById('SideMenu').style.display = "block";
            isOpen = true
        } else if (isOpen == true) {
            document.getElementById('SideMenu').style.display = "none";
            isOpen = false
        }
    }
</script>
</html>