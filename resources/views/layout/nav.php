<!--nav bar Start -->
<div class="container-fluid bg-info">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand text-white" href="<?php url(""); ?>">
            <img src="<?php asset("imgs/coder.jpeg"); ?>" alt="" class="rounded" width="30" height="30">
            <span class="ml-3"> BM Blog</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="<?php url("post/home"); ?>">Post <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Member
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Logout</a>
                        <a class="dropdown-item" href="#">Login</a>
                        <a class="dropdown-item" href="#">Register</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!--nav bar End  -->