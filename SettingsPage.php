<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <!--
    
    Osama Halawani - 2037370
    Hamed Fallatah - 2035900
    Sultan Humusani - 2036377

    Date: 7/12/2023 -->

    <title>Settings Page</title>

    <!-- Link to the external CSS file -->
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
    <?php include 'header.php'; ?>

    <!-- Account Settings Block -->
    <div class="account-settings">
        <h3> Account Settings </h3><br />
        <div class="settings-block">
            <h5> Profile Photo</h5>
            <button>Edit</button>
            <br /><br />
            <h5> Name </h5>
            <button>Edit</button>
            <br /><br />
            <h5> Email Address </h5>
            <button>Edit</button>
        </div>
    </div>

    <hr id="FHr" />

    <!-- Theme Block -->
    <div class="theme-settings">
        <h3> Theme </h3><br />
        <div class="settings-block">
            <h5> Select preferred Theme </h5>
            <button>Dark</button>
            <button>Light</button>
        </div>
    </div>

    <hr id="SHr" />

    <!-- Notification Block -->
    <div class="notification-settings">
        <h3> Notification </h3><br />
        <div class="settings-block">
            <h5> Would you like to receive an email for new offers</h5>
            <button>Yes</button>
            <button>No</button>
        </div>
    </div>

    <?php include 'footer.php'; ?>

</body>

</html>