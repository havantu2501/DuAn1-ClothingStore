<!-- header -->
<?php include './views/layout/header.php' ?>

<!-- sidebar  -->
<?php include './views/layout/sidebar.php' ?>


<div class="app-main__outer">

    <!-- Main -->
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">

                    <div>
                        <i class="fa-regular fa-user"></i>
                        Show Product

                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <form action="<?= BASE_URL_ADMIN . '?act=show-product' ?>" method="POST">

                            <input type="text" name="id" value="<?= $product['id'] ?>" hidden>
                            <div class="card-body display_data">

                                <div class="position-relative row form-group">
                                    <label for="name" class="col-md-3 text-md-right col-form-label">
                                        Title
                                    </label>
                                    <div class="col-md-9 col-xl-8">
                                        <p><?= $product['title'] ?></p>
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label class="col-md-3 text-md-right col-form-label">Price</label>
                                    <div class="col-md-9 col-xl-8">
                                        <p><?= $product['price'] ?></p>
                                    </div>
                                </div>


                                <div class="position-relative row form-group">
                                    <label class="col-md-3 text-md-right col-form-label">
                                        Discount</label>
                                    <div class="col-md-9 col-xl-8">
                                        <p><?= $product['discount'] ?></p>
                                    </div>
                                </div>


                                <div class="position-relative row form-group">
                                    <label class="col-md-3 text-md-right col-form-label ">Image</label>
                                    <div class="col-md-9 col-xl-8">
                                        <div class="">
                                            <img src="<?= BASE_URL . $product['thumbnail']  ?>" style="width: 100px" alt=""
                                                onerror="this.onerror=null; this.src='https://truongansafety.com/wp-content/uploads/2022/04/pr04-1-scaled-1.jpg' ">

                                        </div>
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label for="level" class="col-md-3 text-md-right col-form-label">Category</label>
                                    <div class="col-md-9 col-xl-8">
                                        <p required name="category_id" id="category_id">
                                            <?php
                                            if ($product['category_id'] == 1) {
                                                echo ('Áo');
                                            } else {
                                                echo ('Quần');
                                            }
                                            ?>
                                        </p>
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label class="col-md-3 text-md-right col-form-label">Mô Tả</label>
                                    <div class="col-md-9 col-xl-8">
                                        <p><?= $product['description'] ?></p>
                                    </div>
                                </div>

                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- End Main -->


</div>
</div>

</div>
<!-- footer -->
<?php include './views/layout/footer.php' ?>
<!-- Code injected by live-server -->
<script>
    // <![CDATA[  <-- For SVG support
    if ('WebSocket' in window) {
        (function() {
            function refreshCSS() {
                var sheets = [].slice.call(document.getElementsByTagName("link"));
                var head = document.getElementsByTagName("head")[0];
                for (var i = 0; i < sheets.length; ++i) {
                    var elem = sheets[i];
                    var parent = elem.parentElement || head;
                    parent.removeChild(elem);
                    var rel = elem.rel;
                    if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                        var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                        elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date()
                            .valueOf());
                    }
                    parent.appendChild(elem);
                }
            }
            var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
            var address = protocol + window.location.host + window.location.pathname + '/ws';
            var socket = new WebSocket(address);
            socket.onmessage = function(msg) {
                if (msg.data == 'reload') window.location.reload();
                else if (msg.data == 'refreshcss') refreshCSS();
            };
            if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                console.log('Live reload enabled.');
                sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
            }
        })();
    } else {
        console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
    }
    // ]]>
</script>
</body>

</html>