<?php include('partial-front/menu.php'); ?>
   
<!-------cart items details------->

    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Products</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="c3-1.png" >
                        <div>
                            <p>Hiking Clothing</p>
                            <small>Price: $50.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>


                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="c4-1.png" >
                        <div>
                            <p>Hiking Clothing</p>
                            <small>Price: $50.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>


                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="c5-1.png" >
                        <div>
                            <p>Hiking Clothing</p>
                            <small>Price: $50.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>


                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
        </table>

        <div class="total-price">

            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$200.00</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$35.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$230.00</td>
                </tr>
            </table>

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