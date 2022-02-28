@extends('template.navbar')
@section('title', 'About Us')
@section('content')
    <style>
        .social-link {
            width: 30px;
            height: 30px;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            border-radius: 50%;
            transition: all 0.3s;
            font-size: 0.9rem;
        }

        .social-link:hover,
        .social-link:focus {
            background: #ddd;
            text-decoration: none;
            color: #555;
        }
    </style>
    <div class="bg-light">
        <div class="container py-5">
        <div class="row h-100 align-items-center py-5">
            <div class="col-lg-6">
            <h1 class="display-4">HITCHHIKER</h1>
            <p class="lead text-muted mb-0">Currently the best leading LMS for online courses you can find on the internet!</p>
            </div>
            <div class="col-lg-6 d-none d-lg-block"><img src="https://bootstrapious.com/i/snippets/sn-about/illus.png" alt="" class="img-fluid"></div>
        </div>
        </div>
    </div>

    <div class="bg-white py-5">
        <div class="container py-5">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
            <h2 class="font-weight-light">PHP Framework</h2>
            <p class="font-italic text-muted mb-4">Made with Laravel 8</p><a href="https://laravel.com/" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
            </div>
            <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="https://bootstrapious.com/i/snippets/sn-about/img-1.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-5 px-5 mx-auto"><img src="https://bootstrapious.com/i/snippets/sn-about/img-2.jpg" alt="" class="img-fluid mb-4 mb-lg-0"></div>
            <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
            <h2 class="font-weight-light">CSS Framework</h2>
            <p class="font-italic text-muted mb-4">Made with bootstrap 5</p><a href="https://getbootstrap.com/" class="btn btn-light px-5 rounded-pill shadow-sm">Learn More</a>
            </div>
        </div>
        </div>
    </div>

    <div class="bg-light py-5">
        <div class="container py-5">
        <div class="row mb-4">
            <div class="col-lg-5">
            <h2 class="display-4 font-weight-light">Our team</h2>
            <p class="font-italic text-muted">of BNCC Mid-Project.</p>
            </div>
        </div>

        <div class="row text-center justify-content-center">

            <!-- Team item-->
            <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-2.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Heryan Djaruma</h5><span class="small text-uppercase text-muted">BNCC Back-End</span>
            </div>
            </div>
            <!-- End-->

            <!-- Team item-->
            <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-1.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-0">Joshua Wenata Sunarto</h5><span class="small text-uppercase text-muted">BNCC Back-End</span>
            </div>
            </div>
            <!-- End-->

        </div>
        </div>
    </div>


    <footer class="bg-light pb-5">
        <div class="container text-center">
        <p class="font-italic text-muted mb-0">&copy; Copyrights Hitchhiker.com All rights reserved.</p>
        </div>
    </footer>


    {{-- FOOTER --}}
    <footer class="footer bg-dark p-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <h1 class="footer-heading">
                        <a href="/" class=" text-decoration-none text-white">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 640 480" style="enable-background:new 0 0 640 480; width: 21%; fill: #ffffff" xml:space="preserve">
                            <path d="M420.41,413.2c6.53-4.18,12.13-7.77,19.14-12.26c-16.9-9.9-32.73-19.17-49.58-29.03c2.3-4.89,4.32-9.23,6.39-13.54
                                c23.29-48.62,14-110.59-23.69-145.5c-11.07-10.25-25.49-17.69-39.54-23.68c-11.88-5.06-21.66-11.42-30.65-20.59
                                c-12.46-12.71-25.63-24.98-39.81-35.69c-21.61-16.33-47.13-13.38-65.77,6.33c-2.53,2.68-3.25,7.08-4.8,10.68
                                c3.66,1.53,7.43,4.61,10.95,4.34c25.04-1.92,41.3,12.2,55.97,29.54c1.71,2.02,3.73,4.16,4.41,6.58c6.55,23.3,21.35,41.7,35.37,60.61
                                c14.91,20.11,14.07,30.51-5.2,50.73c-24.75-23.17-50.44-45.51-74.09-69.83c-23.69-24.37-45.35-50.72-67.8-76.08
                                c-10.89,17.93-11.21,18.91,2.19,34.54c19.05,22.21,37.98,44.59,58.28,65.62c20.03,20.75,41.72,39.92,63.94,60.98
                                c-24.23,22.31-48.69,44.83-75.36,69.39c-12.57-15.46-25.99-28.96-35.87-44.69c-30.34-48.29-38.57-100.63-25.16-156.36
                                c1.14-4.73-0.59-11.03-2.96-15.58c-9.96-19.15-21.32-37.59-30.77-56.97c-3.85-7.91-5.33-17.49-5.8-26.42
                                c-0.88-16.74,9.43-26.77,26.27-27.82c25.15-1.56,47.84,7.35,70.12,17.03c8.57,3.72,14.33,3.74,22.47-1.76
                                C339.96-7.95,501.07,60.61,526,204.35c7.08,40.83,0.72,80.23-17.29,117.54c-3.3,6.85-2.74,11.52,0.86,18.45
                                c10.6,20.4,22.01,40.94,28.45,62.79c7.87,26.7-8.64,40.13-35.3,37.72C473.69,438.24,447.45,426.28,420.41,413.2z M494.62,187.25
                                c0.2-15.49-8.79-22.14-16.33-29.32c-6.84-6.51-15.51-7.28-22.89-1.38c-16.3,13.03-32.4,26.38-47.79,40.47
                                c-8.76,8.02-8.61,16.79-1.44,26.52c3.36,4.56,7.06,9.03,11.3,12.76c7.82,6.87,16.62,7.56,24.81,0.82
                                c15.25-12.54,30.36-25.27,45.01-38.48C491.18,195.14,493.18,189.57,494.62,187.25z M395.91,193.85c3.16-1.16,7.32-1.62,10-3.85
                                c16.63-13.84,33.18-27.81,49.22-42.32c6.74-6.1,6.64-14.45,2.14-21.98c-2.88-4.82-6.88-9.08-10.86-13.12
                                c-9.72-9.88-18.21-10.63-29.04-1.84c-14.15,11.49-27.77,23.62-41.7,35.39c-7.65,6.46-12.38,14.54-7.46,23.92
                                C373.95,181.01,381.01,191.7,395.91,193.85z M443.15,404.07c18.43,5.62,36.8,12.69,55.81,16.58c17.62,3.6,28.07-7.49,24.56-24.19
                                c-4.03-19.16-14.26-35.42-21.26-44.9C483.38,368.33,464.45,385.16,443.15,404.07z M503.93,252.05c-4.75-6.57-8.96-13.95-14.65-19.92
                                c-9.31-9.77-18.49-10.02-29.05-1.61c-7.09,5.64-14.09,11.5-20.44,17.95c-9.73,9.88-8.85,18.86,2.21,31.88
                                c10.7,12.6,20.37,15.15,31.3,6.97c8.44-6.32,16.26-13.59,23.67-21.11C499.86,263.27,500.88,258.48,503.93,252.05z M194.13,90.56
                                c-15.64-7.5-32.17-13.6-50.49-12.82c-11.3,0.48-16.74,5.84-16.56,17.12c0.36,21.86,12.81,38.41,23.64,55.38
                                C165.55,129.85,179.7,110.4,194.13,90.56z"/>
                            <path d="M418.62,413.07c-29.11,12.59-57.14,20.39-87.85,19.83c15.29-15.47,29.78-30.14,44.45-44.99
                                C389.02,395.9,402.98,404,418.62,413.07z"/>
                            <path d="M330.83,387.3c1.74-2.45,3.29-4.98,4.42-7.69c1.66-4.01,2.44-8.1,2.35-12.28c-0.09-4.18-1.12-8.32-3.08-12.43
                                c-0.66-1.39-1.62-2.73-2.55-4.07c-0.05-0.07-0.11-0.14-0.17-0.2c-0.51-0.52-0.96-1.07-1.52-1.56c-2.98-2.61-6.23-4.6-9.75-5.99
                                c-1.54-0.6-3.01-1.07-4.41-1.39c-1.61-0.37-1.78-2.61-0.27-3.25c0.02-0.01,0.04-0.02,0.06-0.03c0.42-0.17,0.9-0.26,1.34-0.4
                                c1.84-0.6,3.82-1.01,6.04-1.08c2.75-0.09,5.77,0.4,9.05,1.46c3.27,1.05,6.56,3.03,9.86,5.93c0.66,0.58,1.54,1.45,2.63,2.6
                                c0.65,0.69,1.23,1.42,1.73,2.18c0.53,0.82,1.62,1.06,2.41,0.49l9.34-6.69c0.77-0.55,0.95-1.62,0.4-2.4
                                c-0.46-0.65-1.02-1.41-1.65-2.26c-1.17-1.56-3-3.43-5.48-5.6c-5.84-5.12-11.75-8.45-17.73-9.98c-5.97-1.53-11.73-1.8-17.28-0.81
                                c-5.55,0.99-10.72,2.97-15.51,5.93c-4.8,2.96-8.89,6.38-12.27,10.24c-0.96,1.1-1.74,2.28-2.57,3.44c-1.74,2.45-3.29,4.98-4.42,7.7
                                c-1.66,4-2.46,8.09-2.39,12.24s1.07,8.28,3.03,12.39c0.67,1.4,1.63,2.73,2.56,4.08c0.05,0.07,0.11,0.14,0.17,0.2
                                c0.5,0.52,0.96,1.07,1.52,1.56c2.98,2.61,6.23,4.61,9.74,5.98c1.58,0.62,3.09,1.1,4.54,1.43c1.64,0.38,1.88,2.62,0.33,3.27
                                c-0.07,0.03-0.14,0.06-0.21,0.09c-0.39,0.16-0.84,0.23-1.24,0.36c-1.85,0.6-3.85,0.99-6.13,1.04c-2.79,0.06-5.8-0.42-9.05-1.46
                                c-3.24-1.03-6.55-3.02-9.91-5.96c-0.67-0.58-1.53-1.44-2.59-2.56c-0.64-0.68-1.22-1.41-1.73-2.19c-0.55-0.84-1.67-1.08-2.48-0.49
                                l-9.24,6.73c-0.76,0.56-0.94,1.62-0.39,2.39c0.46,0.66,1.02,1.42,1.66,2.27c1.17,1.56,3,3.43,5.48,5.6
                                c5.79,5.08,11.68,8.39,17.69,9.95c6,1.55,11.77,1.84,17.32,0.85c5.55-0.99,10.72-2.97,15.52-5.93c4.79-2.97,8.88-6.38,12.27-10.24
                                C329.22,389.65,330,388.46,330.83,387.3z M310.65,377.87c-1.57-0.15-3.13-0.6-4.69-1.33c-1.55-0.73-2.99-1.67-4.32-2.83
                                c-1.66-1.45-3.05-2.97-4.19-4.56c-1.14-1.59-1.94-3.18-2.38-4.79c-0.45-1.61-0.5-3.22-0.16-4.83c0.19-0.92,0.59-1.84,1.1-2.76
                                c0.24-0.43,0.55-0.86,0.85-1.29c0.2-0.27,0.35-0.55,0.57-0.82c0.03-0.03,0.04-0.07,0.07-0.1c1.31-1.49,2.72-2.52,4.24-3.09
                                c1.52-0.57,3.07-0.77,4.64-0.62s3.12,0.59,4.64,1.29c1.53,0.71,2.96,1.64,4.28,2.8c3.36,2.95,5.57,6.08,6.62,9.39
                                c0.82,2.61,0.5,5.15-0.91,7.64c-0.23,0.4-0.52,0.8-0.8,1.2c-0.21,0.29-0.37,0.6-0.62,0.88c-0.03,0.03-0.04,0.07-0.07,0.1
                                c-1.3,1.49-2.72,2.52-4.24,3.09C313.76,377.82,312.21,378.02,310.65,377.87z"/>
                            </svg>
                            HITCHHIKER
                        </a>
                    </h1>
                    <h3 class="text-white">Don't Panic!</h3>
                    <h6 class="text-white">The best course LMS you can find</h6>
                    <p class="menu text-secondary m-3">
                        <a href="/index" class=" text-decoration-none m-3">Home</a>
                        <a href="/course" class=" text-decoration-none m-3">Course</a>
                        <a href="/aboutus" class=" text-decoration-none m-3">About Us</a>
                    </p>
                    <ul class="list-group list-group-horizontal justify-content-center">
                        <li class="list-group-item m-3 bg-transparent border-0">
                            <a href="https://www.instagram.com/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                </svg>
                            </a>
                        </li>
                        <li class="list-group-item m-3 bg-transparent  border-0">
                            <a href="https://www.facebook.com/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                </svg>
                            </a>
                        </li>
                        <li class="list-group-item m-3 bg-transparent  border-0">
                            <a href="https://twitter.com/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
@endsection
