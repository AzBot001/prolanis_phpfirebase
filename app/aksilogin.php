<?php

// session_start();
if (isset($_POST['login'])) {
    $l_username = $_POST['username'];
    $l_pass = md5($_POST['pass']);
    $fetch_data = $database->getReference('admin')->orderByChild('username')->equalTo('admin')->getSnapshot()->getValue();

    foreach ($fetch_data as $key => $value) {
        $username = $value['username'];
        $pass = $value['pass'];
        $nama = $value['nama'];
    }

    if ($l_username != $username) {
?>
        <script>
            alert("Maaf, Username yang anda masukan salah")
        </script>
        <?php
    } else {
        if ($l_pass == $pass) {

            $_SESSION['nama'] = $nama;
        ?>
            <script>
                document.location.href = '<?= $base_url ?>index.php?hal=beranda_admin';
            </script>
        <?php
        } else {
        ?>
            <script>
                alert('Password Yang Anda Masukan Salah!');
            </script>
<?php
        }
    }
}



?>