
<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Sumber</td>
                <td><input type="text" name="sumber"></td>
            </tr>
            <tr> 
                <td>Media</td>
                <td><input type="text" name="media"></td>
            </tr>
            <tr> 
                <td>Kategori</td>
                <td><input type="text" name="mobile"></td>
            </tr>
			 <tr> 
                <td>URL</td>
                <td><input type="text" name="url"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $sumber = $_POST['sumber'];
        $media = $_POST['media'];
        $mobile = $_POST['mobile'];
		$url = $_POST['url'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(sumber,media,kategori,url) VALUES('$sumber','$media','$mobile','$url')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>