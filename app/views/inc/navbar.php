<div class="navbar">
    <div class="navbar__left">
        <div id="sidebar-toggle" class="nav-icon" onclick="toggleSidebar()">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="logo">
            <img src="<?php echo URLROOT; ?>/img/logo.png" alt="logo">
        </div>
    </div>
    <div class="navbar__right">
        <ul>
            <li>
                <a href="#">
                    <i class="fa-solid fa-bell"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo URLROOT; ?>/img/uploads/<?php echo $_SESSION['dp'] ?>" alt="user" class="user_nav">
                </a>
            </li>
            <li>
                <a href="#">
                    <span id="user_name"><?php echo $_SESSION['user_name']; ?></span><br>
                    <span id="designation"><?php echo $_SESSION['user_designation']; ?></span>
                </a>
            </li>
        </ul>
    </div>
</div>