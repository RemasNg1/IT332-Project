<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Book Page</title>
    <link rel="stylesheet" href="style.css">
<style>
.header{
  background-color: #C2D6DE;
  height:220vh;
  background-size: cover;
  background-position: center;
}
.table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;

}
.table thead tr {
  background-color: #0F4C82;
  color:#ffffff;
  text-align: left;
font-weight: bold;
}
.table th,.table td{
  padding: 12px 15px;
}
.table tbody tr {
  border-bottom: 1px slid #dddddd;
  background-color: #f3f3f3;
}

.table tbody tr:last-of-type {
  border-bottom:2px solid #0F4C82;
}
ul{
  float: right;
  list-style-type: none;
  margin-top:45px;;
  font-size:20px
}
ul li{
  display:inline-block;
}
ul li a {
  text-decoration: none;
  color:#fff;
  padding: 5px 20px;
  border:1px solid #fff ;
  transition: 0.6s ease;
}
ul li a:hover{
  background-color: #fff;
   color:#000;
}
ul li.active a{
  background-color: #fff;
   color:#000;
}
h1,h2{
  text-align: center;
  font-family:monospace;
}
h4{
  font-family:monospace;
}
.button {
  background-color: #fff;
  border:  2px solid #ccc;
  color: black;
  text-align: center;
  font-size: 18px;
  margin: 2px 2px;
  cursor: pointer;
  width: 100px;
  border-radius: 8px;
  height: 35px;
}

.button:hover {
  background-color: #e7e7e7;
}


.input {
  width: 40%;
  height: 35px;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border-radius: 7px #e7e7e7
}
.logo{
  padding :30px;
}

.logo img{
  float:left;
  width: 250PX;
  height: auto;
  margin-top: 10px;
}

</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  </head>
  <body>
    <div class="header">
  <div class="logo">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Qassim_University_logo.svg/2560px-Qassim_University_logo.svg.png" alt=""  >
  </div>
      <ul>
        <li><a href="HomePage.html">Home</a></li>
        <li class="active"><a href="#">Book</a></li>
      </ul>

<div style="margin:100px" >
    <h1>Collection Of Books In The Library</h1>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Author</th>
          <th>Language</th>
          <th>Status</th>
          <th>Number Of Pages</th>
        </tr>
        </thead>
  <tbody>
<?php
$server="localhost";
$user="root";
$pass="";
$database="QU_Library";

$con=mysqli_connect($server,$user,$pass,$database)
or die (mysqli_connect_error());

$sql="SELECT  ISSN , Name , AuthorName ,Language , Status , NoOfPage
FROM Book , LibraryContent , Author
WHERE Book.ContentID=LibraryContent.ContentID AND LibraryContent.AuthorID=Author.AuthorID";
$result=$con->query($sql);

while ($row=$result->fetch_assoc()){
  echo "<tr>
  <td>".$row["ISSN"]."</td>
  <td>".$row["Name"]."</td>
  <td>".$row["AuthorName"]."</td>
  <td>".$row["Language"]."</td>
  <td>".$row["Status"]."</td>
  <td>".$row["NoOfPage"]."</td>
</tr>";
}
?>
</tbody>
</table>

<br><h2>What Do You Want To Search About?</h2><br>
        <form action="BookResult.php" method="post">
    <h4>Book Name:</h4>
          <input class="input" type="text" name="BookName"><br>
<br>
          <h4>Book Author:</h4>
          <input class="input" type="text" name="BookAuthor"><br>
<br>
          <h4>Book Language:</h4>
          <input class="input" type="text" name="BookLanguage"><br>
          <input class="button" type ="submit" name ="send" value ="Send">
          <input class="button" type="reset" name="Clear" value="Clear">
          </form>
          </div>
    </div>
  </body>
</html>
