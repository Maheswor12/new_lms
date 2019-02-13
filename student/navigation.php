<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link <?= ($page == "home") ? 'active' : ''; ?>" href="index.php?page=home">
            <span data-feather="home"></span>
            Dashboard <span class="sr-only">(current)</span>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link <?= ($page == "classes") ? 'active' : ''; ?>" href="index.php?page=classes">
            <span data-feather="file"></span>
            Classes
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= ($page == "classmates") ? 'active' : ''; ?>" href="index.php?page=classmates">
            <span data-feather="users"></span>
            Classmates
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= ($page == "assignments") ? 'active' : ''; ?>" href="index.php?page=assignments">
            <span data-feather="bar-chart-2"></span>
            Assignments
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= ($page == "examination") ? 'active' : ''; ?>" href="index.php?page=examination">
            <span data-feather="layers"></span>
            Examination
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