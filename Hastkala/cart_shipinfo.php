<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" />
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" tyle="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" tyle="text/css" href="./assets/css/hover.css">
    <link rel="stylesheet" tyle="text/css" href="./assets/css/cart_pages.css">

    <title>cart_info
    </title>
</head>

<body
    style=" background: rgb(255,255,255);background: linear-gradient(90deg, rgba(255,255,255,1) 51%, rgba(242,242,243,1) 55%);">
    <div class="content">
        <div class="wrap">
            <div class="main" style="background-color: #fff;">
                <header class="mb-0 pb-0">
                    <a class="logo logo--left" href="./index.php">
                        <img class="logo_image" src="./assets/images/New Project (1).png" style="width: 18rem;">
                    </a>
                    <nav aria-label="breadcrumb" style="margin-left: -15px;">
                        <ol class="breadcrumb cart_bc mt-3" style="background-color:transparent;">
                            <li class="breadcrumb-item"><a href="./cart.php">Cart</a></li>
                            <li class="breadcrumb-item"><a href="./cart_infopage.php">Information</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shipping</li>
                            <li class="breadcrumb-item"><a href="./cart_payment.php">Payment</a></li>
                        </ol>
                    </nav>
                </header>
                <main class="pb-5">
                    <div>
                        <form action="/" method="POST" class="form-padding">
                            <div class="steps">
                                <div class="section">
                                    <div class="content-box">
                                        <table>
                                            <tbody class="content-box__row ">
                                                <tr>
                                                    <td class="review_label sm-hide pt-0">Contact</td>
                                                    <td class="review_content pt-0">princymuskan25@gmail.com</td>
                                                    <td class="review_link pt-0"><a href="./cart_infopage.php">Change</a> </td>
                                                </tr>
                                                <tr style="border-top:1px solid #d9d9d9;">
                                                    <td class="review_label sm-hide pb-0">Ship to</td>
                                                    <td class="review_content pb-0">Ravindra Jain, ajay enclave colony,
                                                        284002 Jhansi UP, India</td>
                                                    <td class="review_link pb-0"><a href="./cart_infopage.php">Change</a> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="section">
                                    <div class="section_header">
                                        <h5> Shipping Address</h5>
                                        <p style=" color: #70767a;font-size: 0.9em;">
                                            Cash on Delivery is applicable for orders upto Rs 4999.
                                        </p>
                                    </div>
                                    <div class="content-box">
                                        <table>
                                            <tbody class="content-box__row ">
                                                <tr>
                                                    <td class="review_label pt-0">
                                                        <input class="input-radio" type="radio" name="cod" value="yes" onclick="Check(this)" required>
                                                    </td>
                                                    <td class="review_content pt-0">Online</td>
                                                    <td class="ship-price pt-0">
                                                        <span style="font-weight: 500;color: #333333;">Free</span>
                                                    </td>
                                                </tr>
                                                <tr style="border-top:1px solid #d9d9d9;color: #545454;">
                                                    <td class="review_label pb-0">
                                                        <input class="input-radio" type="radio" name="cod" value="no" required>
                                                    </td>
                                                    <td class="review_content pb-0">Cash on Delivery<br>
                                                        <span class="small-text">COD is not available on customizable
                                                            name plates. Any order placed on COD will be
                                                            cancelled.</span>
                                                    </td>
                                                    <td class="ship-price pb-0">
                                                        <span style="font-weight: 500;color: #333333;">Rs.99.00</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 text-right sm-center">
                                <a type="button" class="btn btn-primary btn-lg" href="./cart_payment.php"
                                    style="font-size: 16px;padding-top: 18px; padding-bottom: 18px;">
                                    Continue to Payment
