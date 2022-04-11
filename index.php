<!doctype html>


<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

     <title>Hello, Create Barcode</title>
</head>
<body>
<h1>Hello, Your's Barcode</h1>

<svg id="code128"></svg>
<svg id="ean-13"></svg>
<svg id="ean-8"></svg>
<svg id="ean-5"></svg>
<svg id="ean-2"></svg>
<svg id="upc-a"></svg>
<svg id="code39"></svg>
<svg id="itf-14"></svg>
<svg id="msi"></svg>
<svg id="pharmacode"></svg>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.5/dist/JsBarcode.all.min.js"></script>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<script>
  JsBarcode("#code128", "Hi!");
JsBarcode("#ean-13", "1234567890128", {format: "ean13"});
JsBarcode("#ean-8", "12345670", {format: "ean8"});
JsBarcode("#ean-5", "12345", {format: "ean5"});
JsBarcode("#ean-2", "12", {format: "ean2"});
JsBarcode("#upc-a", "123456789012", {format: "upc"});
JsBarcode("#code39", "Hello", {format: "code39"});
JsBarcode("#itf-14", "1234567890123", {format: "itf14"});
JsBarcode("#msi", "123456", {format: "msi"});
JsBarcode("#pharmacode", "12345", {format: "pharmacode"});


</script>
</body>
</html>