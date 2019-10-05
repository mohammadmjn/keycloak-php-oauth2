<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Keycloak Example PHP App</title>

    <link rel="stylesheet" type="text/css" href="styles.css"/>
</head>

<body>
    <!-- <form method="post" action="sso.php">
        <input type="submit" name="Login" value="Open Page">
    </form> -->
        <div id="wrapper" class="wrapper">
            <form method="post" action="sso.php">
                <button name="login" type="submit" onclick="sso.php">Login</button>
            </form>
    
            <!-- <div id="authenticated" class="menu">
                <button name="logoutBtn">Logout</button>
                <button name="accountBtn">Account</button>
            </div>
    
            <div class="content">
                <button name="publicBtn">Invoke Public</button>
                <button name="securedBtn">Invoke Secured</button>
                <button name="adminBtn">Invoke Admin</button>
    
                <div class="message" id="message"></div>
            </div> -->
        </div>
</body>
</html>