<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>じゃんけんPHP</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<div id="wrapper">
        <header>
        <div class="header-logo">シンプルじゃんけん</div>
        </header>
    <main>
        <P class=msg>どの手でいく？？</p>
            
        <div class="form-box">
        <form action="result.php" method="post">
         <p> <input type="text" name="name" placeholder="名前を入れてね"></p>
	    <label><input type="radio" id="hand" name="hand" value="1"　required="required">グー</label>
	    <label><input type="radio" id="hand" name="hand" value="2">チョキ</label>
	    <label><input type="radio" id="hand" name="hand" value="3">パー</label>
        <p><input type="submit" id="submit_btn" name="submit_btn" value="GO"></p>
        </form>

        </div>
    </main>

    <script>
        // $("#submit_btn").on("click", function () {
        //     // if($('#hand').val() === ''){
        //     alert("手を選んでね！"); 
        //     // }
        // });
    </script>
</div>
</body>
</html>
