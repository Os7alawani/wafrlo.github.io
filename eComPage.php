<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <!--
    
    Osama Halawani - 2037370
    Hamed Fallatah - 2035900
    Sultan Humusani - 2036377

    Date: 7/12/2023 -->

    <title>
        E-commerce Page
    </title>

    <!-- Link to the external CSS file -->
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
    <?php include 'header.php'; ?>
    <div>
        <br />
    </div>
    <!-- Sidebar section with an image -->
    <div>
        <img id="vImage" src="ecommImage.jpg" alt="" />
    </div>
    <div id="otSe">
        <!-- Main content section -->
        <div id="searchContainer">
            <!-- Search bar container -->
            <form action="/search" method="get">
                <div>
                    <input type="text" name="q" />
                    <input type="submit" value="Search" />
                </div>
            </form>
        </div>

        <div id="offersContainer">
            <!-- Container for displaying offers -->
            <img class="detail" src="noon.png" alt="" />
            <img class="detail" src="namshi.png" alt="" />
            <img class="detail" src="amazon.png" alt="" />
            <img class="detail" src="hungere.png" alt="" />
            <img class="detail" src="ikea.png" alt="" />
            <br />
            <img class="detail" src="Othiam.png" alt="" />
            <img class="detail" src="giordano.png" alt="" />
            <img class="detail" src="saco.png" alt="" />
            <img class="detail" src="carrefour.png" alt="" />
            <img class="detail" src="almajed.png" alt="" />
        </div>
    </div>

    <?php include 'footer.php'; ?>

</body>

</html>