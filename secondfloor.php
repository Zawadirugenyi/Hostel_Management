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
        <div class="room available" data-room-id="2301">Room 201</div>
        <div class="room available" data-room-id="302">Room 202</div>
        <div class="room available" data-room-id="303">Room 203</div>
        <div class="room available" data-room-id="304">Room 204</div>
        <div class="room available" data-room-id="305">Room 205</div>
        <div class="room available" data-room-id="306">Room 206</div>
        <div class="room available" data-room-id="307">Room 207</div>
        <div class="room available" data-room-id="308">Room 208</div>
        <div class="room available" data-room-id="309">Room 209</div>
        <div class="room available" data-room-id="310">Room 210</div>
        <div class="room available" data-room-id="311">Room 211</div>
        <div class="room available" data-room-id="312">Room 212</div>
        <div class="room available" data-room-id="313">Room 213</div>
        <div class="room available" data-room-id="314">Room 214</div>
        <div class="room available" data-room-id="315">Room 215</div>
        <div class="room available" data-room-id="316">Room 216</div>
        <div class="room available" data-room-id="317">Room 217</div>
        <div class="room available" data-room-id="318">Room 218</div>
        <div class="room available" data-room-id="319">Room 219</div>
        <div class="room available" data-room-id="320">Room 220</div>
        <div class="room available" data-room-id="321">Room 221</div>
        <div class="room available" data-room-id="322">Room 222</div>
        <div class="room available" data-room-id="323">Room 223</div>
        <div class="room available" data-room-id="324">Room 224</div>
        <div class="room available" data-room-id="325">Room 225</div>
        <div class="room available" data-room-id="325">Room 226</div>
        <div class="room available" data-room-id="327">Room 227</div>
        <div class="room available" data-room-id="328">Room 228</div>
        <div class="room available" data-room-id="329">Room 229</div>
        <div class="room available" data-room-id="330">Room 130</div>
        <div class="room available" data-room-id="331">Room 231</div>
        <div class="room available" data-room-id="332">Room 232</div>
        <div class="room available" data-room-id="233">Room 233</div>
        <div class="room available" data-room-id="234">Room 234</div>
        <div class="room available" data-room-id="235">Room 235</div>
        <div class="room available" data-room-id="236">Room 236</div>
        <div class="room available" data-room-id="237">Room 237</div>
        <div class="room available" data-room-id="238">Room 238</div>
        <div class="room available" data-room-id="239">Room 239</div>
        <div class="room available" data-room-id="240">Room 240</div>
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