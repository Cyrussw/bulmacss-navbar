<?php
$logged_in = isset($_SESSION['user_id']);

if ($logged_in) { // Kullanıcı giriş yaptığında gönderilicek itemler
    $navbar_items = [
        ["Ana Sayfa", "/"]
    ];
} else {
    $navbar_items = [
        ["Ana Sayfa", "/"]
    ];
}
?>

<nav class="navbar">
    <div class="navbar-brand">
        <a href="/" class="navbar-item">LOGO</a>

        <div class="navbar-burger" id="burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div class="navbar-menu" id="navbar">
        <div class="navbar-end">
            <?php
            foreach ($navbar_items as $item) {
                $name = $item[0];
                $path = $item[1];

                echo "<a href='$path' class='navbar-item'>$name</a>";
            }
            ?>
        </div>
    </div>
</nav>