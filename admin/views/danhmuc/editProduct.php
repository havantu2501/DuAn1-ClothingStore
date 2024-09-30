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
                        Edit Product
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <form action="<?= BASE_URL_ADMIN . '?act=edit-product' ?>" method="POST">
                            <input type="text" name="id" value="<?= $product['id'] ?>" hidden>


                            <div class="position-relative row form-group">
                                <label for="title" class="col-md-3 text-md-right col-form-label">Title</label>
                                <div class="col-md-9 col-xl-8">
                                    <input name="title" id="title" placeholder="Title" type="text" class="form-control"
                                        value="<?= $product['title'] ?>">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="price" class="col-md-3 text-md-right col-form-label">Price</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="price" id="price" placeholder="Price" type="text"
                                        class="form-control" value="<?= $product['price'] ?>">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="discount" class="col-md-3 text-md-right col-form-label">Discount</label>
                                <div class="col-md-9 col-xl-8">
                                    <input name="discount" id="discount" placeholder="Discount" type="text"
                                        class="form-control" value="<?= $product['discount'] ?>">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="thumbnail" class="col-md-3 text-md-right col-form-label">
                                    Thumbnail
                                </label>
                                <div class="col-md-9 col-xl-8">
                                    <input name="thumbnail" id="thumbnail" placeholder="Thumbnail" type="text"
                                        class="form-control" value="<?= $product['thumbnail'] ?>">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="description"
                                    class="col-md-3 text-md-right col-form-label">Description</label>
                                <div class="col-md-9 col-xl-8">
                                    <input required name="description" id="description" placeholder="Description"
                                        type="text" class="form-control" value="<?= $product['description'] ?>">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="category_id"
                                    class="col-md-3 text-md-right col-form-label">Danh mục</label>
                                <div class="col-md-9 col-xl-8">
                                    <select required name="category_id" id="category" class="form-control">


                                        <option <?= $product['category_id'] == 1 ? 'selected' : '' ?> value=1>
                                            Áo
                                        </option>
                                        <option <?= $product['category_id'] !== 1 ? 'selected' : '' ?> value=2>
                                            Quần
                                        </option>

                                    </select>
                                </div>
                            </div>


                            <div class="position-relative row form-group mb-1">
                                <div class="col-md-9 col-xl-8 offset-md-2">


                                    <button type="submit" class="btn-shadow btn-hover-shine btn btn-primary">
                                        <span class="btn-icon-wrapper pr-2 opacity-8">
                                            <i class="fa fa-download fa-w-20"></i>
                                        </span>
                                        <span>Save</span>
                                    </button>
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