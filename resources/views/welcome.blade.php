<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <table border="1">
    <tr>
        <th>nama makanan</th>
        <th>Harga</th>
    </tr>


    @foreach($modelMakanan as $item)
    <tr>
        <td>{{$item->nama_makanan}}</td>
        <td>{{$item->Harga}}</td>
    </tr>
    @endforeach

   </table> 
</body>
</html>