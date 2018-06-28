<?php

use yii\helpers\Url;

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">

    <title>Tickets</title>
    <meta name="description" content="CSS Grid Real Example">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <style>body { opacity: 1; overflow-x: hidden; } html { background-color: #fff; }</style>

</head>
<body>

<header class="main-header grid" style="background-image: url(img/Phy1.jpg);">
        
        <div class="header-content grid">
            <h1>NaUKMA Ticket System</h1>
            <div class="header-buttons">
                <a href="#login!" class="button">Log in!</a>
                <a href="#" class="button button-gray ">Read more</a>
            </div>
        </div>
         <script src="js/scripts.min.js"></script>
    </header>

<section class="formsection">
        <div class="container">
            <a name="login!"></a>
            <form class="grid" action="<?= Url::to(['/site/login']) ?>" class="well" method="POST">
                <div><input type="text" name="LoginForm[username]" placeholder="Your login" required></div>
                <div><input type="password" name="LoginForm[password]" placeholder="Your password"></div>
                <div><input type="text" name="name" placeholder="Empty field"></div>
                <div><button class="button">Log In</button></div>
                <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
            </form>
            <?php if(isset($failure) && $failure): ?>
    <script>
        $(function() {
            alert("Wrong username of password!")
        })
    </script>
<?php endif; ?>
        </div>
    </section> 





<section class="portfolio-section grid">
        <div class="portfolio-item grid" style="background-image: url(img/ii1.jpg)"><span>Courses</span></div>
        <div class="portfolio-item grid" style="background-image: url(img/im2.jpg)"><span>New Distedu</span></div>
        <div class="portfolio-item grid" style="background-image: url(img/ii3.jpg)"><span>Academy</span></div>
        <div class="portfolio-item grid" style="background-image: url(img/ii4.jpg)"><span>Dormitories</span></div>
        <div class="portfolio-item grid" style="background-image: url(img/ii5.jpg)"><span>Audiences</span></div>
        <div class="portfolio-item grid" style="background-image: url(img/ii6.jpg)"><span>History</span></div>
        <div class="portfolio-item grid" style="background-image: url(img/ii7.jpg)"><span>Need Help</span></div>
        <div class="portfolio-item grid" style="background-image: url(img/ii8.jpg)"><span>Students life</span></div>
        <div class="portfolio-item grid" style="background-image: url(img/ii9.jpg)"><span>Lecturers</span></div>
        
    </section>

  
    

    <section class="landing-section section-blog">
        <div class="container">
            
            <h2>Events</h2>
<!-- ТУТ може бути що-завгодно, (Student events in your city: Kyiv), СОФІЯ - твоє завдання придумати що саме-->

            <div class="blog-home grid">
                
                <a href="#" class="blog-item grid">
                    <span class="blog-item-img" style="background-image: url(img/rottenapples.jpg);"></span>
                    <span class="blog-item-content grid">
                        <h4>Permanent Installation</h4>
                        <p>Rotten Apples: Botanical Models of Diversity and Disease</p>
                    </span>
                </a>

                <a href="#" class="blog-item grid">
                    <span class="blog-item-img" style="background-image: url(img/2.jpg);"></span>
                    <span class="blog-item-content grid">
                        <h4>We Are Champions At Last Month</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo rem perferendis provident dolor nesciunt minima consectetur ipsum, architecto...</p>
                    </span>
                </a>

                <a href="#" class="blog-item grid">
                    <span class="blog-item-img" style="background-image: url(img/3.jpg);"></span>
                    <span class="blog-item-content grid">
                        <h4>We Are Champions At Last Month</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo rem perferendis provident dolor nesciunt minima consectetur ipsum, architecto...</p>
                    </span>
                </a>

                <a href="#" class="blog-item grid">
                    <span class="blog-item-img" style="background-image: url(img/4.jpg);"></span>
                    <span class="blog-item-content grid">
                        <h4>We Are Champions At Last Month</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo rem perferendis provident dolor nesciunt minima consectetur ipsum, architecto...</p>
                    </span>
                </a>

                <a href="#" class="blog-item grid">
                    <span class="blog-item-img" style="background-image: url(img/5.jpg);"></span>
                    <span class="blog-item-content grid">
                        <h4>We Are Champions At Last Month</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo rem perferendis provident dolor nesciunt minima consectetur ipsum, architecto...</p>
                    </span>
                </a>

                <a href="#" class="blog-item grid">
                    <span class="blog-item-img" style="background-image: url(img/6.jpg);"></span>
                    <span class="blog-item-content grid">
                        <h4>We Are Champions At Last Month</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo rem perferendis provident dolor nesciunt minima consectetur ipsum, architecto...</p>
                    </span>
                </a>

                <div class="buttoncase text-center">
                    <a href="#" class="button">View Blog</a>
                </div>

            </div>

        </div>
    </section>

    <footer class="main-footer">
        <div class="container">
            <div class="footer-logo">
                We Are Real <span>Creators</span>
            </div>
            <div class="footer-copy">~©~</div>
        </div>
    </footer>
    
    <link rel="stylesheet" href="css/main.min.css">
   


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>
