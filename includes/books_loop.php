<?php
if($books==1){
$query="SELECT * FROM books WHERE class = 'One'";
$result=mysqli_query($conn, $query);

//Checks if there was a query error(s)
if(!$result){
	die("Database query failed!".mysqli_error());
}}
elseif($books==2){
$query="SELECT * FROM books WHERE class = 'Two'";
$result=mysqli_query($conn, $query);

//Checks if there was a query error(s)
if(!$result){
	die("Database query failed!".mysqli_error());
}}
elseif($books==3){
$query="SELECT * FROM books WHERE class = 'Three'";
$result=mysqli_query($conn, $query);

//Checks if there was a query error(s)
if(!$result){
	die("Database query failed!".mysqli_error());
}}
elseif($books==4){
$query="SELECT * FROM books WHERE class = 'Four'";
$result=mysqli_query($conn, $query);

//Checks if there was a query error(s)
if(!$result){
	die("Database query failed!".mysqli_error());
}}
elseif($books==5){
$query="SELECT * FROM books WHERE class = 'Five'";
$result=mysqli_query($conn, $query);

//Checks if there was a query error(s)
if(!$result){
	die("Database query failed!".mysqli_error());
}}
elseif($books==6){
$query="SELECT * FROM books WHERE class = 'Six'";
$result=mysqli_query($conn, $query);

//Checks if there was a query error(s)
if(!$result){
	die("Database query failed!".mysqli_error());
}}
elseif($books==7){
$query="SELECT * FROM books WHERE class = 'Seven'";
$result=mysqli_query($conn, $query);

//Checks if there was a query error(s)
if(!$result){
	die("Database query failed!".mysqli_error());
}}
elseif($books==8){
$query="SELECT * FROM books WHERE class = 'Eight'";
$result=mysqli_query($conn, $query);

//Checks if there was a query error(s)
if(!$result){
	die("Database query failed!".mysqli_error());
}}
elseif($books==general){
$query="SELECT * FROM books WHERE class = 'General'";
$result=mysqli_query($conn, $query);

//Checks if there was a query error(s)
if(!$result){
	die("Database query failed!".mysqli_error());
}}
?>