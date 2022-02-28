<?php 
    include "header.php";
    require_once "includes/dbh.inc.php";
    require_once "includes/functions.inc.php";
    $users = getAllUsers($conn)["COUNT(username)"];
    $usersDetails = getAllUsersDetails($conn);
?>

<main class="main-content">
    <div class="grid-cards">
        <div id="all-users" class="card">
            <h3>Current Users</h3>
            <h4> <?php echo $users ?> </h4>
        </div>
        <div class="card">
            <p>Something</p>
        </div>
    </div>
</main>
    
</body>
</html>