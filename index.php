<!DOCTYPE html>
<html>
<head>
	
    <title>wxy_web</title>
    <style>
       body {
       background-color: lightblue;
       }

       h1 {
       color: white;
       text-align: center;
       }

        h3 {
       color: white;
       text-align: center;
       }

       p {
       font-family: verdana;
       font-size: 20px;
       }	
    </style>
</head>
<body>

<h1>Welcome.</h1>
<h3>This web is my homework<h3>

<button><a href='http://localhost/wxy/'>HOME</a></button>
<button><a href='https://id.nkust.edu.tw/'>Major</a></button>
<button><a href='https://www.design-thinking.tw/'>苗圃計畫</a></button>

<select onchange='location.href="/wxy_web/"+this.value'>
  <option value="0323-1.php">請選擇要執行的練習</option>
  <option value="0323-1.php">0323-1</option>
  <option value="0323-2.php">0323-2</option>
</select>

<hr>

<p>If you have any problem, that is my email : c109101136@nkust.edu.tw</p>

</body>
</html>