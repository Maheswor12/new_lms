<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link <?= ($page == "home") ? 'active' : ''; ?>" href="index.php?page=home">
            <span data-feather="home"></span>
            Dashboard <span class="sr-only">(current)</span>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link <?= ($page == "pages") ? 'active' : ''; ?>" href="index.php?page=pages">
            <span data-feather="file"></span>
            Pages
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= ($page == "teachers") ? 'active' : ''; ?>" href="index.php?page=teachers">
            <span data-feather="shopping-cart"></span>
            Teachers
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= ($page == "students") ? 'active' : ''; ?>" href="index.php?page=students">
            <span data-feather="users"></span>
            Students
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= ($page == "classes") ? 'active' : ''; ?>" href="index.php?page=classes">
            <span data-feather="bar-chart-2"></span>
            Classes
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= ($page == "subjects") ? 'active' : ''; ?>" href="index.php?page=subjects">
            <span data-feather="layers"></span>
            Subjects
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= ($page == "events") ? 'active' : ''; ?>" href="index.php?page=events">
            <span data-feather="layers"></span>
            Events
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#modelId" href="#">
            <span data-feather="layers"></span>
            Settings
        </a>
    </li>


</ul>