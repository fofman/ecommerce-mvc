<?php $i = 1 ?>
<header class="p-3 border-bottom sticky-top bg-light mb-4">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav nav-pills lead col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li class="nav-item"><a href="/" class="nav-link<?php echo ($active == $i++) ? " active" : "" ?>"><i class="bi bi-house-door-fill"></i></a></li>
                <li class="nav-item"><a href="/carrello" class="nav-link<?php echo ($active == $i++) ? " active" : "" ?>"><i class="bi bi-cart-fill"></i></a></li>
                <li class="nav-item"><a href="/account" class="nav-link<?php echo ($active == $i++) ? " active" : "" ?>" aria-current="page"><i class="bi bi-person-circle"></i></a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search" action="/" method="get">
                <input name="nome" type="search" class="form-control" placeholder="Cerca un prodotto" aria-label="Search">
            </form>
        </div>
    </div>
</header>