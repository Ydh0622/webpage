<?php
$link = mysqli_connect("localhost", 'root', '','ticket_price');
$_GET['order'] = isset($order) ? $_GET['order'] : null;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ticket</title>
    <style>
        .input-wrap {
            width: 960px;
            margin: 0 auto;
        }
        h1 { text-align: center; }
        th, td { text-align: center; }
        table {
            border: 1px solid #000;
            margin: 0 auto;
        }
        td, th {
            border: 1px solid #ccc;
        }
        a { text-decoration: none; }
    </style>
</head>
<body>
    <div class="input-wrap">
        <form action="" method="POST">
        고객성명 <input type="text" name="name" placeholder="이름">
        <input type="submit" name="submit" value="합계"> <br><br>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>구분</th>
                        <th>어린이</th>
                        <th>어른</th>
                        <th>비고</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>입장권</td>
                        <td>7,000 <input type="number" name="admission_ch" min="0" max="10"></td>
                        <td>10,000<input type="number" name="admission_ad" min="0" max="10"></td>
                        <td>입장</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>BIG3</td>
                        <td>12,000 <input type="number" name="big3_ch" min="0"  max="10"></td>
                        <td>16,000 <input type="number" name="big3_ad" min="0" max="10"></td>
                        <td>입장+놀이3종</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>자유이용권</td>
                        <td>21,000 <input type="number" name="free_ch" min="0" max="10"></td>
                        <td>26,000 <input type="number" name="free_ad" min="0" max="10" ></td>
                        <td>입장+놀이자유</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>연간이용권</td>
                        <td>70,000 <input type="number" name="year_ch" min="0" max="10" ></td>
                        <td>90,000 <input type="number" name="year_ad" min="0" max="10"></td>
                        <td>입장+놀이자유</td>
                    </tr>

                
                </tbody>
            </table>
       </form>

        <?php
        $name = $_POST['name'];
        $admission_ch = $_POST['admission_ch'];
        $admission_ad = $_POST['admission_ad'];
        $BIG3_ch = $_POST['big3_ch'];
        $BIG3_ad = $_POST['big3_ch'];
        $free_ch = $_POST['free_ch'];
        $free_ad = $_POST['free_ch'];
        $year_ch = $_POST['year_ch'];
        $year_ad = $_POST['year_ch'];

        date_default_timezone_set('Asia/Seoul');
        if (date("A")=="AM") 
            $dayline="오전";
        else
            $dayline="오후";

        $time = date("Y년 m월 d일 $dayline h:i분");
        echo "<br><br>";
        echo $time;
        echo "<br>";
        echo $_POST["name"] . " 고객님 감사합니다. <br>";

        if (isset($_POST['name']) && strlen($_POST['name']) > 0) {
            if (isset($_POST['admission_ch']) && ($_POST['admission_ch'] > 0 )) {
                echo "어린이 입장권 " . $admission_ch . "매". "<br>";
            }
            if(isset($_POST['admission_ad']) &&($_POST['admission_ad'] > 0)) {
                echo "어른 입장권 " . $admission_ad . "매 <br>";
            }
            if(isset($_POST['big3_ch']) &&($_POST['big3_ch']> 0)) {
                echo "어린이 BIG3 " . $BIG3_ch . "매 <br>";
            }
            if(isset($_POST['big3_ad']) &&($_POST['big3_ad']> 0)) {
                echo "어른 BIG3 " . $BIG3_ad . "매 <br>";
            }
            if(isset($_POST['free_ch']) &&($_POST['free_ch']> 0)) {
                echo "어린이 자유이용권 " . $free_ch . "매 <br>";
            }
            if(isset($_POST['free_ad']) &&($_POST['free_ad']> 0)) {
                echo "어른 자유이용권 " . $free_ad . "매 <br>";
            }
            if(isset($_POST['year_ch']) &&($_POST['year_ch']> 0)) {
                echo "어린이 연간이용권 " . $year_ch . "매 <br>";
            }
            if(isset($_POST['year_ad']) &&($_POST['year_ad']> 0)) {
                echo "어른 연간이용권 " . $year_ad . "매 <br>";
            }
            $sum =  7000 * $admission_ch + 10000 * $admission_ad +  12000 * $BIG3_ch + 16000 * $BIG3_ad + 21000 * $free_ch + 26000 * $free_ad +  70000 * $year_ch + 90000 * $year_ad;
            
            echo "합계 " . $sum . "입니다";
        }
        ?>

    
</body>
</html>