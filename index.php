<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webdev.Lpg</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!-- header-->
    <header>
        <nav class="menu">
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">CONTACT</a></li>
                <li><a href="#"><i class="fa-brands fa-whatsapp"></i> 085690047756</a></li>
            </ul>
        </nav>
        <section id="slider">
        <div class="owl-carousel owl-theme">
            <div class="item" style="background-image: url(images/slider.webp);">
                <div class="text-container">
                    <h1 class="heading1">Selamat Datang</h1>
                    <h2 class="heading2">Blog Belajar Web Development</h2>
                </div>
            </div>
            <div class="item" style="background-image: url(images/slider.webp);">
                <div class="text-container">    
                    <h2 class="heading3">Kamu bisa belajar banyak hal tentang Web Development</h2>
                </div>
            </div>
            <div class="item" style="background-image: url(images/slider.webp);">
                <div class="text-container">   
                    <h2 class="heading3">Kembangkan pengetahuanmu bersama kami.</h2>
                </div>
            </div>
        </div>
        </section>
    </header>

    <!-- blog post-->
    <section id="blog-post">
        <h3 class="heading1 text-center">Blog Post</h3>
        
        <div class="course-container">

        <article class="card">
            <div class="card-img" style="background-image: url(images/card.webp);"></div>
            <div class="card-content">
                <div class="title"><a href="#">Title</a></div>
                <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias odio esse culpa reprehenderit amet debitis quae autem dicta, nihil numquam magni odit iusto, corrupti reiciendis modi sint fugit voluptate asperiores.</div>
            </div>
        </article>

        <article class="card">
            <div class="card-img" style="background-image: url(images/card.webp);"></div>
            <div class="card-content">
                <div class="title"><a href="#">Title</a></div>
                <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias odio esse culpa reprehenderit amet debitis quae autem dicta, nihil numquam magni odit iusto, corrupti reiciendis modi sint fugit voluptate asperiores.</div>
            </div>
        </article>

        <article class="card">
            <div class="card-img" style="background-image: url(images/card.webp);"></div>
            <div class="card-content">
                <div class="title"><a href="#">Title</a></div>
                <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias odio esse culpa reprehenderit amet debitis quae autem dicta, nihil numquam magni odit iusto, corrupti reiciendis modi sint fugit voluptate asperiores.</div>
            </div>
        </article>

        <article class="card">
            <div class="card-img" style="background-image: url(images/card.webp);"></div>
            <div class="card-content">
                <div class="title"><a href="#">Title</a></div>
                <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias odio esse culpa reprehenderit amet debitis quae autem dicta, nihil numquam magni odit iusto, corrupti reiciendis modi sint fugit voluptate asperiores.</div>
            </div>
        </article>

        <article class="card">
            <div class="card-img" style="background-image: url(images/card.webp);"></div>
            <div class="card-content">
                <div class="title"><a href="#">Title</a></div>
                <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias odio esse culpa reprehenderit amet debitis quae autem dicta, nihil numquam magni odit iusto, corrupti reiciendis modi sint fugit voluptate asperiores.</div>
            </div>
        </article>

        </div>
        
    </section>


    <footer id="footer">
        <div class="footer-container">
        <div class="item column-1">
            <h1>WEBDEV.LPG</h1>
            <p>Kami menyediakan blog berisi pengetahuan tentang teknologi dan informasi khususnya dalam development website.
Kembangkan pengetahuanmu tentang development website bersama Webdev.Lpg.</p>
            <div class="social-media">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
        <div class="item column-2">
           <div class="title">Links</div> 
            <ul class="links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Blogs</a></li>
               
            </ul>
        </div>

        <div class="item column-3">
           <div class="title">Resources</div> 
            <ul class="links">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms &amp; Conditions</a></li>
                <li><a href="#">Sitemap</a></li>
                <li><a href="#">Download</a></li>
            </ul>
        </div>

        <div class="item column-4">
           <div class="title">Visit Us</div> 
           
            <div class="address">
                <div class="item">
                        <div class="icon"><i class="fa-solid fa-map-location-dot"></i></div>
                        <div class="value">Jl. Cemara Komplek Pemda Lampung No.86 <br> Tulang Bawang, Lampung</div>
                </div>
                <div class="item">
                        <div class="icon"><i class="fa-solid fa-phone"></i></div>
                        <div class="value">0856-9004-7756</div>
                </div>
                <div class="item">
                        <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                        <div class="value">webdev-lpg@rocketmail.com</div>
                </div>
            </div>
        </div>

        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            items:1,
        })
    </script>
</body>
</html>