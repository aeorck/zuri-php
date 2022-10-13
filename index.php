<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    input{
        height:20px;
        margin:auto;
        font-size:15px;
    }

    select{
        height:30px;
    }
    button{
        width:fit-content;
        padding:10px;
        color:white;
        font-size:20px;
        border-radius: 10px;
        border:none;
        background-color: purple;
    }
</style>
<body>
    <form action="./user_data.php" method="post">
        <label for="name">Name:</label>
        <input required type="text" name="name" id="name">

        <br>
<br>
        <label for="mail">Email</label>
        <input required type="email" name="mail" id="mail">
<br>
<br>
        <label for="dob">Date of Birth:</label>
        <input required type="date" name="dob" id="dob">
        <br>
<br>
        <label for="gender">Gender:</label>
        <select name="gender" id="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="null">Prefer not to Say</option>
        </select>
        <br>

        <br>
        <label for="country">Country</label>
        <input type="text" name="country" id="country" required>
        <br>

        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>