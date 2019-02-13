<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php?page=home">Learning Management System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?=($page == "home")?'active': '';?>">
                    <a class="nav-link" href="index.php?page=home">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?=($page == "about")?'active': '';?>">
                    <a class="nav-link" href="index.php?page=about">About</a>
                </li>
                <li class="nav-item <?=($page == "events")?'active': '';?>">
                    <a class="nav-link" href="index.php?page=events">Events</a>
                </li>
                <li class="nav-item <?=($page == "directory")?'active': '';?>">
                    <a class="nav-link" href="index.php?page=directory">Directory</a>
                </li>
                <li class="nav-item <?=($page == "contact")?'active': '';?>">
                    <a class="nav-link" href="index.php?page=contact">Contact</a>
                </li>
                <li class="nav-item <?=($page == "login")?'active': '';?>">
                    <a class="nav-link" href="index.php?page=login">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- content -->
