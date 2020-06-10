<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>ジャンケン結果！</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="js/app.js"></script>
  </head>
  <body>

    <?php
    // phpのコードを記述
    $name = $_POST["name"];
    $hand = $_POST["hand"];

        
    //じゃんけん    
    if(isset($_POST["submit_btn"])){
	    //PCの手
        $pc = rand(1,3);
        // echo "PCは"."<br>";
        if($pc == 1) $pc_hand= '<img src="img/gu.png">'; 
        if($pc == 2) $pc_hand= '<img src="img/choki.png">'; 
        if($pc == 3) $pc_hand= '<img src="img/pa.png">'; 

        //挑戦者の結果
        //show challenger's name
        // echo $name."さんの結果は"."<br>";
           //gu
        if ($_POST["hand"] == 1) {
            if ($pc == 1) {
                $result = "<font color = 'orange'>あいこ</font>";
            } elseif ($pc == 2) {
                $result = "<font color = 'red'>勝ち</font>";
            } elseif ($pc == 3) {
                $result = "<font color = 'red'>勝ち</font>";
            }
            //choki
        } elseif ($_POST["hand"] == 2) {
            if ($pc == 1) {
                $result = "<font color = 'blue'>負け</font>";
            }elseif ($pc == 2) {
                $result = "<font color = 'orange'>あいこ</font>";
            }elseif ($pc == 3) {
                $result = "<font color = 'red'>勝ち</font>";
            }
            //pa
        } else {
            if ($pc == 1) {
                $result = "<font color = 'red'>勝ち</font>";
            }elseif ($pc == 2) {
                $result = "<font color = 'blue'>負け</font>";
            }if ($pc == 3) {
                $result = "<font color = 'orange'>あいこ</font>";
            }
        }
    }
    ?>

    <div id="wrapper">
    <header>
        <div class="header-logo">じゃんけん結果</div>
    </header>
    <main>
        <!-- <img src="image.php" /> -->
        <h1 class="r_name"> <? echo $name ?>さんの結果は・・・</h1>
        <div class="result-box">
            <p class="result">
             <?php // 挑戦者の結果
             echo $result 
             ?>
             </p>

             <p class="pc_hand">
                PCは
            <?php //PCの手
            // echo "PCは";
            echo "<font color = 'magenta'>$pc_hand</font>";
            ?>
             でした！</p>
     <p><a class="return" href="index.php">>>もう一回<!DOCTYPE html>
            </a></p>
        </div>
    </main>

</div>


    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- js -->
    <script src='js/app.js'></script>
  </body>
</html>
