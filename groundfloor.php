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
        <div class="room available" data-room-id="201">Room 201</div>
        <div class="room available" data-room-id="202">Room 202</div>
        <div class="room available" data-room-id="203">Room 203</div>
        <div class="room available" data-room-id="204">Room 204</div>
        <div class="room available" data-room-id="205">Room 205</div>
        <div class="room available" data-room-id="206">Room 206</div>
        <div class="room available" data-room-id="207">Room 207</div>
        <div class="room available" data-room-id="208">Room 208</div>
        <div class="room available" data-room-id="209">Room 209</div>
        <div class="room available" data-room-id="210">Room 210</div>
        <div class="room available" data-room-id="211">Room 211</div>
        <div class="room available" data-room-id="212">Room 212</div>
        <div class="room available" data-room-id="213">Room 213</div>
        <div class="room available" data-room-id="214">Room 214</div>
        <div class="room available" data-room-id="215">Room 215</div>
        <div class="room available" data-room-id="216">Room 216</div>
        <div class="room available" data-room-id="217">Room 217</div>
        <div class="room available" data-room-id="218">Room 218</div>
        <div class="room available" data-room-id="219">Room 219</div>
        <div class="room available" data-room-id="220">Room 220</div>
        <div class="room available" data-room-id="221">Room 221</div>
        <div class="room available" data-room-id="222">Room 222</div>
        <div class="room available" data-room-id="223">Room 223</div>
        <div class="room available" data-room-id="224">Room 224</div>
        <div class="room available" data-room-id="225">Room 225</div>
        <div class="room available" data-room-id="225">Room 226</div>
        <div class="room available" data-room-id="227">Room 227</div>
        <div class="room available" data-room-id="228">Room 228</div>
        <div class="room available" data-room-id="229">Room 229</div>
        <div class="room available" data-room-id="230">Room 130</div>
        <div class="room available" data-room-id="231">Room 231</div>
        <div class="room available" data-room-id="232">Room 232</div>
        <div class="room available" data-room-id="233">Room 233</div>
        <div class="room available" data-room-id="234">Room 234</div>
        <div class="room available" data-room-id="235">Room 235</div>
        <div class="room available" data-room-id="236">Room 236</div>
        <div class="room available" data-room-id="137">Room 237</div>
        <div class="room available" data-room-id="138">Room 238</div>
        <div class="room available" data-room-id="139">Room 239</div>
        <div class="room available" data-room-id="140">Room 240</div>
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