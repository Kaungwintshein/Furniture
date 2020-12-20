<nav id="sidebar" class="bg-dark">
    <div class="me-nav">
        <div class="sidebar-header border-bottom border-secondary">
            <!-- <h3>FIX.Consulting</h3> -->
        </div>

        <ul class="list-unstyled components">
            <li class="mb-5">
                <a class="fs-me-10" href="/index.php"><i class="fas fa-tachometer-alt fa-fw mr-4"></i>
                    Dashboard
                </a>
            </li>
            <h3 class="menu-title-me">UI Element</h3>
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-table mr-4"></i>Tables</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="table-basic.php"><i class="fas fa-table mr-4"></i>Table basic</a>
                    </li>
                    <!-- <li>
                        <a href="table-category.php"><i class="fas fa-table mr-4"></i>Table Category</a>
                    </li> -->
                    <li>
                        <a href="table-user.php"><i class="fas fa-table mr-4"></i>Table User</a>
                    </li>
                </ul>
            </li>
            <h3 class="menu-title-me">Extras</h3>
            <li>
                <a href="#">About</a>
            </li>
            <!-- <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Portfolio</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li> -->
        </ul>

        <!-- <ul class="list-unstyled CTAs">
            <li>
                <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
            </li>
            <li>
                <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
            </li>
        </ul> -->
    </div>
</nav>
<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>