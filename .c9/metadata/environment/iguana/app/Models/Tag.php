{"filter":false,"title":"Tag.php","tooltip":"/iguana/app/Models/Tag.php","undoManager":{"mark":15,"position":15,"stack":[[{"start":{"row":0,"column":0},"end":{"row":21,"column":0},"action":"insert","lines":["<?php","","namespace App\\Models;","","use Illuminate\\Database\\Eloquent\\Factories\\HasFactory;","use Illuminate\\Database\\Eloquent\\Model;","","class Category extends Model","{","    use HasFactory;","    ","    public function posts()","    {","        return $this->hasMany(Post::class);","    }","    ","    public function getByCategory(int $limit_count = 5)","    {","        return $this->posts()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);","    }","}",""],"id":1}],[{"start":{"row":7,"column":5},"end":{"row":7,"column":14},"action":"remove","lines":[" Category"],"id":8}],[{"start":{"row":7,"column":5},"end":{"row":7,"column":6},"action":"insert","lines":[" "],"id":9},{"start":{"row":7,"column":6},"end":{"row":7,"column":7},"action":"insert","lines":["T"]}],[{"start":{"row":7,"column":7},"end":{"row":7,"column":8},"action":"insert","lines":["a"],"id":10},{"start":{"row":7,"column":8},"end":{"row":7,"column":9},"action":"insert","lines":["g"]}],[{"start":{"row":13,"column":8},"end":{"row":13,"column":43},"action":"remove","lines":["return $this->hasMany(Post::class);"],"id":12},{"start":{"row":13,"column":8},"end":{"row":13,"column":43},"action":"insert","lines":["return $this->hasMany(Post::class);"]}],[{"start":{"row":10,"column":4},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":13},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":10,"column":4},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":14},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":11,"column":4},"end":{"row":17,"column":6},"action":"insert","lines":["protected $fillable = [","        'title',","        'body',","        'user_id',","        'tag_id',","        'image',","    ];"],"id":15}],[{"start":{"row":12,"column":9},"end":{"row":16,"column":16},"action":"remove","lines":["title',","        'body',","        'user_id',","        'tag_id',","        'image',"],"id":16}],[{"start":{"row":12,"column":9},"end":{"row":12,"column":10},"action":"insert","lines":["n"],"id":17},{"start":{"row":12,"column":10},"end":{"row":12,"column":11},"action":"insert","lines":["a"]},{"start":{"row":12,"column":11},"end":{"row":12,"column":12},"action":"insert","lines":["m"]},{"start":{"row":12,"column":12},"end":{"row":12,"column":13},"action":"insert","lines":["e"]}],[{"start":{"row":12,"column":13},"end":{"row":12,"column":14},"action":"insert","lines":["'"],"id":18}],[{"start":{"row":12,"column":14},"end":{"row":12,"column":15},"action":"insert","lines":[","],"id":19}],[{"start":{"row":20,"column":4},"end":{"row":23,"column":5},"action":"remove","lines":["public function getByCategory(int $limit_count = 5)","    {","        return $this->posts()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);","    }"],"id":20}],[{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"remove","lines":["    "],"id":21},{"start":{"row":19,"column":4},"end":{"row":20,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":10,"column":4},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":22},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":10,"column":4},"end":{"row":10,"column":31},"action":"insert","lines":["public $timestamps = false;"],"id":23}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":10,"column":31},"end":{"row":10,"column":31},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1692173988107,"hash":"8d5a6c5febedf7117fed62d5f977372c3b44b927"}