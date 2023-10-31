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
        <div class="room available" data-room-id="101">Room 101</div>
        <div class="room available" data-room-id="102">Room 102</div>
        <div class="room available" data-room-id="103">Room 103</div>
        <div class="room available" data-room-id="104">Room 104</div>
        <div class="room available" data-room-id="105">Room 105</div>
        <div class="room available" data-room-id="106">Room 106</div>
        <div class="room available" data-room-id="107">Room 107</div>
        <div class="room available" data-room-id="108">Room 108</div>
        <div class="room available" data-room-id="109">Room 109</div>
        <div class="room available" data-room-id="110">Room 110</div>
        <div class="room available" data-room-id="111">Room 111</div>
        <div class="room available" data-room-id="112">Room 112</div>
        <div class="room available" data-room-id="113">Room 113</div>
        <div class="room available" data-room-id="114">Room 114</div>
        <div class="room available" data-room-id="115">Room 115</div>
        <div class="room available" data-room-id="116">Room 116</div>
        <div class="room available" data-room-id="117">Room 117</div>
        <div class="room available" data-room-id="118">Room 118</div>
        <div class="room available" data-room-id="119">Room 119</div>
        <div class="room available" data-room-id="120">Room 120</div>
        <div class="room available" data-room-id="121">Room 121</div>
        <div class="room available" data-room-id="122">Room 122</div>
        <div class="room available" data-room-id="123">Room 123</div>
        <div class="room available" data-room-id="124">Room 124</div>
        <div class="room available" data-room-id="125">Room 125</div>
        <div class="room available" data-room-id="125">Room 126</div>
        <div class="room available" data-room-id="127">Room 127</div>
        <div class="room available" data-room-id="128">Room 128</div>
        <div class="room available" data-room-id="129">Room 129</div>
        <div class="room available" data-room-id="130">Room 130</div>
        <div class="room available" data-room-id="131">Room 131</div>
        <div class="room available" data-room-id="132">Room 132</div>
        <div class="room available" data-room-id="133">Room 133</div>
        <div class="room available" data-room-id="134">Room 134</div>
        <div class="room available" data-room-id="135">Room 135</div>
        <div class="room available" data-room-id="136">Room 136</div>
        <div class="room available" data-room-id="137">Room 137</div>
        <div class="room available" data-room-id="138">Room 138</div>
        <div class="room available" data-room-id="139">Room 139</div>
        <div class="room available" data-room-id="140">Room 140</div>
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