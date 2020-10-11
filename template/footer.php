<footer id="main-footer" class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <small>
                    <?php
                        $tanggal = new DateTime('now');
                        echo "Copyright ".$tanggal->format("Y")." Ari J. Permana";
                    ?>
                </small>
            </div>
        </div>
    </div>
</footer>
<script src="dist/js/jquery-3.3.1.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>