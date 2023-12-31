
<?php
/*$l=0;
session_start();
if(isset($_SESSION['log'])){
     if($_SESSION['log']==0){
         header('location:login.php') ;
     }else {
         $l = $_SESSION['log'];
     }
}
else{

    header('location:login.php') ;
}*/

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link
        href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Medicare Labs</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
    <div class="container">

        <a href="#" class="navbar-brand"> Medicare Labs</a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navmenu"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about us" class="nav-link">About us</a>
                </li>
                <li class="nav-item">
                    <a href="#services" class="nav-link">services</a>
                </li>

                <li class="nav-item">
                    <a href="#doctors" class="nav-link">Doctors</a>
                </li>
                <li class="nav-item">
                    <a href="contactus/contact.php" class="nav-link">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">Log in</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" >
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner"  >
        <div class="carousel-item active" >
            <img src="img\m3.png" class="d-block w-100" alt="..." >
            <div class="carousel-caption d-none d-md-block">
                <h5>The bet medical staff</h5>
                <p>Here in miracle clinic we have the best staff.</p>
            </div>
        </div>
        <div class="carousel-item" >
            <img src="img\m2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>High quality equipment</h5>
                <p>Here in miracle clinic we have the best quality equipment and the most comfortable ones.</p>
            </div>
        </div>
        <!-- img\entt.jpg-->
        <div class="carousel-item">
            <img src="img\m1.png" class="d-block w-100" >
            <div class="carousel-caption d-none d-md-block">
                <h5>High tech equipment</h5>
                <p>Here in miracle clinic we have the best High tech equipment and the most advanced ones.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<section id="about us" class="p-5 bg-info text-light">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md p-5">
                <h2> About us </h2>
                <p class="lead">
                    يعود تاريخ تأسيس مختبرات ميديكير الى العام 1995 حيث افتتحت اولى مختبراتها في رام الله ، فلسطين وتوسعت بعد ذلك لتشمل جميع المدن في فلسطين. يقع المقر الرئيسي لمختبرات ميديكير في رام الله  ، وهي اليوم أكبر سلسلة مختبرات خاصة في فلسطين حيث تضم  ميديكير 28 فرعا موزعة على جميع محافظات الوطن.

                    تعتبر ميديكير شركة رائدة في مجال الطب المخبري و الفحوصات التشخيصية في فلسطين ، إذ  تسعى دائماً  لاستقطاب أفضل الكفاءات والخبرات في مجال الطب المخبري بفروعه المختلفة  , و أن نكون الأفضل في مجال خدمات الفحوصات المخبرية وتحسين مستوى الصحة في المجتمع ، ولتقديم تجربة مميزة للعميل وتطويرها  بما يتوائم مع التقدم الطبي وأحدث التقنيات العالمية.                </p>
                <p>
                    انطلاقاً من قيمنا الجوهرية والتي تتمثل بتقديم خدمات عالية الجودة  و النهوض بمستوى الخدمة المقدمة محليا، عبر الإفادة من أكثر من ستة وعشرون عاماً من الخبرة في هذا المجال ، قامت مختبرات ميديكير بتوفير أكثر من 1400 فحص مخبري لتلبية احتياجات المواطنين و مساعدة الاطباء في رفع كفاءة الخدمات الصحية في فلسطين. نتطلع من خلال ثقتكم للمزيد من التقدم في المستقبل والمساهمة بفعالية في مجال القطاع الصحي .                </p>

            </div>

        </div>
    </div>
</section>

<div id="services" class="container">
    <h2 class="text-center mb-4">Our Servecis</h2>
</div>
<section  class="p-5">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md">
                <img src="img/blood.jpg" class="img-fluid" alt="" />
            </div>
            <div class="col-md p-5">
                <h2>Blood Tests</h2>
                <p class="lead">
                    Regular blood testing is one of the most important ways to keep track of your overall physical well-being.
                    Getting tested at routine intervals can allow you to see the way your body changes over time and empower you
                    to make informed decisions about your health.
                </p>
                <p>
                    Some blood tests can help your doctor determine how different organs in your body are working
                    so blood testing is an important service that miracle clinic provides.
                </p>

            </div>
        </div>
    </div>
</section>

<!--serve1-->
<section id="learn101" class="p-5 bg-info text-light">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md p-5">
                <h2>Vaccinations</h2>
                <p class="lead">
                    Vaccinations are an important form of primary prevention. That means they can protect people from getting sick.
                    Vaccinations have allowed us to control diseases that once threatened many lives
                </p>
                <p>
                    There foe here in miracle clinic we give all kinds of Vaccinations.
                </p>

            </div>
            <div class="col-md">
                <img src="img\vac.jpg" class="img-fluid" alt="" />
            </div>
        </div>
    </div>
