{"filter":false,"title":"asklistsController.php","tooltip":"/kadai-tasklist/app/Http/Controllers/asklistsController.php","undoManager":{"mark":-1,"position":-1,"stack":[[{"start":{"row":0,"column":5},"end":{"row":29,"column":5},"action":"remove","lines":["","","namespace App\\Http\\Controllers;","","use Illuminate\\Http\\Request;","","use App\\Tasklist;","","class TasklistsController extends Controller","{","    public function index()","    {","        $tasklists = Tasklist::all();","","        return view('tasklists.index', [","            'tasklists' => $tasklists,","        ]);","    }","    ","    public function show($id)","    {","        $tasklist = Tasklist::find($id);","","        return view('tasklists.show', [","            'tasklist' => $tasklist,","        ]);","    }","    ","    public function create()","    {"],"id":2}]]},"ace":{"folds":[],"scrolltop":219.5,"scrollleft":0,"selection":{"start":{"row":17,"column":5},"end":{"row":17,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":16,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1529293531919,"hash":"fbb1525effe18728daa7969352106bbb9b89d89d"}