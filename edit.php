<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $sumber=$_POST['sumber'];
    $media=$_POST['media'];
    $kategori=$_POST['kategori'];
	$url=$_POST['url'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET sumber='$sumber',media='$media',kategori='$kategori',mobile='$url' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $sumber = $user_data['sumber'];
    $media = $user_data['media'];
    $kategori = $user_data['kategori'];
	$url = $user_data['url'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Sumber</td>
                <td><input type="text" name="sumber" value=<?php echo $sumber;?>></td>
            </tr>
            <tr> 
                <td>Media</td>
                <td><input type="text" name="email" value=<?php echo $media;?>></td>
            </tr>
            <tr> 
                <td>Kategori</td>
                <td><input type="text" name="mobile" value=<?php echo $kategori;?>></td>
            </tr>
			<tr> 
                <td>URL</td>
                <td><input type="text" name="mobile" value=<?php echo $url;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>