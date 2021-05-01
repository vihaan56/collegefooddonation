<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Index</title>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark  bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Hunger Halters</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./aboutus.php">About us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="projectDropdown" role="button"
                                data-toggle="dropdown" aria-expanded="false">
                                Projects
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="projectDropdown">

                                <li><a class="dropdown-item" href="./projectList/food-for-hungry-children.php">FOOD FOR
                                        HUNGRY CHILDREN</a></li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="./contact-us.php">Contact us</a>
                        </li>
                    </ul>
                    <a href="./donate.php" id="button" class="btn btn-warning"><span></i>Donate Now</i></span></a>

                </div>
            </div>
        </nav>
    </header>
    <main>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="https://www.iwcwtministry.org/wp-content/uploads/2014/08/slide1-1.jpg"
                        class="d-block w-100" alt="...">


                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>#IamFeedingIndia</h1>
                            <p>We are serving cooked meals to people in need daily through our NGO partners across India
                            </p>
                            <p><a class="btn btn-lg btn-warning" href="#" role="button">Donate Now</a></p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item active">
                    <img src="https://cdn.shortpixel.ai/client/q_glossy,ret_img/http://www.iwcwtministry.org/wp-content/uploads/2014/08/slide6.jpg"
                        class="d-block w-100" alt="...">


                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>FOOD FOR HUNGRY CHILDREN</h1>
                            <p><a class="btn btn-lg btn-warning" href="#" role="button">Join us</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </main>
    <div class="container">
        <div class="bg-light p-5 rounded">
            <div class="container">
                <span style="font-size: 1.6rem;font-family: Okra,Helvetica,sans-serif;">4,55,791 meals served in the
                    last 30 days</span>
                <div style="margin-top:36px;display:flex;  flex-wrap: wrap;justify-content:space-between;"
                    class="donation-buttons">

                    <div style="padding:10px;" class="donation-button">
                        <p style="margin-bottom: 0.8rem;color: rgb(79, 79, 79);font-size: 1.0rem;font-weight: 400; text-align: center;line-height:1.3;"
                            class="heading_donation">Help feed 50 meals</p>
                        <button style="width:120px;" type="button" class="btn btn-outline-danger">₹500</button>


                    </div>

                    <div style="padding:10px;" class="donation-button">
                        <p style="margin-bottom: 0.8rem;color: rgb(79, 79, 79);font-size: 1.0rem;font-weight: 400; text-align: center;line-height:1.3;"
                            class="heading_donation">Help feed 100 meals</p>
                        <button style="width:120px;" type="button" class="btn btn-outline-danger">₹1000</button>

                    </div>

                    <div style="padding:10px;" class="donation-button">
                        <p style="margin-bottom: 0.8rem;color: rgb(79, 79, 79);font-size: 1.0rem;font-weight: 400; text-align: center;line-height:1.3;"
                            class="heading_donation">Help feed 250 meals</p>
                        <button style="width:120px;" type="button" class="btn btn-outline-danger">₹2500</button>

                    </div>

                    <div style="padding:10px;" class="donation-button">
                        <p style="margin-bottom: 0.8rem;color: rgb(79, 79, 79);font-size: 1.0rem;font-weight: 400; text-align: center;line-height:1.3;"
                            class="heading_donation">Enter an amount</p>
                        <button style="width:120px;" type="button" class="btn btn-outline-danger">Enter Here</button>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- <div class="container my-4">
        <div class="row">
            <div id="currentHeading" class="col-md-12">
                <h4 style="text-align:center;">CURRENT PROJECTS</h4>
            </div>



        </div> -->

    <div style="margin-top:60px;" class="container">
        <div class="row">

            <span style="font-size: 1.6rem;font-family: Okra,Helvetica,sans-serif;">Help us put an <b>end to hunger in
                    India</b></span>
            <p class="lead my-2">
                194 million people in India today do not have enough food to eat, the largest in any one country in the
                world. According to the Global Hunger Index 2020, India falls under the ‘serious’ hunger category with a
                rank of 94 among 117 countries.
            </p>

            <p class="lead my-2">These statistics however, do not take into account the effects of COVID-19 and the
                resultant migration
                and unemployment during 2020. COVID-19 has pointed us towards the fact that public distribution systems
                alone cannot be our answer for a future with Zero Hunger.
            </p>

        </div>
        <div style="margin-top:40px;">
            <span style="font-size: 1.6rem;font-family: Okra,Helvetica,sans-serif;">How we work</span>
            <p class="lead my-2">
                We aim to redistribute surplus food to those who are in need of it. If you have excess food from an
                event, party, weeding etc,
                please call our helpline, our volunteers will collect the excess food from you and distribute it among
                people who need it.
                The excess food will be checked for quality because lack of proper refrigeration and storage tend to
                spoil food

            </p>
            <br>
            <div class="row my-2">
                <div class="column">
                    <div class="card">
                        <span>Call us</span>
                        <p>A donor gets in touch with us at our helpline</p>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <span>Quality Check</span>
                        <p>A team is dispatched to check quality of excess food</p>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <span>Locate</span>
                        <p>We locate the most feasible hunger spot</p>
                    </div>
                </div>

                <div class="column">
                    <div class="card">
                        <span>Deliver</span>
                        <p>Excess food is redistributed with love.</p>
                    </div>
                </div>
            </div>


        </div>

        <h4 style="text-align: center;margin-top:50px;"><span><strong> EARNED BADGES 2021:<br>
                </strong></span></h4>
        <h2 style="text-align: center;margin-top:40px;"><span class="row">
                <div class="column">
                    <noscript><img
                            src="https://cdn.shortpixel.ai/client/q_glossy,ret_img/https://www.iwcwtministry.org/wp-content/uploads/2020/01/Badges.png"
                            alt="" style="width:70%"></noscript><img class=" lazyloaded"
                        src="https://cdn.shortpixel.ai/client/to_webp,q_glossy,ret_img/https://www.iwcwtministry.org/wp-content/uploads/2020/01/Badges.png"
                        data-src="https://cdn.shortpixel.ai/client/to_webp,q_glossy,ret_img/https://www.iwcwtministry.org/wp-content/uploads/2020/01/Badges.png"
                        alt="" style="width:70%">
                </div>
                <p></p>
            </span></h2>




    </div>
    <!-- Footer -->
    <footer style="background-color:#343a40;" class="page-footer font-small ">

        <!-- Copyright -->
        <div style="color:white;" class="footer-copyright text-center py-3">All rights reserved. ©
            <a style="text-decoration:none;color:white;" href="">Creation:<span style="font-weight:600;"> Hunger
                    Halters</span></a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
</body>

</html>