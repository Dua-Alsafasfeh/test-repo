<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "Candy List :" ?>
    <ul>
    <!-- <?php foreach ($List as $value) {
        echo "<li>".$value."</li>";
    }; ?> -->
    <!-- OR-->
    @foreach ($List as $value)
    <li>{{$value}}</li>
    @endforeach
    </ul>
</body>
</html>