<html>
<head>
    <title>mbuh mbuh</title>
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
</head>
<body>
<div id="owl-demo" class="owl-carousel">

    <div class="item"><img src="img/thumbnail.jpg" alt="Owl Image"></div>
    <div class="item"><img src="img/thumbnail.jpg" alt="Owl Image"></div>
    <div class="item"><img src="img/thumbnail.jpg" alt="Owl Image"></div>
    <div class="item"><img src="img/thumbnail.jpg" alt="Owl Image"></div>
    <div class="item"><img src="img/thumbnail.jpg" alt="Owl Image"></div>
    <div class="item"><img src="img/thumbnail.jpg" alt="Owl Image"></div>

</div>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/owl.carousel.js"></script>

<script>
    $(document).ready(function() {

        $("#owl-demo").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds

            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3]

        });

    });
</script>
</body>
</html>