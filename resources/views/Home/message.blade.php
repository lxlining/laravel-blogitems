<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div>



        @foreach($data as $va)
            <table border="0">
                <tr>
                    <textarea disabled="disabled" cols="80" rows="3">{{$va['content']}}</textarea>
                </tr>
                <tr>
                    <td>文章标题：<b>{{$va['title']}}</b></td>

                    <td><a href="home/article/user?id={{$va['id']}}">作者：{{$va['username']}}</a> </td>

                </tr>

            </table>
            <br/>
            @break;
        @endforeach
    <hr>
            <p>评论</p>
    <table border="1" cellpadding="1" cellspacing="1">

        <thead>
        <tr>
            <td>内容</td>
            <td>时间</td>
            <td>用户</td>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $v)
            <tr><td>{{$v['message']}}</td><td>{{$v['created_at']}}</td><td>***</td></tr>
        @endforeach

        </tbody>
    </table>
<hr>
    <p>我要留言</p>
    <form action="/home/message/add/{{$data[0]['article']}}" method="post">
        <table border="0">
            <tr>
                <td><textarea cols="80" rows="3" name="content"></textarea> </td>

            </tr>
            <tr>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="submit" value="留言"></tr>
        </table>
    </form>
</div>
</body>
</html>
