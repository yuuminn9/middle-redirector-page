<!DOCTYPE html>
<html lang="zh-TW">
  <head>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>Hello, World.</title>
    <style>
      html {
        width: 100%;
        height: 100%;
      }
      body {
        margin: 0;
        padding: 0;
        padding-top: 30px;
        text-align: center;
        width: 100%;
        height: 100%;
        color: #FFFFFF;
        display: table;
        <?php
          $background = 'https://media4.giphy.com/media/26FKYPQg5CUfV2ipa/giphy.gif';
          $array = [
              'https://media4.giphy.com/media/26FKYPQg5CUfV2ipa/giphy.gif',
              'https://media.giphy.com/media/7kn27lnYSAE9O/giphy.gif',
              'https://media.giphy.com/media/l0HlUIl8snxmgscE0/giphy.gif',
              'https://media.giphy.com/media/egMK3bdCQifW8/giphy.gif',
              'https://media.giphy.com/media/l4JyYCo1POYWC9HmE/giphy.gif',
              'https://media.giphy.com/media/l2JhFyA50UuxVxAiI/giphy.gif',
              'https://media.giphy.com/media/xThuWu82QD3pj4wvEQ/giphy.gif',
              'https://media.giphy.com/media/3o85xzkvl1siB2rHSo/giphy.gif',
              'https://media.giphy.com/media/3o85xJx8kj5ryC9aEg/giphy.gif',
              'https://media.giphy.com/media/TabwFck9vEt44/giphy.gif',
              'https://media.giphy.com/media/p1aqyY6Y0g9uo/giphy.gif',
              'https://media.giphy.com/media/TlK63Ez6qnzHnnA9iqk/giphy.gif',
              'https://media.giphy.com/media/kbUq8z1MEYQ7u/giphy.gif',
          ];
          $background = $array[array_rand($array)];
        ?>
        background-image: url(<?php echo $background ?>);
        background-size: 100% 100%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
      }
    </style>
  </head>
  <body>
    Redirecting ...
    <script>
      var getUrlVars = function() {
        var hash, hashes, i, vars;

        vars = [];
        hash = void 0;
        hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        i = 0;
        while (i < hashes.length) {
          hash = hashes[i].split('=');
          vars.push(hash[0]);
          vars[hash[0]] = hash[1];
          i++;
        }
        return vars;
      };

      var vars = getUrlVars();
      var url = undefined;
      if (vars['url'] != '' && vars['url'] != undefined) {
        url = vars['url'];
        url = decodeURIComponent(url);
        url = url.replace(/%20/g, "+");
        url = url.replace(/\+dot\+/g, ".");
        url = url.replace(/\+d\+/g, ".");
      }
      else {
        url = "google.com";
      }

      window.setTimeout(function(){
        window.location.href = "//" + url;
      }, 5000);
    </script>
  </body>
</html>
