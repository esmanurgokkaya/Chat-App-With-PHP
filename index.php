
<?php
include_once "header.php";
?>

<body>

    <div class="wrapper">
        <section class="form signup">
            <header>
                Realtime Chat App
            </header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-text">
                </div>
                <div class="name-details">
                    <div class="field input">
                        <label >First Name
                        <input type="text" name="fname" ></label>
                    </div>
                    <div class="field input">
                        <label >Last Name
                        <input type="text" name="lname" ></label>
                    </div>
                </div>
                <div class="field input">
                    <label >Email Address
                    <input type="email" name="email" autocomplete="@gmail.com" ></label>
                </div>
                <div class="field input"> 
                    <label >Password
                    <input type="password" name="password" ></label>
                    <i class="fas fa-eye"></i>
 
                </div>
                <div class="field image">
                    <label >Select Image
                    <input type="file" name="selectImage" ></label>
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


    <script src="js/pass-show-hide.js" defer></script>
    <script src="js/signup.js" defer></script>
</body>

</html>