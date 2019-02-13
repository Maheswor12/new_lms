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
        <a class="nav-link <?= ($page == "students") ? 'active' : ''; ?>" href="index.php?page=students">
            <span data-feather="users"></span>
            Students
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= ($page == "assignments") ? 'active' : ''; ?>" href="index.php?page=assignments">
            <span data-feather="bar-chart-2"></span>
            Assignments
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?= ($page == "courses") ? 'active' : ''; ?>" href="index.php?page=courses">
            <span data-feather="layers"></span>
            Courses
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#modelId" href="#">
            <span data-feather="layers"></span>
            Settings
        </a>
    </li>
</ul>