<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method='get'>
        <?php echo csrf_field(); ?>
        <p>First name:</p>
            <input type="text" name="fname" id=""> <br>
        <p>Last name:</p>
            <input type="text" name="lname" id=""> <br>
        <p>Gender: </p>
            <input type="radio" name="" id="">Male <br>
            <input type="radio" name="" id="">Female <br>
            <input type="radio" name="" id="">Other <br>
        <p>Nationality:</p>
            <select name="" id="">
                <option value="Indonesian">Indonesian</option>
                <option value="American">American</option>
                <option value="Other">Other</option>
            </select>
        <p>Language Spoken:</p>
            <input type="checkbox" name="" id="">Bahasa Indonesia <br>
            <input type="checkbox" name="" id="">English <br>
            <input type="checkbox" name="" id="">Other <br>
        <p>Bio:</p>
            <textarea name="" id="" cols="30" rows="10"></textarea> <br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\tugasLaravel\resources\views/form.blade.php ENDPATH**/ ?>