<?php $i = 1 ?>
<header class="d-flex justify-content-start p-2 sticky-top bg-light mb-4">
    <ul class="nav nav-pills lead">
        <li class="nav-item"><a href="/" class="nav-link<?php echo ($active == $i++) ? " active" : "" ?>"><i class="bi bi-house-door-fill"></i></a></li>
        <li class="nav-item"><a href="/carrello" class="nav-link<?php echo ($active == $i++) ? " active" : "" ?>"><i class="bi bi-cart-fill"></i></a></li>
        <li class="nav-item"><a href="/account" class="nav-link<?php echo ($active == $i++) ? " active" : "" ?>" aria-current="page"><i class="bi bi-person-circle"></i></a></li>
    </ul>
</header>