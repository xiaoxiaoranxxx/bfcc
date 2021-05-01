<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>json</title>
</head>

<body>
    <script>
        // 127.0.0.1\xiaoxiaoran\bfcc\xiaoxiaoran5\json\1.php
        var stu = {
            'Json': 'javascript object notation 轻量级数据交换格式',
            'name': 'xiao',
            'fun1': function() {
                alert(1);
            },
            'array': [1, 2, 34],
            'obj1': {
                'n1': 1,
                'n2': 2
            }
        }
        stu.age = 20;
        stu['add'] = 'bb';

        // console.log(stu.Json); //取值
        // console.log(stu['name']);
        // stu.fun1();

        // for(var s in stu){
        //     console.log(stu[s]);
        // }
    </script>
</body>

</html>