</a>
                                <a class="footer__previous-link pt-3 sm-hide" href="./cart_infopage.php" style=" text-decoration: none;">
                                    <i class="fa fa-angle-left iconsize-10" aria-hidden="true" style="font-size: 20px;"></i>
                                    <span class="footer__previous-link-content">Return to information</span>
                                </a>
                                <div class="d-block d-md-none d-lg-none ">
                                <a class="footer__previous-link pt-1" href="./cart_infopage.php" style=" text-decoration: none;">
                                    <i class="fa fa-angle-left iconsize-10" aria-hidden="true" style="font-size: 20px;"></i>
                                    <span class="footer__previous-link-content">Return to information</span>
                                </a>
                            </div>
                            </div>
                            
                        </form>
                    </div>
                    <div class="main__footer">
                        <ul class="text-left" style="margin-left: -40px;">
                            <li class="policy">
                                <a href="#">Refund policy</a>
                            </li>
                            <li class="policy">
                                <a href="#">Privacy policy</a>
                            </li>
                            <li class="policy">
                                <a href="#">Terms of service</a>
                            </li>
                        </ul>
                    </div>
                </main>

            </div>
            <aside class="sidebar">
                <div class="sidebar_content">
                    <div class="order">
                        <div class="order-summary__sections" style="color: #323232;">
                            <div class="order-summary__section product-list">
                                <div class="order-summary__section__content">
                                    <table class="product-table b-0">
                                        <tbody>
                                            <tr class="pt-0 pro_info">
                                                <td>
                                                    <div class="pro-img_cart">
                                                        <div class="product-wrapper">
                                                            <img class="img-fluid" src="assets/images/cart_proimg1.jpg">
                                                        </div>
                                                    </div>
                                                </td>
                                                <th class="pro-desc_cart py-0">
                                                    <span class="pro-desc-name">
                                                        Hand Engraved Square Spice Box With Spoon In Sheesham Wood (9
                                                        Partitions, 80 ML)
                                                    </span>
                                                </th>
                                                <td class="product__price font-weight-bold">
                                                    <span class="">Rs. 1,195.00</span>
                                                </td>
                                            </tr>
                                            <tr class="pro_info">
                                                <td>
                                                    <div class="pro-img_cart">
                                                        <div class="product-wrapper">
                                                            <img class="img-fluid" src="assets/images/cart_proimg2.jpg">
                                                        </div>
                                                    </div>
                                                </td>
                                                <th class="pro-desc_cart py-0">
                                                    <span class="pro-desc-name">
                                                        River Rims' Studio Pottery Glazed Coffee Mugs In Ceramic (Set Of
                                                        2)
                                                    </span> </span>
                                                </th>
                                                <td class="product__price font-weight-bold">
                                                    <span class="">Rs. 695.00</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="order-summary__section discount">
                                <form action="/" method="post">
                                    <div class="field">
                                        <div style="display:flex">
                                            <div class="field__input-wrapper">
                                                <label class="field__label" for="reduction_code">Gift card or discount
                                                    code</label>
                                                <input placeholder="Gift card or discount code"
                                                    class="field__input promo" id="reduction_code" autocomplete="off"
                                                    aria-required="true" size="30" type="text">
                                            </div>
                                            <button name="button" type="submit"
                                                class="field__input-btn btn btn--disabled" aria-busy="false" disabled="disabled">
                                                <span class="btn__content"> Apply</span>
                                            </button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                            <div class="order-summary__section prices-line">
                                <table>
                                    <tbody class="prices-line">
                                        <tr class="price-line">
                                            <th class="font-weight-bold">Subtotal</th>
                                            <td class="font-weight-bold">
                                                <span>
                                                    Rs. 1,890.00
                                                </span>
                                            </td>
                                        </tr>
                                        <tr class="price-line">
                                            <th class="font-weight-bold">
                                                Shipping
                                            </th>
                                            <td class="font-weight-bold">
                                                <span>
                                                    Rs. 99.00
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="order-summary__section">
                                <table>
                                    <tbody>
                                        <tr class="price-line">
                                            <th class="font-weight-bold">
                                                <span class=" h5">Total</span>
                                            </th>
                                            <td class="font-weight-bold">
                                                <span class="payment-due__price ">
                                                    Rs. 1,989.00
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
    crossorigin="anonymous"></script>
<script>
function Check(e) {
  var button = document.getElementById("submit");

  if (button.disabled == true) {
    button.disabled = false;
  } else {
    button.disabled = true;
  }
}
</script>

</body>
</html>