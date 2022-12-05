<nav id="mainNavbar" class="navbar navbar-vertical navbar-expand-lg scrollbar bg-dark navbar-dark">

    <!-- Theme configuration (navbar) -->
    <script>
        let navigationColor = localStorage.getItem('navigationColor'),
            navbar = document.getElementById('mainNavbar');

        if (navigationColor != null && navbar != null) {
            if (navigationColor == 'inverted') {
                navbar.classList.add('bg-dark', 'navbar-dark');
                navbar.classList.remove('bg-white', 'navbar-light');
            } else {
                navbar.classList.add('bg-white', 'navbar-light');
                navbar.classList.remove('bg-dark', 'navbar-dark');
            }
        }
    </script>
    <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand" href="index-2.html">
            <img src="https://d33wubrfki0l68.cloudfront.net/33193ecc0db7caa7d7efee3dca8af1b145fa2135/16978/assets/images/logo-small.svg"
                class="navbar-brand-img logo-light logo-small" alt="..." width="19" height="25">
            <img src="https://d33wubrfki0l68.cloudfront.net/ba6b91b7d508187d153e48318c22d0773a9cedfc/36afa/assets/images/logo.svg"
                class="navbar-brand-img logo-light logo-large" alt="..." width="125" height="25">

            <img src="https://d33wubrfki0l68.cloudfront.net/8b6c92837e3b7aa8c9017d33298ead6b9b859d79/fa79b/assets/images/logo-dark-small.svg"
                class="navbar-brand-img logo-dark logo-small" alt="..." width="19" height="25">
            <img src="https://d33wubrfki0l68.cloudfront.net/55307694d1a6b107d2d87c838a1aaede85cd3d84/66f18/assets/images/logo-dark.svg"
                class="navbar-brand-img logo-dark logo-large" alt="..." width="125" height="25">
        </a>

        <!-- Navbar toggler -->
        <a href="javascript: void(0);" class="navbar-toggler" data-bs-toggle="collapse"
            data-bs-target="#sidenavCollapse" aria-controls="sidenavCollapse" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </a>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenavCollapse">

            <!-- Navigation -->
            <ul class="navbar-nav mb-lg-7">
                <li class="nav-item">
                    <a class="nav-link active" href="/dashboard">
                        <svg viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.753,13.944v8.25h6v-6a1.5,1.5,0,0,1,1.5-1.5h1.5a1.5,1.5,0,0,1,1.5,1.5v6h6v-8.25"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" />
                            <path d="M.753,12.444,10.942,2.255a1.5,1.5,0,0,1,2.122,0L23.253,12.444" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" />
                        </svg>
                        <span>Dashboards</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="#pagesCollapse" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="pagesCollapse">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="nav-link-icon" height="18"
                            width="18">
                            <defs>
                                <style>
                                    .a {
                                        fill: none;
                                        stroke: currentColor;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-width: 1.5px;
                                    }
                                </style>
                            </defs>
                            <title>common-file-double-1</title>
                            <path class="a" d="M17.25,23.25H3.75a1.5,1.5,0,0,1-1.5-1.5V5.25" />
                            <rect class="a" x="5.25" y="0.75" width="16.5" height="19.5"
                                rx="1" ry="1" />
                        </svg>
                        <span>User</span>
                    </a>
                    <div class="collapse " id="pagesCollapse">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="{{ route('pd.index') }}" class="nav-link ">
                                    Personal Detail
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sm.index') }}" class="nav-link ">
                                    Social Media
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('cv.index') }}" class="nav-link ">
                                    CV
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('seo.index') }}" class="nav-link ">
                                    SEO
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="chat.html">
                        <svg viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.25,18.75a1.5,1.5,0,0,1-1.5-1.5V9.75a1.5,1.5,0,0,1,1.5-1.5h10.5a1.5,1.5,0,0,1,1.5,1.5v7.5a1.5,1.5,0,0,1-1.5,1.5h-1.5v4.5l-4.5-4.5Z"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" />
                            <path
                                d="M6.75,12.75l-3,3v-4.5H2.25a1.5,1.5,0,0,1-1.5-1.5V2.25A1.5,1.5,0,0,1,2.25.75h10.5a1.5,1.5,0,0,1,1.5,1.5v3"
                                fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" />
                        </svg>
                        <span>Skill</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="calendar.html">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="nav-link-icon"
                            height="18" width="18">
                            <defs>
                                <style>
                                    .a {
                                        fill: none;
                                        stroke: currentColor;
                                        stroke-linecap: round;
                                        stroke-linejoin: round;
                                        stroke-width: 1.5px;
                                    }
                                </style>
                            </defs>
                            <title>calendar</title>
                            <rect class="a" x="0.752" y="3.75" width="22.5" height="19.5"
                                rx="1.5" ry="1.5" />
                            <line class="a" x1="0.752" y1="9.75" x2="23.252" y2="9.75" />
                            <line class="a" x1="6.752" y1="6" x2="6.752" y2="0.75" />
                            <line class="a" x1="17.252" y1="6" x2="17.252" y2="0.75" />
                        </svg>
                        <span>Portfolio</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#tasksCollapse">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="nav-link-icon" height="18" width="18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="M5.25 10.511H10.5" />
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="M5.25 14.261H8.25" />
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="M5.25 18.011H8.25" />
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M9.75 23.25H2.25C1.85218 23.25 1.47064 23.092 1.18934 22.8107C0.908035 22.5294 0.75 22.1478 0.75 21.75V6C0.75 5.60218 0.908035 5.22064 1.18934 4.93934C1.47064 4.65804 1.85218 4.5 2.25 4.5H6C6 3.50544 6.39509 2.55161 7.09835 1.84835C7.80161 1.14509 8.75544 0.75 9.75 0.75C10.7446 0.75 11.6984 1.14509 12.4017 1.84835C13.1049 2.55161 13.5 3.50544 13.5 4.5H17.25C17.6478 4.5 18.0294 4.65804 18.3107 4.93934C18.592 5.22064 18.75 5.60218 18.75 6V8.25" />
                            <path stroke="currentColor" stroke-width="1.5"
                                d="M9.75 4.51099C9.54289 4.51099 9.375 4.34309 9.375 4.13599C9.375 3.92888 9.54289 3.76099 9.75 3.76099" />
                            <path stroke="currentColor" stroke-width="1.5"
                                d="M9.75 4.51099C9.95711 4.51099 10.125 4.34309 10.125 4.13599C10.125 3.92888 9.95711 3.76099 9.75 3.76099" />
                            <g>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M17.25 23.25C20.5637 23.25 23.25 20.5637 23.25 17.25C23.25 13.9363 20.5637 11.25 17.25 11.25C13.9363 11.25 11.25 13.9363 11.25 17.25C11.25 20.5637 13.9363 23.25 17.25 23.25Z" />
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5"
                                    d="M19.9239 15.505L17.0189 19.379C16.9543 19.4649 16.8721 19.536 16.7776 19.5873C16.6832 19.6387 16.5789 19.6692 16.4717 19.6768C16.3645 19.6844 16.2569 19.6689 16.1562 19.6313C16.0555 19.5937 15.964 19.535 15.8879 19.459L14.3879 17.959" />
                            </g>
                        </svg>
                        <span>Certificate</span>
                    </a>
                </li>
            </ul>
            <!-- End of Navigation -->
        </div>
        <!-- End of Collapse -->
    </div>
</nav>
