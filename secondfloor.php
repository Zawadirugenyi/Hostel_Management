<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Selection Page</title>
    <!-- Title of Site -->
    <title>Kryptons Hostels</title>
    <!-- Favicons -->
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/all.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css" />
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <!-- Swiper Bundle CSS -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <!-- Mean Menu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/sass/style.css" />
</head>
<link rel="stylesheet" href="style 2.css">
</head>

<body>
    <h1>Room Selection</h1>
    <div class="room-container">
        <div class="room available" data-room-id="301">Room 301</div>
        <div class="room available" data-room-id="302">Room 302</div>
        <div class="room available" data-room-id="303">Room 303</div>
        <div class="room available" data-room-id="304">Room 304</div>
        <div class="room available" data-room-id="305">Room 305</div>
        <div class="room available" data-room-id="306">Room 306</div>
        <div class="room available" data-room-id="307">Room 307</div>
        <div class="room available" data-room-id="308">Room 308</div>
        <div class="room available" data-room-id="309">Room 309</div>
        <div class="room available" data-room-id="310">Room 310</div>
        <div class="room available" data-room-id="311">Room 311</div>
        <div class="room available" data-room-id="312">Room 312</div>
        <div class="room available" data-room-id="313">Room 313</div>
        <div class="room available" data-room-id="314">Room 314</div>
        <div class="room available" data-room-id="315">Room 315</div>
        <div class="room available" data-room-id="316">Room 316</div>
        <div class="room available" data-room-id="317">Room 317</div>
        <div class="room available" data-room-id="318">Room 318</div>
        <div class="room available" data-room-id="319">Room 319</div>
        <div class="room available" data-room-id="320">Room 320</div>
        <div class="room available" data-room-id="321">Room 321</div>
        <div class="room available" data-room-id="322">Room 322</div>
        <div class="room available" data-room-id="323">Room 323</div>
        <div class="room available" data-room-id="324">Room 324</div>
        <div class="room available" data-room-id="325">Room 325</div>
        <div class="room available" data-room-id="325">Room 326</div>
        <div class="room available" data-room-id="327">Room 327</div>
        <div class="room available" data-room-id="328">Room 328</div>
        <div class="room available" data-room-id="329">Room 329</div>
        <div class="room available" data-room-id="330">Room 330</div>
        <div class="room available" data-room-id="331">Room 331</div>
        <div class="room available" data-room-id="332">Room 332</div>
        <div class="room available" data-room-id="333">Room 333</div>
        <div class="room available" data-room-id="334">Room 334</div>
        <div class="room available" data-room-id="335">Room 335</div>
        <div class="room available" data-room-id="336">Room 336</div>
        <div class="room available" data-room-id="337">Room 337</div>
        <div class="room available" data-room-id="338">Room 338</div>
        <div class="room available" data-room-id="339">Room 339</div>
        <div class="room available" data-room-id="340">Room 340</div>
        <!-- Add more rooms as needed -->
        <a class="theme-btn" id="checkout-button" disabled
            style="display: flex; justify-content: center; align-items: center;">Checkout <i
                class="fal fa-long-arrow-right"></i></a>




        <!-- Modal for editing selections -->
        <div id="selection-modal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Edit Your Selections</h2>
                <div id="selected-rooms">
                    <!-- Selected rooms will be displayed here -->
                </div>
                <button id="update-selection-button">Update Selection</button>
                <button id="edit-selection-button" disabled>Edit Selection</button>
            </div>
        </div>

        <script src="booking.js"></script>
</body>

</html>