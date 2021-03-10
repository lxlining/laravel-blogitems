<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<tr>
    <td>关注的人</td>
</tr><br/>
<table >

    @foreach($data2 as $key=> $val)
        <tr>{{$val}}</tr>&emsp;&emsp;
        <tr><a href="/home/selfuser/del{{{$key}}}">取消关注</a></tr>
        <br/>
    @endforeach
</table>
</body>
</html>
