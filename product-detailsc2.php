<?php include('partial-front/menu.php'); ?>
   
  <!-------------single products ------------>  
  
  <div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img src="c2-1.png" width="100%" id="ProductImg">

            <div class="small-img-row">
                <div class="small-img-col">
                    <img src="c2-1.png" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="c2-2.png" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="c2-3.png" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="c2-4.png" width="100%" class="small-img">
                </div>
            </div>




        </div>
        <div class="col-2">
            <p>Home / Clothing</p>
            <h1>Trek Pants</h1>
            <h4>RM 719.00</h4>
            <select>
                <option> Select Size</option>
                <option> Large</option>
                <option> Medium</option>
                <option> Small</option>
            </select>
            <input type="number" value="1">
            <a href="" class="btn">Add To Cart</a>

            <h3>Product Details <i class="fa fa-indent"></i></h3>
            <br>
            <p>Multi-day hikes or a ramble on the trail, the lightweight Trek Pants are ready to see what's out there. 
                Plus extra pockets for handy access when wearing a backpack.</p> 
        </div>
    </div>
  </div>


  <!-----------title------->
  <div class="small-container">
    <div class="row row-2">
        <h2>Related Products</h2>
        <p>View More</p>
    </div>
  </div>

  <!-------product---->
<div class="small-container">


    <div class="row">
        <div class="col-4">
            <a href="products-detailsshoe1.html"><img src="shoe1-1.png" ></a>
            <h4>Cloudroam Waterproof</h4>
            <p>RM 959.00</p>
        </div>
        <div class="col-4">
            <a href="product-detailsacc1.html"><img src="acc1-1.png" ></a>
            <h4>Studio Beanie</h4>
            <p>RM 239.00</p>
        </div>
        <div class="col-4">
            <img src="acc4-1.png" >
            <h4>All-day Socks</h4>
            <p>RM 119.00</p>
        </div>
        <div class="col-4">
            <a href="product-detailsc1.html"><img src="c1-1.png" ></a>
            <h4>Weather Jacket</h4>
            <p>RM 1199.00</p>
        </div>
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


<!------js for product gallery---->

    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");

            SmallImg[0].onclick = function()
            {
                ProductImg.src = SmallImg[0].src;
            }
            SmallImg[1].onclick = function()
            {
                ProductImg.src = SmallImg[1].src;
            }
            SmallImg[2].onclick = function()
            {
                ProductImg.src = SmallImg[2].src;
            }
            SmallImg[3].onclick = function()
            {
                ProductImg.src = SmallImg[3].src;
            }
    </script>


</body>
</html>