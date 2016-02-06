<?php require "header.php"; ?>

    <div class="container well">
    <h2 class="text-center">BAUN Bilgisayar ve İnternet Topluluğu Üye Yönetim Sistemi</h2>
    <h4 class="text-center">Merhaba hoşgeldiniz. Lütfen üye iseniz giriş yapınız değil ise üye olunuz</h4>

    <?php
    if (!isset($_SESSION["login"])) {
        echo '<div class="alert alert-danger" style="margin-top:50px;"><strong>Opps!</strong> Bu sayfayı görüntüleyebilmek için giriş yapmalısınız</div>';
        die();
    }
    ?>

    <h3><a href="index.php"><< Anasayfa'ya Dön</a></h3>

    <div class="container" style="margin-top:50px;">
        <div class="row">
            <ol>
                <?php
                $rows = $db->get_results("SELECT * FROM users");
                foreach ($rows AS $row) {
                    echo '<li><a href="uye.php?id=' . $row->id . '">' . $row->username . '</a></li>';
                }
                ?>
            </ol>
        </div>
    </div>

<?php require "footer.php"; ?>