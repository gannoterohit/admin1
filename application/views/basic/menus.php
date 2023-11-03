<ul class="metismenu list-unstyled" id="side-menu">
    <li class="menu-title">Menu</li>

    <li>
        <a href="<?= base_url(); ?>dashboard" class="waves-effect">
            <i class="fa-solid fa-gauge"></i><span class="badge rounded-pill bg-success float-end">3</span>
            <span>Dashboard</span>
        </a>
    </li>
    <li>
        <a href="<?= base_url(); ?>register" class="waves-effect">
            <i class="fa-solid fa-file-invoice"></i>
            <span>Account</span>
        </a>
    </li>
    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="fa-solid fa-money-bill"></i>
            <span>Sale</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="<?= base_url(); ?>sale-invoice-list">Sale Invoice List</a></li>
            <li><a href="<?= base_url(); ?>sale-invoice">Sale Invoice</a></li>
        </ul>
    </li>
    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="fa-solid fa-cart-shopping"></i>
            <span>Purchase</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="<?= base_url(); ?>purchase-order-list">Purchase Order List</a></li>
            <li><a href="<?= base_url(); ?>purchase-order">Purchase Order</a></li>
        </ul>
    </li>
    <li>
        <a href="<?= base_url(); ?>project" class="waves-effect">
            <i class="fa-solid fa-user"></i>
            <span>Project</span>
        </a>
    </li>
    <li>
        <a href="<?= base_url(); ?>vandor" class="waves-effect">
            <i class="fa-solid fa-user"></i>
            <span>Vandor</span>
        </a>
    </li>
    <li>
        <a href="<?= base_url(); ?>items" class="waves-effect">
            <i class="fa-solid fa-box"></i>
            <span>Items</span>
        </a>
    </li>
   
    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="fa-solid fa-indian-rupee-sign"></i>
            <span>Cash & Bank</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="<?= base_url(); ?>bank">Bank Accounts</a></li>
            <li><a href="<?= base_url(); ?>cash-in-hand">Cash In Hand</a></li>
        </ul>
    </li>
    <li>
        <a href="<?= base_url(); ?>demo-requet" class="waves-effect">
            <i class="fa-solid fa-laptop"></i>
            <span>Requet a Demo</span>
        </a>
    </li>
    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="fa-solid fa-window-restore"></i>
            <span>Backup and Restore</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="<?= base_url(); ?>backup-to-computer">Backup To Computer</a></li>
            <li><a href="<?= base_url(); ?>backup-to-drive">Backup To Drive</a></li>
        </ul>
    </li>
    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="fa-solid fa-barcode"></i>
            <span>Utilities</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="<?= base_url(); ?>generete-barcode">Generete Barcode</a></li>
            <li><a href="<?= base_url(); ?>import-items">Import Items</a></li>
            <li><a href="<?= base_url(); ?>export-items">Export Items</a></li>
            <li><a href="<?= base_url(); ?>verify-my-data">Verify My Data</a></li>
        </ul>
    </li>
    <li>
        <a href="<?= base_url(); ?>share" class="waves-effect">
            <i class="fa-solid fa-share"></i>
            <span>Sync & Share</span>
        </a>
    </li>
    <li>
        <a href="<?= base_url(); ?>products" class="waves-effect">
            <i class="fa-solid fa-bookmark"></i>
            <span>Other Products</span>
        </a>
    </li>
</ul>