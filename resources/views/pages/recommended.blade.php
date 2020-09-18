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
    <a href="{{url('/')}}">Home</a> | <a href="{{url('/popularity')}}">Popularity</a>  | Most Recommended
    <h4 style="margin-top:3%">Most Recommended Starbucks Coffee</h4>
    <li>Salted Caramel Mocha</li>
    <li>Stacbucks Cold Brew</li>
    <li>Nitro Cold Brew</li>
    <li>Caramel Macchiato</li>
    <li>Mocha Cookie Crumble Frappuccino</li>
    <li>Cappuccino</li>
    <li>Dark Roast</li>
    <li>Caffe Americano</li>
    <li>Flat White</li>
</body>
</html>