
<?php
include_once "header.php";
?>

<body>

    <div class="wrapper">
        <section class="form login">
            <header>
                Realtime Chat App
            </header>
            <form action="#">
                <div class="error-text">
                </div>

                <div class="field input">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" >
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" >
                    <i class="fas fa-eye"></i>
                </div>

                <div class="field button">
                    <input type="submit" value="Continue to Chat">
                </div>

            </form>
            <div class="link">
                Not yet signed up? <a href="index.php">Signup Now</a>
            </div>
        </section>
    </div>

    <script src="js/pass-show-hide.js" defer></script>
    <script src="js/login.js" defer></script>
</body>

</html>