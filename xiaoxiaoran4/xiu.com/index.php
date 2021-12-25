<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>xiaoxiaoran|肖萧然|图书查询系统</title>
  <meta name="keywords" content="xiaoxiaoran|肖萧然|肖萧然最秀">
  <meta name="description" content="xiaoxiaoran|图书查询系统">
  <meta name="application-name" content="肖萧然">
  <link rel="shortcut icon" type="image/x-icon" href="https://xiuxiu-1306082599.cos.ap-beijing.myqcloud.com/images/images/xiaologo.png" />
  <link rel="stylesheet" href="css/normalize.min.css">
  <link rel='stylesheet prefetch' href='css/demo.css'>
  <link rel="stylesheet" href="css/style.css">
  <style>
    @font-face {
      font-family: 'Digital-7';
      src: url(./font/digital-7.ttf);
    }

    @font-face {
      font-family: 'Got No Time For That';
      src: url(./font/Got_No_Time_For_That.ttf);
    }

    body {
      text-align: center;
      vertical-align: middle;
      overflow: hidden;

    }

    a img {
      width: 25px;
    }

    p {
      font-family: Got No Time For That;
      font-size: 12pt;
      font-weight: 100;
      text-shadow: 1px 1px 1px #000;
      color: #ffffff;
    }
  </style>
  <script>
    setInterval(function() {
      var date = new Date();
      var format = [
        ("0" + date.getHours()).substr(-2), ("0" + date.getMinutes()).substr(-2), ("0" + date.getSeconds())
        .substr(-2)
      ].join(":");

      document.getElementById("output").innerHTML = format;
    }, 500);
  </script>
  <script type="text/javascript">
    function playPause() {
      var myAudio = document.getElementById('myvideo');
      if (myAudio.paused)
        myAudio.play();
      else
        myAudio.pause();
    }
  </script>
</head>

<body>


  <div id="container">

    <img src="./images/1.jpg">
    <img src="./images/2.jpg">
    <img src="./images/3.jpg">
    <img src="./images/4.jpg">
   

  </div>


  <div id="large-header" class="large-header">

    <canvas id="demo-canvas"></canvas>

    <h1 class="main-title">

      <?php require '/inc/head.php' ?>

      <div id="output"></div>
      <div>
        <p><input type="button" onclick="playPause()" value=""><span style="color:white"> something just like
            this</span>
          <button id="volup" onclick="document.getElementById('myvideo').volume += 0.2"></button>
          <button id="voldown" onclick="document.getElementById('myvideo').volume -= 0.2"></button>
        </p>
      </div>
      <?php
      $titleid = isset($_GET['titleid']) ? $_GET['titleid'] : 1;
      //$sql = "select * from books where bTypeId=$titleid order by bId desc";
      $pagesize = 5;
      $titleid = intval($titleid);
      $sql = "select count(*) from books where bTypeId=$titleid";
      $rs = mysql_query($sql);
      $rows = mysql_fetch_row($rs);
      $recordcount = $rows[0];
      $pagecount = ceil($recordcount / $pagesize);
      $pageno = isset($_GET['pageno']) ? $_GET['pageno'] : 1;
      $pageno= intval($pageno);  
      if ($pageno < 1) $pageno = 1;
      if ($pageno > $pagecount) $pageno = $pagecount;
      $startno = ($pageno - 1) * $pagesize;
      $startno = intval($startno);
      $pagesize = intval($pagesize);
      $sql = "select * from books where bTypeId=$titleid order by bId desc limit $startno,$pagesize";
      $rs = mysql_query($sql); ?>
      <table style="line-height: 37px;font-size: 17px;letter-spacing: -0.49px;font-weight: 800;">
        <tr>
          <th>编号</th>
          <th>名字</th>
          <th>出版</th>
          <th>价格</th>
          <th>日期</th>
          <th>作者</th>
        </tr>
        <?php while ($rows = mysql_fetch_assoc($rs)) : ?>
          <tr>
            <td><?php echo $rows['bId'] ?></td>
            <td><?php echo $rows['bName'] ?></td>
            <td><?php echo $rows['publishing'] ?></td>
            <td><?php echo $rows['price'] ?></td>
            <td><?php echo $rows['pubDate'] ?></td>
            <td><?php echo $rows['author'] ?></td>
          </tr>
        <?php endwhile ?>
      </table>
      <table>
        <tr>
          <td>
            <?php for ($i = 1; $i <= $pagecount; $i++) : ?>
              <a href="?pageno=<?php echo $i ?>&titleid=<?php echo $titleid ?> ">
                <?php echo $i ?>
              </a>&nbsp;
            <?php endfor; ?>
          </td>
          <td>
            <?php if ($pageno == 1) : ?>
              *首页*
              *上一页*
            <?php else : ?>
              <a href="?pageno=1&titleid=<?php echo $titleid ?>">首页</a>
              <a href="?pageno=<?php echo $pageno - 1 ?>&titleid=<?php echo $titleid ?>">上一页</a>
            <?php endif ?>
            <?php if ($pageno == $pagecount) : ?>
              *下一页*
              *末页*
            <?php else : ?>
              <a href="?pageno=<?php echo $pageno + 1 ?>&titleid=<?php echo $titleid ?>">下一页</a>
              <a href="?pageno=<?php echo $pagecount ?>&titleid=<?php echo $titleid ?>">末页</a>
            <?php endif; ?>
          </td>

        </tr>
      </table>

      <p title="Thanks">

        <a title="肖萧然最秀" href="/">temp.xiaoxiaoran.top</a>|
        <a href='http://beian.miit.gov.cn/' target="_blank">蜀ICP备2021025481号</a>|
        <a title="肖萧然最秀" href="https://xiaoxiaoran.top">xiaoxiaoran.top</a>

      </p>

    </h1>




    <script src="js/Pack.min.js"></script>
    <script src="js/node.js"></script>
    <script src="js/Lite.min.js"></script>
    <script src="js/index.js"></script>
  </div>

  <!-- <div id="video">
    <input type=button onclick="playPause()" value="Play/Pause">
    <video src="assets/Something Just Like Th.mp3" id="myvideo" width="320" height="240" autoplay>
    </video>

    <script>
      var myvid = document.getElementById('myvideo');
      var myvids = [
        "assets/Something Just Like Th.mp3",
        "assets/Something Just Like Th.mp3",
        "assets/Something Just Like Th.mp3",

      ];
      var activeVideo = 0;

      myvid.addEventListener('ended', function(e) {
        // update the active video index
        activeVideo = (++activeVideo) % myvids.length;

        // update the video source and play
        myvid.src = myvids[activeVideo];
        myvid.play();
      });
    </script>

  </div> -->

  <foot id="foot" class="foot">
    <div class="foot_power" style="letter-spacing: 0.066em;line-height: 1.9;font-size: 36px;font-weight: 900;font-style: normal;">
      <h3>Powered by xiaoxiaoran.top © 2021 All Rights Reserved
        <p title="Thanks">
          <a title="肖萧然最秀" href="/">xiaoxiaoran.top</a> |
          <a href='http://beian.miit.gov.cn/' target="_blank">蜀ICP备2021025481号</a> |
          <a title="肖萧然最秀" href="/">xiaoxiaoran.top</a>
        </p>
        <p title="2021/11/12 16:50:00" name="show_time" style="cursor: progress;">时间</p>
      </h3>
    </div>
  </foot>
</body>

</html>