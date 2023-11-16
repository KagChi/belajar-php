<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>
        Kamar Pesanan
    </h2>

    <div class="flex flex-col" style="column-gap: 10px">
        <div class="flex flex-row" style="column-gap: 10px">
            <div>
                Kode Kamar:
            </div>
            <div>
                <?php
                $KodeKamar = htmlspecialchars($_POST["kode"]);
                echo "$KodeKamar";
                ?>
            </div>
        </div>

        <div class="flex flex-row" style="column-gap: 10px">
            <div>
                Nama Kamar:
            </div>
            <div>
                <?php
                    $NamaKamar = htmlspecialchars($_POST["nama"]);
                    echo "$NamaKamar";
                ?>
            </div>
        </div>

        <div class="flex flex-row" style="column-gap: 10px">
            <div>
                Jenis Kamar:
            </div>
            <div>
                <?php
                    $JenisKamar = htmlspecialchars($_POST["jenis_kamar"]);
                    switch ($JenisKamar) {
                        case "single_room":
                            echo "Single Room";
                            break;

                        case "double_room":
                            echo "Double Room";
                            break;

                        case "family_room":
                            echo "Family Room";
                            break;
                        default:
                            echo "Jenis Kamar tidak tersedia !";
                            break;
                    }
                ?>
            </div>
        </div>

        <div class="flex flex-row" style="column-gap: 10px">
            <div>
                Type Kamar:
            </div>
            <div>
                <?php
                    $TypeKamar = htmlspecialchars($_POST["type"]);
                    echo "$TypeKamar"
                ?>
            </div>
        </div>

        <div class="flex flex-row" style="column-gap: 10px">
            <div>
                Tarif Kamar:
            </div>
            <div>
                <?php
                    $JenisKamar = htmlspecialchars($_POST["jenis_kamar"]);
                    switch ($JenisKamar) {
                        case "single_room":
                            echo "Rp 150.000";
                            break;

                        case "double_room":
                            echo "Rp 200.000";
                            break;

                        case "family_room":
                            echo "Rp 300.000";
                            break;
                        default:
                            echo "Rp 0";
                            break;
                    }
                ?>
            </div>
        </div>

        <div class="flex flex-row" style="column-gap: 10px">
            <div>
                Banyak Kamar:
            </div>
            <div>
                <?php
                    $BanyakKamar = htmlspecialchars($_POST["banyak"]);
                    echo "$BanyakKamar"
                ?>
            </div>
        </div>

        <div class="flex flex-row" style="column-gap: 10px">
            <div>
                Lama Sewa:
            </div>
            <div>
                <?php
                    $LamaSewa = htmlspecialchars($_POST["lama"]);
                    echo "$LamaSewa"
                ?>
            </div>
        </div>

        <?php
            $str = str_repeat("=", 32);
            echo "$str"
        ?>

        <div class="flex flex-row" style="column-gap: 10px">
            <div>
                Subtotal:
            </div>
            <div>
                <?php
                    $LamaSewa = htmlspecialchars($_POST["lama"]);
                    $JenisKamar = htmlspecialchars($_POST["jenis_kamar"]);
                    $BanyakKamar = htmlspecialchars($_POST["banyak"]);
                    $LamaSewa = htmlspecialchars($_POST["lama"]);
                    switch ($JenisKamar) {
                        case "single_room":
                            echo "Rp " . 150000 * ((int) $BanyakKamar) * ((int) $LamaSewa);
                            break;

                        case "double_room":
                            echo "Rp " . 200000 * ((int) $BanyakKamar) * ((int) $LamaSewa);
                            break;

                        case "family_room":
                            echo "Rp " . 300000 * ((int) $BanyakKamar) * ((int) $LamaSewa);
                            break;
                        default:
                            echo "Rp 0";
                            break;
                    }
                ?>
            </div>
        </div>

        <div class="flex flex-row" style="column-gap: 10px">
            <div>
                Diskon:
            </div>
            <div>
                <?php
                    $LamaSewa = htmlspecialchars($_POST["lama"]);
                    $JenisKamar = htmlspecialchars($_POST["jenis_kamar"]);
                    $BanyakKamar = htmlspecialchars($_POST["banyak"]);
                    $LamaSewa = htmlspecialchars($_POST["lama"]);
                    $TypeKamar = htmlspecialchars($_POST["type"]);
                    switch ($JenisKamar) {
                        case "single_room":
                            $subtotal = 150000 * ((int) $BanyakKamar) * ((int) $LamaSewa);
                            echo $TypeKamar === "VVIP" ? "Rp " . 0.1 * (int) $subtotal : "Rp 0";
                            break;

                        case "double_room":
                            $subtotal =  200000 * ((int) $BanyakKamar) * ((int) $LamaSewa);
                            echo $TypeKamar === "VVIP" ? "Rp " . 0.1 * (int) $subtotal : "Rp 0";
                            break;

                        case "family_room":
                            $subtotal = 300000 * ((int) $BanyakKamar) * ((int) $LamaSewa);
                            echo $TypeKamar === "VVIP" ? "Rp " . 0.1 * (int) $subtotal : "Rp 0";
                            break;
                        default:
                            echo "Rp 0";
                            break;
                    }
                ?>
            </div>
        </div>

        <?php
            $str = str_repeat("=", 32);
            echo "$str"
        ?>

        <div class="flex flex-row" style="column-gap: 10px">
            <div>
                Total:
            </div>
            <div>
                <?php
                    $LamaSewa = htmlspecialchars($_POST["lama"]);
                    $JenisKamar = htmlspecialchars($_POST["jenis_kamar"]);
                    $BanyakKamar = htmlspecialchars($_POST["banyak"]);
                    $LamaSewa = htmlspecialchars($_POST["lama"]);
                    $TypeKamar = htmlspecialchars($_POST["type"]);
                    switch ($JenisKamar) {
                        case "single_room":
                            $subtotal = 150000 * ((int) $BanyakKamar) * ((int) $LamaSewa);
                            $diskon = $TypeKamar === "VVIP" ? 0.1 * $subtotal : 0;
                            echo "Rp " . $subtotal - (int) $diskon;
                            break;

                        case "double_room":
                            $subtotal =  200000 * ((int) $BanyakKamar) * ((int) $LamaSewa);
                            $diskon = $TypeKamar === "VVIP" ? 0.1 * $subtotal : 0;
                            echo "Rp " . $subtotal - (int) $diskon;
                            break;

                        case "family_room":
                            $subtotal = 300000 * ((int) $BanyakKamar) * ((int) $LamaSewa);
                            $diskon = $TypeKamar === "VVIP" ? 0.1 * $subtotal : 0;
                            echo "Rp " . $subtotal - (int) $diskon;
                            break;
                        default:
                            echo "Rp 0";
                            break;
                    }
                ?>
            </div>
        </div>
        
        <a href="index.php">Booking Lagi</a>
    </div>

</body>
</html>