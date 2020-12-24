<h2 class="text-center py-3">Carrello</h2>
<div class="row py-3">
    <div class="col-lg-1"></div>
    <div class="col-12 col-xl-7">
        <?php foreach ($templateParams[""] as $prodotti):?>
        <div class="row align-items-center ">
            <div class="col-3 col-sm-2">
                <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-1_zrifhn.jpg" alt="" width="70" class="img-fluid">
            </div>
            <div class="col-9 col-sm-4 ">
                <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Timex Unisex Originals</a></h5><span class="text-muted font-weight-normal font-italic d-block">Category: Watches</span>
            </div>
            <div class="col-5 col-sm-3 pt-1 text-md-center">
                <button class="btn" type="button"><i class="fas fa-minus"></i></button>
                <label class="text-center" value="1">1</label>
                <button class="btn" type="button"><i class="fas fa-plus"></i></button>
            </div>
            <div class="col-4 col-sm-1 text-center">7.89$</div>
            <div class="col-3 col-sm-2">
                <i class="fas fa-trash"></i>
            </div>
        </div>
        <?php endforeach;?>
    </div>


    <div class="col-xl-3">
        <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
        <div class="p-4">
            <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you have entered.</p>
            <ul class="list-unstyled mb-4">
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>$390.00</strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>$10.00</strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                    <h5 class="font-weight-bold">$400.00</h5>
                </li>
            </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Procceed to checkout</a>
        </div>
    </div>
    <div class="col-lg-1"></div>
</div>