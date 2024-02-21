<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <div class="wrapper">
        <section class="form signup">
            <header>
                Realtime Chat App
            </header>
            <form action="">
                <div class="error-text">
                    this is an error message
                </div>
                <div class="name-details">
                    <div class="field input">
                        <label for="firstname">First Name</label>
                        <input type="text" name="firstname" required>
                    </div>
                    <div class="field input">
                        <label for="lastname">Last Name</label>
                        <input type="text" name="lastname" required>
                    </div>
                    </div>
                    <div class="field input">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" required>
                        <i class="fas fa-eye"></i>

                    </div>
                    <div class="field image">
                        <label for="selectImage">Select Image</label>
                        <input type="file" name="selectImage" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
               
            </form>
            <div class="link">
                Already signed up? <a href="login.php">Login Now</a>
            </div>
        </section>
    </div>
</body>

</html>