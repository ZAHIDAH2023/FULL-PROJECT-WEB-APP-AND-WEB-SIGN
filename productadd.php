<?php include('partial-front/menu.php'); ?>
   

<div class="small-container">


    <div class="row row-2">
        <h2>All Products</h2>
        <form action="">
        <select>
            <option>Default Shorting</option>
            <a href="product-detailsc1.html"></a><option>Short by Price</option></a>
            <option>Short by Popularity</option>
            <option>Short by Sale</option>
        </select>
        <br><br>
        <input type="submit" value="Submit">
        </form>
    </div>

    <div class="row">
        <div class="col-4">
            <a href="products-detailsshoe1.php"><img src="shoe1-1.png" ></a>
            <h4>Cloudroam Waterproof</h4>
            <p>RM 959.00</p>
        </div>
        <div class="col-4">
            <a href="product-detailsacc1.php"><img src="acc1-1.png" ></a>
            <h4>Studio Beanie</h4>
            <p>RM 239.00</p>
        </div>
        <div class="col-4">
            <a href="product-detailsc2.php"><img src="c2-1.png" ></a>
            <h4>Trek Pants</h4>
            <p>RM 719.00</p>
        </div>
        <div class="col-4">
            <a href="product-detailsc1.php"><img src="c1-1.png" ></a>
            <h4>Weather Jacket</h4>
            <p>RM 1,199.00</p>
        </div>
        <div class="col-4">
            <a href=""><img src="shoe2-1.png" ></a>
            <h4>Cloudrift</h4>
            <p>RM 749.00</p>
        </div>
        <div class="col-4">
            <a href=""><img src="shoe3-1.png" ></a>
            <h4>Cloud X3AD</h4>
            <p>RM 749.00</p>
        </div>
        <div class="col-4">
            <a href=""><img src="shoe4-1.png" ></a>
            <h4>Cloud5 Coast</h4>
            <p>RM 749.00</p>
        </div>
        <div class="col-4">
            <a href=""><img src="shoe5-1.png" ></a>
            <h4>Cloudboom Echo3</h4>
            <p>RM 1,379.00</p>
        </div>
        <div class="col-4">
            <a href=""><img src="acc2-1.png" ></a>
            <h4>Zero Cap</h4>
            <p>RM 269.00</p>
        </div>
        <div class="col-4">
            <a href=""><img src="acc3-1.png" ></a>
            <h4>Lumos Headband</h4>
            <p>RM 149.00</p>
        </div>
        <div class="col-4">
            <a href=""><img src="acc4-1.png" ></a>
            <h4>All-day Sock</h4>
            <p>RM 119.00</p>
        </div>
        <div class="col-4">
            <a href=""><img src="acc5-1.png" ></a>
            <h4>Ultralight Low Sock</h4>
            <p>RM 119.00</p>
        </div>
        <div class="col-4">
            <a href=""><img src="c3-1.png" ></a>
            <h4>Hoodie</h4>
            <p>RM 749.00</p>
        </div>
        <div class="col-4">
            <a href=""><img src="c4-1.png" ></a>
            <h4>Tank Top Light Distance</h4>
            <p>RM 449.00</p>
        </div>
        <div class="col-4">
            <a href=""><img src="c5-1.png" ></a>
            <h4>Performance Tights Lumos</h4>
            <p>RM 749.00</p>
        </div>
    </div>

    <div class="page-btn">
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>&#8594;</span>
    </div>

</div>
<!------------Footer---------->
<?php include('partial-front/footer.php'); ?>
<!--------js for toggle menu------------>
<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight == "200px";
        }
        else
        {
            MenuItems.style.maxHeight == "0px";
        }

    }
</script>
</body>
</html>