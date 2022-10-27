<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Search Result</title>
<style>

header{
  background-color: #C2D6DE;
  height:150vh;
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
  margin-top: 45px;
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
h1 {
  text-align: center;
  font-family:monospace;
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
    <header>
      <div class="main">
        <div class="logo">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Qassim_University_logo.svg/2560px-Qassim_University_logo.svg.png" alt="">

        </div>
      <ul>
        <li><a href="HomePage.html">Home</a></li>
        <li class="active"><a href="#">Book</a></li>
      </ul>
      </div>

<div style="margin:100px" >

    <h1>Search Result</h1><br>
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
//echo "Connect";

/*
mysqli_query($con,"CREATE TABLE IF NOT EXISTS Author (
AuthorID INT PRIMARY KEY,
AuthorName VARCHAR(30) NOT NULL,
AuthorPhone VARCHAR(15),
AuthorEmail VARCHAR(30)
)")
	or die( mysqli_connect_error());


  mysqli_query($con,"CREATE TABLE IF NOT EXISTS Publisher(
PublisherID INT PRIMARY KEY,
PublisherName VARCHAR(30) NOT NULL,
PublisherPhone VARCHAR(15),
PublisherEmail VARCHAR(30)
)")
  	or die( mysqli_connect_error());


    mysqli_query($con,"CREATE TABLE IF NOT EXISTS LibraryContent (
ContentID INT PRIMARY KEY,
ContentType VARCHAR(15) NOT NULL,
AuthorID INT NOT NULL,
PublisherID INT NOT NULL,
FOREIGN KEY (AuthorID) REFERENCES Author(AuthorID),
FOREIGN KEY (PublisherID) REFERENCES Publisher(PublisherID)
)")
    	or die( mysqli_connect_error());

      mysqli_query($con,"CREATE TABLE IF NOT EXISTS Book (
ISSN INT PRIMARY KEY,
Name VARCHAR(60) NOT NULL,
Notes VARCHAR(60),
NoOfPage INT NOT NULL,
Language VARCHAR(15) NOT NULL,
Location CHAR(2) NOT NULL,
Status VARCHAR(15) NOT NULL,
ContentID INT NOT NULL,
FOREIGN KEY (ContentID) REFERENCES LibraryContent(ContentID)
)")
      	or die( mysqli_connect_error());
	echo "<BR>Tables Created!";
/*
  mysqli_query($con,"INSERT INTO Author
VALUES (461,'cal newport','0575384391','calnewport@gmail.com')")
  or die( mysqli_connect_error() );


mysqli_query($con,"INSERT INTO Author
VALUES (193,'abhijit mallick','0575643910','abhijit@gmail.com')")
or die( mysqli_connect_error() );

mysqli_query($con,"INSERT INTO Author
VALUES (291,'david cox','0548957351','davidcox@hotmail.com')")
or die( mysqli_connect_error() );

mysqli_query($con,"INSERT INTO Author
VALUES (394,'vex king','0548955823','vexking@hotmail.com')")
or die( mysqli_connect_error() );

mysqli_query($con,"INSERT INTO Author
VALUES (596,'andrew tanenbaum','05384621947','andrew@gmail.com')")
or die( mysqli_connect_error() );

mysqli_query($con,"INSERT INTO Author
VALUES (281,'vrginia evans',NULL,NULL);")
or die( mysqli_connect_error() );

*/
/*

mysqli_query($con,"INSERT INTO Publisher
VALUES (126,'express','0582875629','express@hotmail.com')")

mysqli_query($con,"INSERT INTO Publisher
VALUES (742,'pearson','0582745610','pearson@gmail.com')")

mysqli_query($con,"INSERT INTO Publisher
VALUES (680,'dar alfaroq','0593845710','alfaroq@hotmail.com')")
or die( mysqli_connect_error() );
*/

/*
mysqli_query($con,"INSERT INTO LibraryContent
VALUES (2521,'book',461,126)");

mysqli_query($con,"INSERT INTO LibraryContent
VALUES (7932,'book',461,126)");

mysqli_query($con,"INSERT INTO LibraryContent
VALUES (2920,'book',193,126)");


mysqli_query($con,"INSERT INTO LibraryContent
VALUES (1953,'book',193,126)");

mysqli_query($con,"INSERT INTO LibraryContent
VALUES (2830,'book',291,126)");

mysqli_query($con,"INSERT INTO LibraryContent
VALUES (2294,'book',291,742)");

mysqli_query($con,"INSERT INTO LibraryContent
VALUES (2921,'book',596,742)");

mysqli_query($con,"INSERT INTO LibraryContent
VALUES (3257,'book',596,126)");

mysqli_query($con,"INSERT INTO LibraryContent
VALUES (4820,'book',281,680)");

mysqli_query($con,"INSERT INTO LibraryContent
VALUES (2942,'book',291,126)");

*/
/*
mysqli_query($con,"INSERT INTO Book
VALUES (4393,'deep work',NULL,144,'english','A5','available',2521)");

mysqli_query($con,"INSERT INTO Book
VALUES (2578,'information technology',NULL,153,'english','B4','unavailable',7932)");

mysqli_query($con,"INSERT INTO Book
VALUES (3693,'atomic habits',NULL,333,'arabic','C1','available',2920)");

mysqli_query($con,"INSERT INTO Book
VALUES (4782,'the 5 second rule',NULL,255,'english','A6','unavailable',2830)");

mysqli_query($con,"INSERT INTO Book
VALUES (4295,'dua book',NULL,194,'english','C5','available',2942)");


mysqli_query($con,"INSERT INTO Book
VALUES (8480,'chemistry for engineers',NULL,410,'english','B3','unavailable',4820)");

mysqli_query($con,"INSERT INTO Book
VALUES (2925,'10 personality trit of prophet muhammed',NULL,112,'english','B1','unavailable',3257)");

mysqli_query($con,"INSERT INTO Book
VALUES (3691,'creative thinking',NULL,212,'arabic','C3','available',2921)");

mysqli_query($con,"INSERT INTO Book
VALUES (1393,'parathyroid diseases',NULL,322,'arabic','A7','available',2294)");

mysqli_query($con,"INSERT INTO Book
VALUES (4839,'pwer of now',NULL,166,'english','B2','unavailable',1953)");

  //  echo "<br>Data inserted...";

*/
$BookName=$_POST["BookName"];
$BookAuthor=$_POST["BookAuthor"];
$BookLanguage=$_POST["BookLanguage"];

if ($BookName&&$BookAuthor&&$BookLanguage)
{
$sql="SELECT  ISSN, Name , AuthorName ,Language , Status,NoOfPage
FROM Book , LibraryContent , Author
WHERE Book.ContentID=LibraryContent.ContentID AND LibraryContent.AuthorID=Author.AuthorID AND Name='$BookName' AND AuthorName='$BookAuthor' AND Language='$BookLanguage'";
$result=$con->query($sql);
if (!$result){
  die("invalid".$con->error);

}
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
}

else if ($BookName&&$BookAuthor)
{
$sql="SELECT  ISSN, Name , AuthorName ,Language , Status,NoOfPage
FROM Book , LibraryContent , Author
WHERE Book.ContentID=LibraryContent.ContentID AND LibraryContent.AuthorID=Author.AuthorID AND Name='$BookName' AND AuthorName='$BookAuthor'";
$result=$con->query($sql);
if (!$result){
  die("invalid".$con->error);
}
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
}

else if ($BookAuthor&&$BookLanguage)
{
$sql="SELECT  ISSN, Name , AuthorName ,Language , Status,NoOfPage
FROM Book , LibraryContent , Author
WHERE Book.ContentID=LibraryContent.ContentID AND LibraryContent.AuthorID=Author.AuthorID AND AuthorName='$BookAuthor' AND Language='$BookLanguage'";
$result=$con->query($sql);
if (!$result){
  die("invalid".$con->error);
}
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
}
else if ($BookName&&$BookLanguage)
{
$sql="SELECT  ISSN, Name , AuthorName ,Language , Status,NoOfPage
FROM Book , LibraryContent , Author
WHERE Book.ContentID=LibraryContent.ContentID AND LibraryContent.AuthorID=Author.AuthorID AND Name='$BookName' AND Language='$BookLanguage'";
$result=$con->query($sql);
if (!$result){
  die("invalid".$con->error);

}
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
}
else if ($BookName)
{
$sql="SELECT  ISSN, Name , AuthorName ,Language , Status,NoOfPage
FROM Book , LibraryContent , Author
WHERE Book.ContentID=LibraryContent.ContentID AND LibraryContent.AuthorID=Author.AuthorID AND Name='$BookName'";
$result=$con->query($sql);
if (!$result){
  die("invalid".$con->error);
}
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
}

else if ($BookAuthor)
{
$sql="SELECT  ISSN, Name , AuthorName ,Language , Status,NoOfPage
FROM Book , LibraryContent , Author
WHERE Book.ContentID=LibraryContent.ContentID AND LibraryContent.AuthorID=Author.AuthorID AND AuthorName='$BookAuthor'";
$result=$con->query($sql);
if (!$result){
  die("invalid".$con->error);
}
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
}

else if ($BookLanguage)
{
$sql="SELECT  ISSN, Name , AuthorName ,Language , Status,NoOfPage
FROM Book , LibraryContent , Author
WHERE Book.ContentID=LibraryContent.ContentID AND LibraryContent.AuthorID=Author.AuthorID AND Language='$BookLanguage'";
$result=$con->query($sql);
if (!$result){
  die("invalid".$con->error);
}
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
}
else
{
$sql="SELECT  ISSN, Name , AuthorName ,Language , Status,NoOfPage
FROM Book , LibraryContent , Author
WHERE Book.ContentID=LibraryContent.ContentID AND LibraryContent.AuthorID=Author.AuthorID";
$result=$con->query($sql);


if (!$result){
  die("invalid".$con->error);

}
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
}
?>
</tbody>
</table>
</div>
    </header>
  </body>
</html>
