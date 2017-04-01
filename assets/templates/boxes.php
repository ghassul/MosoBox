<!DOCTYPE>
<html>
<?php $pageType = "boxes"; ?>
<?php include('../assets/includes/head.php'); ?>
<body>
<header>
    <?php include('../assets/includes/navbar.php') ?>
</header>

<section class="main-content container boxes">
    <h1>Disco Brando Box</h1>

    <section class="image-section">

        <div class="main-image">
            <img src="/assets/images/boxes/discobrando/DB_Box_Image1.jpg" alt="">
        </div>

        <div class="image-thumbnails">
            <div class="thumbnail active"><img src="/assets/images/boxes/discobrando/DB_Box_Image1.jpg" alt=""></div>
            <div class="thumbnail"><img src="/assets/images/boxes/discobrando/DB_Box_Image2.jpg" alt=""></div>
            <div class="thumbnail"><img src="/assets/images/boxes/discobrando/DB_Box_Image3.jpg" alt=""></div>
            <div class="thumbnail"><img src="/assets/images/boxes/discobrando/DB_Box_Image4.jpg" alt=""></div>
            <div class="thumbnail"><img src="/assets/images/boxes/discobrando/DB_Box_Image5.jpg" alt=""></div>
        </div>

    </section>

    <section class="order-section">

        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="D7XGP2E4M2UKG">
            <table>
                <tr><td><input type="hidden" name="on0" value="Box Type">Box Type</td></tr><tr><td><select name="os0">
                            <option value="Standard">Standard $50.00 USD</option>
                            <option value="Complete">Complete $60.00 USD</option>
                            <option value="Shirt Only">Shirt Only $30.00 USD</option>
                        </select> </td></tr>
                <tr><td><input type="hidden" name="on1" value="Shirt Size (Unisex)">Shirt Size (Unisex)</td></tr><tr><td><select name="os1">
                            <option value="M">M </option>
                            <option value="XS">XS </option>
                            <option value="S">S </option>
                            <option value="L">L </option>
                            <option value="XL">XL </option>
                            <option value="XL2">XL2 </option>
                        </select> </td></tr>
            </table>
            <input type="hidden" name="currency_code" value="USD">
            <input type="image" src="/assets/images/PayPalButton.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" class="paypal-button">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>

        <div class="info-block">
            <p>Regular Price</p>
            <p>Standard - $60 USD</p>
            <p>Complete - $70 USD</p>
            <p>Shirt Only - $35 USD</p>
            <p>Shipping + Handling included</p>
        </div>

        <div class="info-block bold-text">
            <p>Pre-Order Price</p>
            <p>Standard - $50 USD</p>
            <p>Complete - $60 USD</p>
            <p>Shirt Only - $30 USD</p>
            <p>Shipping + Handling included</p>
        </div>

        <div class="info-block">
            <p>Pre-order end date</p>
            <p>31-March-2017</p>
        </div>

        <div class="info-block">
            <p>Mailing Date</p>
            <p>20-April-2017</p>
        </div>

        <div class="info-block">
            <p>Standard Box Contains</p>
            <p>Choice of 3 Posters</p>
            <p>Choice of 3 Postcards</p>
            <p>3 Buttons</p>
            <p>1 Shirt</p>
        </div>

        <div class="info-block">
            <p>Complete Box Contains</p>
            <p>All 6 Posters</p>
            <p>All 6 Postcards</p>
            <p>3 Buttons</p>
            <p>1 Shirt</p>
        </div>
    </section>

    <section class="product-info">
        <div class="product-specs">
            <h3>Product Specifications</h3>

            <div class="info-block">
                <p>Mailing Box:</p>
                <p>- Dimensions 11.25" x 8.75" x 2.125"</p>
            </div>

            <div class="info-block">
                <p>Posters:</p>
                <p>- Dimensions 11" x 17"</p>
            </div>

            <div class="info-block">
                <p>Post Card</p>
                <p>- Dimensions: 4" x 6"</p>
            </div>

            <div class="info-block">
                <p>Buttons:</p>
                <p>- Diameter 2.25"</p>
            </div>

            <div class="info-block">
                <p>Shirt:</p>
                <p>- Specify size before ordering.</p>
                <p>- 100% Cotton</p>
            </div>
        </div>

        <div class="details">
            <h3>Details</h3>

            <div class="info-block">
                <p>Note: For the standard box you will receive an e-mail to confirm which posters and postcards you will want to receive</p>
                <p>A collection of art from the artist Disco Brando containing a varied selection of posters and post cards,
                    a set of three reaction buttons, as well as a "How to Train Your Chorogon" shirt.</p>
            </div>
            
            <div class="artist-image">
                <p>Artist:</p>
                <a href="https://www.facebook.com/discobrandow/" target="_blank">
                    <img src="/assets/images/partners/Disco_Brando_Banner.png" alt="">
                </a>
            </div>
        </div>
    </section>

</section>


<?php include('../assets/includes/footer.php'); ?>