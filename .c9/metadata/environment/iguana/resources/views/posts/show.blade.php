{"filter":false,"title":"show.blade.php","tooltip":"/iguana/resources/views/posts/show.blade.php","undoManager":{"mark":10,"position":10,"stack":[[{"start":{"row":0,"column":0},"end":{"row":23,"column":7},"action":"insert","lines":["<!DOCTYPE HTML>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","        <title>Posts</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1 class=\"title\">","            {{ $post->title }}","        </h1>","        <div class=\"content\">","            <div class=\"content__post\">","                <h3>本文</h3>","                <p>{{ $post->body }}</p>    ","            </div>","        </div>","        <div class=\"footer\">","            <a href=\"/\">戻る</a>","        </div>","    </body>","</html>"],"id":1}],[{"start":{"row":10,"column":23},"end":{"row":10,"column":24},"action":"remove","lines":["e"],"id":6},{"start":{"row":10,"column":22},"end":{"row":10,"column":23},"action":"remove","lines":["l"]},{"start":{"row":10,"column":21},"end":{"row":10,"column":22},"action":"remove","lines":["t"]},{"start":{"row":10,"column":20},"end":{"row":10,"column":21},"action":"remove","lines":["i"]},{"start":{"row":10,"column":19},"end":{"row":10,"column":20},"action":"remove","lines":["t"]}],[{"start":{"row":10,"column":19},"end":{"row":10,"column":20},"action":"insert","lines":["p"],"id":7},{"start":{"row":10,"column":20},"end":{"row":10,"column":21},"action":"insert","lines":["o"]},{"start":{"row":10,"column":21},"end":{"row":10,"column":22},"action":"insert","lines":["s"]},{"start":{"row":10,"column":22},"end":{"row":10,"column":23},"action":"insert","lines":["t"]}],[{"start":{"row":10,"column":19},"end":{"row":10,"column":23},"action":"remove","lines":["post"],"id":8},{"start":{"row":10,"column":19},"end":{"row":10,"column":23},"action":"insert","lines":["post"]}],[{"start":{"row":11,"column":22},"end":{"row":11,"column":23},"action":"remove","lines":["t"],"id":9}],[{"start":{"row":11,"column":22},"end":{"row":11,"column":23},"action":"remove","lines":["i"],"id":10},{"start":{"row":11,"column":22},"end":{"row":11,"column":23},"action":"remove","lines":["t"]},{"start":{"row":11,"column":22},"end":{"row":11,"column":23},"action":"remove","lines":["l"]},{"start":{"row":11,"column":22},"end":{"row":11,"column":23},"action":"remove","lines":["e"]}],[{"start":{"row":11,"column":22},"end":{"row":11,"column":23},"action":"insert","lines":["p"],"id":11},{"start":{"row":11,"column":23},"end":{"row":11,"column":24},"action":"insert","lines":["o"]},{"start":{"row":11,"column":24},"end":{"row":11,"column":25},"action":"insert","lines":["s"]},{"start":{"row":11,"column":25},"end":{"row":11,"column":26},"action":"insert","lines":["t"]}],[{"start":{"row":11,"column":22},"end":{"row":11,"column":26},"action":"remove","lines":["post"],"id":12},{"start":{"row":11,"column":22},"end":{"row":11,"column":26},"action":"insert","lines":["post"]}],[{"start":{"row":17,"column":18},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":13},{"start":{"row":18,"column":0},"end":{"row":18,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":18,"column":12},"end":{"row":20,"column":18},"action":"insert","lines":["<div>","                <img src=\"{{ $post->image_url }}\" alt=\"画像が読み込めません。\"/>","            </div>"],"id":14}],[{"start":{"row":19,"column":44},"end":{"row":19,"column":45},"action":"remove","lines":["l"],"id":15},{"start":{"row":19,"column":43},"end":{"row":19,"column":44},"action":"remove","lines":["r"]},{"start":{"row":19,"column":42},"end":{"row":19,"column":43},"action":"remove","lines":["u"]},{"start":{"row":19,"column":41},"end":{"row":19,"column":42},"action":"remove","lines":["_"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":19,"column":41},"end":{"row":19,"column":41},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":0,"state":"start","mode":"ace/mode/php_laravel_blade"}},"timestamp":1691810684194,"hash":"cd605ab499f22f9a1058dbe2826cc8cd88076014"}