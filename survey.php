<html>
<head>
<title>Dashboard</title>
<style>
*{
background-color:black;
color:green;
text-align:right;
font-size:25px;
}
h1{
font-size:50px;
color:white;
text-align:center;
}
h3{
text-align:left;
}
#button{
float:left;
}
</style>
</head>
<body>

Welcome <?php echo $_POST["name"]; ?>
<br>
Your mail is <?php echo $_POST["mail"]; ?>

<h1> YOUR DASHBOARD </h1>
<h3> Upcoming tests: </h3>
<h3>AMAZON SOFTWARE DEVELOPER TEST </h3>
<button id="button"> I want to register for this test </button>
<br>
<br>
<br>
<br>
Wanna log out of this session?
<button id="click">Logout</button>
</body>
</html>