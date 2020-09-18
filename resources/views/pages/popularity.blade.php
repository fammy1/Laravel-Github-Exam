<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Demo | Profile</title>
    <link rel="stylesheet" href="{{('css/bootstrap.css')}}">
    <style>
        li {
            margin-left:5%;
        }
    </style>
</head>
<body>
    <h1>STARBUCKS COFFEE</h1>
    <a href="{{url('/')}}">Home</a> | Popularity | <a href="{{url('/recommended')}}">Most Recommended</a> 
    <h4 style="margin-top:3%">Popular Starbucks Coffee</h4>
    <li>vanilla Latte</li>
    <li>Iced White Chocolate Mocha</li>
    <li>Pumpkin Spice Latte</li>
    <li>Java Chip Frappuccino</li>
    <li>Hot Chocolate</li>
    <li>Chai Latte</li>
    <li>Cinnamon Roll Frappuccino</li>
    <li>Green Tea Creme Frappuccino</li>

</body>
</html>