<?php 
    include "header.php";
?>

    <main class="main-content">
        <form id="form" action="signupuser.inc.php" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input id="username" type="text" name="username" placeholder="Username">
            </div>
            <div class="input-group">
                <label for="name">Name</label>
                <input id="label" type="text" name="name" placeholder="Name">
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" placeholder="email">
            </div>
            <div class="input-group">
                <label for="rest">Restaurant</label>
                <input id="rest" type="text" name="restaurant" placeholder="restaurant">
            </div>
            <div class="input-group">
                <label for="userpass">Password</label>
                <input id="userpass" type="password" name="userpass" placeholder="password">
            </div>
            
            
            <button class="btn" type="submit" name="submit">Create User</button>
        </form>
    </main>
</body>
</html>