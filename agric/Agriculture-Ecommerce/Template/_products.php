<?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item) :
        if ($item['item_id'] == $item_id) :

            
                // request method post
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    if (isset($_POST['top_sale_submit'])){
              
                        // call method addToCart
                        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
                    }
                }            
?>
        <!--   product  -->
        <section id="product" class="py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $item['item_image'] ?>" alt="product" class="img-fluid">
                        <div class="form-row pt-4 font-size-16 font-baloo">
                            <div class="col">
                                <button type="submit" class="btn btn-danger form-control" onclick="location.href = './thank.php';">Proceed to Buy</button>
                            </div>
                            <div class="col">
                            <form method="post">
                            <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>">
                            <input type="hidden" name="user_id" value="<?php echo 1; ?>">

                            <?php
                            if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                                echo '<button type="submit" disabled class="btn btn-success form-control">In the Cart</button>';
                            }else{
                                echo '<button type="submit" name="top_sale_submit" class="btn btn-warning  form-control">Add to Cart</button>';
                            }
                            ?>    
                            </form>                            
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 py-5">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?></h5>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                              </div>
                              <a href="#" class="px-2 font-rale font-size-14">20,534 ratings | 1000+ answered questions</a>
                        </div>
                        <hr class="m-0">

                        <!---    product price       -->
                            <table class="my-3">
                                <tr class="font-rale font-size-14">
                                    <td>Price:</td>
                                    <td><strike><?php echo $item['item_price'] +20000 ?></strike></td>
                                </tr>
                                <tr class="font-rale font-size-14">
                                    <td>Deal Price:</td>
                                    <td class="font-size-20 text-danger">₦<span><?php echo $item['item_price'] ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                                </tr>
                                <tr class="font-rale font-size-14">
                                    <td>You Save:</td>
                                    <td><span class="font-size-16 text-danger">₦20,000</span></td>
                                </tr>
                            </table>
                        <!---    !product price       -->

                            <hr>

                        <!-- order-details -->
                            <div id="order-details" class="font-rale d-flex flex-column text-dark">
                                <small>Delivery by : Mar 29  - Apr 1</small>
                                <small>Sold by <a href="#">Mr. Kunle Adeyemi </a>(4.5 out of 5 | 18,198 ratings)</small>
                                <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 424201</small>
                            </div>
                         <!-- !order-details -->

                         <div class="row">
                             <div class="col-6">
                               <!-- product qty section -->  
                                 <div class="qty d-flex pt-4">
                                     <h6 class="font-baloo">Quantity <small>(100-1000)</small></h6>
                                     <div class="px-4 d-flex font-rale">
                                         <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                         <input type="number" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="100" placeholder="100">
                                         <button class="qty-down border bg-light" data-id="pro1"><i class="fas fa-angle-down"></i></button>
                                     </div>
                                 </div>
                                <!-- !product qty section -->  
                             </div>
                         </div>

                    </div>

                    <div class="col-12">
                        <h6 class="font-rubik pt-4">Product Description</h6>
                        <hr>
                        <p class="font-rale font-size-14">An efficient and prosperous animal agriculture historically has been the mark of a strong, well-developed nation. Such an agriculture permits a nation to store large quantities of grains and other foodstuffs in concentrated form to be utilized to raise animals for human consumption during such emergencies as war or natural calamity. Furthermore, meat has long been known for its high nutritive value, producing stronger, healthier people.</p>
                        <p class="font-rale font-size-14">Botanically, a fruit is a mature ovary and its associated parts. It usually contains seeds, which have developed from the enclosed ovule after fertilization, although development without fertilization, called parthenocarpy, is known, for example, in bananas. Fertilization induces various changes in a flower: the anthers and stigma wither, the petals drop off, and the sepals may be shed or undergo modifications; the ovary enlarges, and the ovules develop into seeds, each containing an embryo plant. The principal purpose of the fruit is the protection and dissemination of the seed</p>
                    </div>
                </div>
            </div>
        </section>
    <!--   !product  -->
    <?php
        endif;
        endforeach;
?>