</section>
<!-- Showcase -->
<section  class="p-5">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md">
                <img src="img/dent.jpg" class="img-fluid" alt="" />
            </div>
            <div class="col-md p-5">
                <h2>Dentist and Orthodontist </h2>
                <p class="lead">
                    Think of your dentist as a general practitioner and your orthodontist as a specialist. Most standard dental issues can be resolved by a trip to the dentist.

                    Tooth pain, tooth decay, tooth repair, and tooth extraction can all be diagnosed and treated by your dentist. They can also treat gum disease, oral inflammation, and oral infections
                </p>
                <p>
                    There for here in miracle clinic we have the best Dentist and Orthodontist.
                </p>
            </div>
        </div>
    </div>
</section>


<section class="p-5 bg-info text-light">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md p-5">
                <h2>Ear, nose, and throat (ENT) </h2>
                <p class="lead">
                    ENT doctors treat people who have chronic conditions such as hearing impairment, problems balancing, or ringing in the ears. They can also order hearing aids, treat acute conditions such as ear infections,
                    and perform surgical procedures on ears and sinuses.
                </p>
                <p>
                    Here in miracle clinic we have the best Ear, nose, and throat (ENT) doctors.
                </p>
            </div>
            <div class="col-md">
                <img src="img/ear.jpg" class="img-fluid" alt="" />
            </div>
        </div>
    </div>
</section>

<!-- Newsletter -->





<section id="doctors" class="p-5 bg-info">

    <div class="container">
        <h2 class="text-center mb-4">Our Doctors</h2>
        <p class="lead text-center text-white mb-5">
            Our doctors all have 5+ years of working experience
        </p>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img
                            src="https://randomuser.me/api/portraits/men/15.jpg"
                            class="rounded-circle mb-3"
                            alt=""
                        />
                        <h3 class="card-title mb-3">Ben Oberman</h3>
                        <p class="card-text">
                            Ben Oberman, M.D. is a board-certified
                            otolaryngologist specializing in the treatment of ear,
                            nose and throat
                            conditions of adults and children.
                        </p>
                        <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img
                            src="https://randomuser.me/api/portraits/women/11.jpg"
                            class="rounded-circle mb-3"
                            alt=""
                        />
                        <h3 class="card-title mb-3">Sarah H. Hodges</h3>
                        <p class="card-text">
                            Sarah H. Hodges, M.D. is  Otolaryngologist/Head & Neck Surgeon specializing in the treatment of ear,
                            nose and throat conditions .
                        </p>
                        <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img
                            src="https://randomuser.me/api/portraits/men/13.jpg"
                            class="rounded-circle mb-3"
                            alt=""
                        />
                        <h3 class="card-title mb-3">Steve Smith</h3>
                        <p class="card-text">
                            Dr. Steve Smith  is an experienced dental surgeon and implantologist practicing for 19 years
                            pursued his Master's degree from JSS .
                        </p>
                        <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img
                            src="https://randomuser.me/api/portraits/women/14.jpg"
                            class="rounded-circle mb-3"
                            alt=""
                        />
                        <h3 class="card-title mb-3">Sara Smith</h3>
                        <p class="card-text">
                            Sara Smith M.D. is a board-certified Otolaryngologist specializing in the treatment of  ear,
                            nose and throat conditions of children.
                        </p>
                        <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact & Map -->
<section class="p-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md">
                <h2 class="text-center mb-4">Contact Info</h2>
                <ul class="list-group list-group-flush lead">
                    <li class="list-group-item">
                        <span class="fw-bold"> Location:</span> Nablus , Ramallah , Hebron , Tulkarm
                    <li class="list-group-item">
                        <span class="fw-bold">Phone:</span> 1700 110 111
                    </li>

                    <li class="list-group-item">
                        <span class="fw-bold"> Email:</span> medicarelab1995@gmail.com
                    </li>

                </ul>
            </div>
            <div class="col-md">
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>
<script>
    mapboxgl.accessToken =
        'pk.eyJ1IjoiYnRyYXZlcnN5IiwiYSI6ImNrbmh0dXF1NzBtbnMyb3MzcTBpaG10eXcifQ.h5ZyYCglnMdOLAGGiL1Auw'
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [35.23632435549473, 32.233609039094944],
        zoom: 18,
    })
</script>
<!-- Footer -->
<footer class="p-5 bg-info text-white text-center position-relative">
    <div class="container">
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-primary" type="button">Log  in</button>
            <button class="btn btn-primary" type="button">Contact us</button>
        </div>
        <a href="#" class="position-absolute bottom-0 end-0 p-5">
            <i class="bi bi-arrow-up-circle h1"></i>
        </a>
    </div>

</footer>








<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous">
</script>
<script src="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>
</body>
</html>