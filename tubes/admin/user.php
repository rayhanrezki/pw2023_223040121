<?php include('layout/header_admin.php') ?>
<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>List User</h3>
        <section class="section">
            <div class="row" id="table-striped">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <!-- <h4 class="card-title">Striped rows</h4> -->
                        </div>
                        <div class="card-content">
                            <!-- <div class="card-body">
                                <p class="card-text">Use <code class="highlighter-rouge">.table-striped</code> to add
                                    zebra-striping to any
                                    table row within the <code class="highlighter-rouge">&lt;tbody&gt;</code>. This styling
                                    doesn't work in IE8
                                    and below as <code>:nth-child</code> CSS selector isn't supported.</p>
                            </div> -->
                            <!-- table striped -->
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>NAME</th>
                                            <th>ALAMAT</th>
                                            <th>SKILL</th>
                                            <th>TYPE</th>
                                            <th>LOCATION</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-bold-500">Michael Right</td>
                                            <td>$15/hr</td>
                                            <td class="text-bold-500">UI/UX</td>
                                            <td>Remote</td>
                                            <td>Austin,Taxes</td>
                                            <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">Morgan Vanblum</td>
                                            <td>$13/hr</td>
                                            <td class="text-bold-500">Graphic concepts</td>
                                            <td>Remote</td>
                                            <td>Shangai,China</td>
                                            <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">Tiffani Blogz</td>
                                            <td>$15/hr</td>
                                            <td class="text-bold-500">Animation</td>
                                            <td>Remote</td>
                                            <td>Austin,Texas</td>
                                            <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">Ashley Boul</td>
                                            <td>$15/hr</td>
                                            <td class="text-bold-500">Animation</td>
                                            <td>Remote</td>
                                            <td>Austin,Texas</td>
                                            <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-bold-500">Mikkey Mice</td>
                                            <td>$15/hr</td>
                                            <td class="text-bold-500">Animation</td>
                                            <td>Remote</td>
                                            <td>Austin,Texas</td>
                                            <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <div class="page-content">
    </div>
    <?php include('layout/footer_admin.php') ?>