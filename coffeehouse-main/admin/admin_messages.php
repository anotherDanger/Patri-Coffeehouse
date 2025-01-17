<?php 
require_once "../message/function.php";
$getMessage = new Messages();
$messages = $getMessage->getMessage("SELECT * FROM messages");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin - Coffee Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-nav fixed-top shadow-lg">
    <div class="container-fluid">
      <a class="navbar-brand pannel-admin text-white" href="#">Halaman Admin</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 mx-auto ">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="admin_home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="admin_product.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="admin_orders.php">Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="admin_users.php">Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="admin_messages.php">Messages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="admin_logout.php">Logout</a>
          </li>
        </ul>
        <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
          <li class="nav-item nav-user">
            <a href=""><i class="fa-regular fa-user fa-xl" id="profile-icon"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- logout -->
    <div class="user-box" id="user-box">
      <p>username : </span></p>
      <p>email : </span></p>
      
      <form method="post" class="logout">
        <button name="logout" class="logout-btn">LOG OUT</button>
      </form>
    </div>

    <!-- Messages -->
    
      <section class="messages-container"> 
      <div>
          <h1 class="title">User Messages</h1>
      </div>
      <?php foreach($messages as $message): ?>
          <div class="box-container">
                <!-- Yang di pakai -->
                <div class="box">
                  <p>user id : <?php echo $message['user_id']; ?></p>
                  <p>username : <?php echo $message['username']; ?></p>
                  <p>message : <?php echo $message['message']; ?></p>
                  <a href="../message/message.php?id=<?php echo $message['message_id']; ?>" class="delete" onclick="return confirm('delete this')">Delete</a>
                </div>
          </div>
      <?php endforeach; ?>
        </section>
        
    <script>
      document.getElementById('profile-icon').addEventListener('click', function(event){
        event.preventDefault();
        var userBox = document.getElementById('user-box')
        userBox.classList.toggle('active');
      });
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>