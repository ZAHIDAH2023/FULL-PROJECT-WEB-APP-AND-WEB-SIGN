<?php include('partial-front/menu.php'); ?>
   
  <!-------------single products ------------>  
  
  <div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img src="c1-1.png" width="100%" id="ProductImg">

            <div class="small-img-row">
                <div class="small-img-col">
                    <img src="c1-1.png" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="c1-2.png" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="c1-3.png" width="100%" class="small-img">
                </div>
            </div>




        </div>
        <div class="col-2">
            <p>Home / Clothing</p>
            <h1>Weather Jacket</h1>
            <h4>RM 1,119.00</h4>
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
            <p>A running jacket for ultralight protection from the elements. 
                Made with breathable, windproof fabrics, it’s ideal for changing weather.</p> 
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
            <a href="products-detailsshoe1.html"><img src="shoe1-1.png" >
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
            <img src="c3-1.png" >
            <h4>Hoodie</h4>
            <p>RM 749.00</p>
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