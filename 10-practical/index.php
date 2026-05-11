<html>
    <head>
        <title>
            PHP post example
        </title>
    </head>

    <body>
        <h2> User Registration Form</h2>
        <form method="POST" action="">
            <label for="name">Name:</label>
            <input type="text" id="name" name="username"><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="usermail"><br><br>

            <input type="submit" value="Submit" name="submit">
        </form>

        <?php
        if(isset($_POST['submit'])){

        echo "Welcome, ". htmlspecialchars($_POST['username']). "<br>";
        echo "Your Email : ". htmlspecialchars($_POST['usermail']); 
        }
        ?>
    </body>
</html>