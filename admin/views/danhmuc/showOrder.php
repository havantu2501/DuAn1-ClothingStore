<!-- header -->
<?php include './views/layout/header.php'; ?>

<!-- sidebar -->
<?php include './views/layout/sidebar.php'; ?>

<div class="app-main__outer">
    <!-- Main -->
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>
                        <i class="fa-regular fa-file-alt"></i> Thông tin đơn hàng
                    </div>
                </div>
                <div class="page-title-actions">
                    <a href="<?= BASE_URL_ADMIN . '?act=list-orders' ?>" class="btn btn-secondary">
                        <span class="btn-icon-wrapper pr-2 opacity-8">
                            <i class="fa fa-arrow-left fa-w-20"></i>
                        </span>
                        Quay lại
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <form action="<?= BASE_URL_ADMIN . '?act=show-order' ?>" method="POST">
                            <input type="text" name="id" value="<?= $order['id'] ?>" hidden>
                            <div class="display_data">

                                <h5 class="card-title">Thông tin đơn hàng</h5>
                                <hr>

                                <div class="position-relative row form-group">
                                    <label for="fullname" class="col-md-3 text-md-right col-form-label">
                                        Họ và Tên
                                    </label>
                                    <div class="col-md-9 col-xl-8">
                                        <p class="form-control-plaintext"><?= $order['fullname'] ?></p>
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label class="col-md-3 text-md-right col-form-label">Email</label>
                                    <div class="col-md-9 col-xl-8">
                                        <p class="form-control-plaintext"><?= $order['email'] ?></p>
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label class="col-md-3 text-md-right col-form-label">Số điện thoại</label>
                                    <div class="col-md-9 col-xl-8">
                                        <p class="form-control-plaintext"><?= $order['phone_number'] ?></p>
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label class="col-md-3 text-md-right col-form-label">Địa chỉ</label>
                                    <div class="col-md-9 col-xl-8">
                                        <p class="form-control-plaintext"><?= $order['address'] ?></p>
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label for="total_money" class="col-md-3 text-md-right col-form-label">
                                        Tổng tiền
                                    </label>
                                    <div class="col-md-9 col-xl-8">
                                        <p class="form-control-plaintext"><?= number_format($order['total_money'], 0, ',', '.') ?> VND</p>
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label for="status" class="col-md-3 text-md-right col-form-label">Trạng thái</label>
                                    <div class="col-md-9 col-xl-8">
                                        <p class="form-control-plaintext">
                                            <?php echo $order['status'] == 0 ? 'Chưa xử lý' : 'Đã hoàn thành'; ?>
                                        </p>
                                    </div>
                                </div>

                                <div class="position-relative row form-group">
                                    <label class="col-md-3 text-md-right col-form-label">Ngày đặt hàng</label>
                                    <div class="col-md-9 col-xl-8">
                                        <p class="form-control-plaintext"><?= date('d/m/Y', strtotime($order['order_date'])) ?></p>
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

<!-- footer -->
<?php include './views/layout/footer.php'; ?>

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
                        elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
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
