<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Backend/Full-stack recruitment task</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

<main>
    <?php require_once './partials/main.php'; ?>
</main>

   <h2>Add User</h2>

   <form method="POST">

    <div class="form-section">
        <label>ID:</label>
            <input type="text" name="id" >
    </div>
        <br>

    <div class="form-section">
        <label><b>Name:</b></label>
        <input type="text" name="name" >
    </div>
        <br>

    <div class="form-section">
        <label><b>Username:</b></label>
        <input type="text" name="username" >
    </div>
        <br>

    <div class="form-section">
        <label><b>Email:</b></label>
        <input type="email" name="email" >
    </div>
        <br>

    <div class="form-section">
        <label><b>Address:</b></label>
        <br>
        <label>Street:</label>
        <input type="text" name="street" >

        <label>Suite:</label>
        <input type="text" name="suite" >

        <label>City:</label>
        <input type="text" name="city" >

        <label>Zipcode:</label>
        <input type="text" name="zipcode" >
    </div>
        <br>
    <div class="form-section">
        <label>Geo:</label><br>
        <label>Latitude:</label>
        <input type="text" name="lat">

        <label>Longitude:</label>
        <input type="text" name="lng" >
    </div>
        <br>
    <div class="form-section">
        <label><b>Phone:</b></label>   
        <input type="text" name="phone" ></div><br>
    <div class="form-section">
        <label>Website:</label>
        <input type="text" name="website" >
    </div>
        <br>
    <div class="form-section">
        <label><b>Company:</b></label>
        <br>

        <label>Catch Phrase:</label>
        <input type="text" name="catchPhrase" >

        <label>Business:</label>
        <input type="text" name="bs" >
    </div>
        <br><br>
        <button type="submit">Add User</button>
    </form>

</body>
</html>
