{"filter":false,"title":"edit.blade.php","tooltip":"/kadai-tasklist/resources/views/tasklists/edit.blade.php","undoManager":{"mark":39,"position":39,"stack":[[{"start":{"row":6,"column":3},"end":{"row":16,"column":25},"action":"remove","lines":[" {!! Form::model($tasklist, ['route' => ['tasklists.update', $tasklist->id], 'method' => 'put']) !!}","","        {!! Form::label('status', 'ステータス:') !!}","        {!! Form::text('status') !!}","","        {!! Form::label('content', 'タスクリスト:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('更新') !!}","","    {!! Form::close() !!}"],"id":29},{"start":{"row":6,"column":3},"end":{"row":19,"column":33},"action":"insert","lines":["{!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","                <div class=\"form-group\">","                    {!! Form::label('title', 'タイトル:') !!}","                    {!! Form::text('title', null, ['class' => 'form-control']) !!}","                </div>","        ","                <div class=\"form-group\">","                    {!! Form::label('content', 'メッセージ:') !!}","                    {!! Form::text('content', null, ['class' => 'form-control']) !!}","                </div>","        ","                {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}","        ","            {!! Form::close() !!}"]}],[{"start":{"row":6,"column":20},"end":{"row":6,"column":27},"action":"remove","lines":["message"],"id":30},{"start":{"row":6,"column":20},"end":{"row":6,"column":28},"action":"insert","lines":["tasklist"]},{"start":{"row":6,"column":44},"end":{"row":6,"column":51},"action":"remove","lines":["message"]},{"start":{"row":6,"column":44},"end":{"row":6,"column":52},"action":"insert","lines":["tasklist"]},{"start":{"row":6,"column":64},"end":{"row":6,"column":71},"action":"remove","lines":["message"]},{"start":{"row":6,"column":64},"end":{"row":6,"column":72},"action":"insert","lines":["tasklist"]}],[{"start":{"row":6,"column":3},"end":{"row":19,"column":33},"action":"remove","lines":["{!! Form::model($tasklist, ['route' => ['tasklists.update', $tasklist->id], 'method' => 'put']) !!}","                <div class=\"form-group\">","                    {!! Form::label('title', 'タイトル:') !!}","                    {!! Form::text('title', null, ['class' => 'form-control']) !!}","                </div>","        ","                <div class=\"form-group\">","                    {!! Form::label('content', 'メッセージ:') !!}","                    {!! Form::text('content', null, ['class' => 'form-control']) !!}","                </div>","        ","                {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}","        ","            {!! Form::close() !!}"],"id":31},{"start":{"row":6,"column":3},"end":{"row":23,"column":10},"action":"insert","lines":["<div class=\"row\">","        <div class=\"col-xs-6\">","            {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","                <div class=\"form-group\">","                    {!! Form::label('title', 'タイトル:') !!}","                    {!! Form::text('title', null, ['class' => 'form-control']) !!}","                </div>","        ","                <div class=\"form-group\">","                    {!! Form::label('content', 'メッセージ:') !!}","                    {!! Form::text('content', null, ['class' => 'form-control']) !!}","                </div>","        ","                {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}","        ","            {!! Form::close() !!}","        </div>","    </div>"]}],[{"start":{"row":8,"column":29},"end":{"row":8,"column":36},"action":"remove","lines":["message"],"id":32},{"start":{"row":8,"column":29},"end":{"row":8,"column":37},"action":"insert","lines":["tasklist"]},{"start":{"row":8,"column":53},"end":{"row":8,"column":60},"action":"remove","lines":["message"]},{"start":{"row":8,"column":53},"end":{"row":8,"column":61},"action":"insert","lines":["tasklist"]},{"start":{"row":8,"column":73},"end":{"row":8,"column":80},"action":"remove","lines":["message"]},{"start":{"row":8,"column":73},"end":{"row":8,"column":81},"action":"insert","lines":["tasklist"]}],[{"start":{"row":10,"column":37},"end":{"row":10,"column":42},"action":"remove","lines":["title"],"id":33},{"start":{"row":10,"column":37},"end":{"row":10,"column":43},"action":"insert","lines":["status"]},{"start":{"row":11,"column":36},"end":{"row":11,"column":41},"action":"remove","lines":["title"]},{"start":{"row":11,"column":36},"end":{"row":11,"column":42},"action":"insert","lines":["status"]}],[{"start":{"row":10,"column":47},"end":{"row":10,"column":51},"action":"remove","lines":["タイトル"],"id":34},{"start":{"row":10,"column":47},"end":{"row":10,"column":52},"action":"insert","lines":["ステータス"]}],[{"start":{"row":15,"column":48},"end":{"row":15,"column":53},"action":"remove","lines":["メッセージ"],"id":35},{"start":{"row":15,"column":48},"end":{"row":15,"column":54},"action":"insert","lines":["タスクリスト"]}],[{"start":{"row":7,"column":27},"end":{"row":7,"column":28},"action":"remove","lines":["6"],"id":36}],[{"start":{"row":7,"column":27},"end":{"row":7,"column":28},"action":"insert","lines":["1"],"id":37},{"start":{"row":7,"column":28},"end":{"row":7,"column":29},"action":"insert","lines":["2"]},{"start":{"row":7,"column":29},"end":{"row":7,"column":30},"action":"insert","lines":["s"]}],[{"start":{"row":7,"column":29},"end":{"row":7,"column":30},"action":"remove","lines":["s"],"id":38}],[{"start":{"row":7,"column":30},"end":{"row":7,"column":31},"action":"insert","lines":[" "],"id":39}],[{"start":{"row":7,"column":31},"end":{"row":7,"column":32},"action":"insert","lines":["c"],"id":40},{"start":{"row":7,"column":32},"end":{"row":7,"column":33},"action":"insert","lines":["o"]}],[{"start":{"row":7,"column":33},"end":{"row":7,"column":34},"action":"insert","lines":["l"],"id":41},{"start":{"row":7,"column":34},"end":{"row":7,"column":35},"action":"insert","lines":["-"]},{"start":{"row":7,"column":35},"end":{"row":7,"column":36},"action":"insert","lines":["m"]},{"start":{"row":7,"column":36},"end":{"row":7,"column":37},"action":"insert","lines":["d"]}],[{"start":{"row":7,"column":37},"end":{"row":7,"column":38},"action":"insert","lines":["-"],"id":42}],[{"start":{"row":7,"column":38},"end":{"row":7,"column":39},"action":"insert","lines":["8"],"id":43}],[{"start":{"row":7,"column":31},"end":{"row":7,"column":32},"action":"insert","lines":["\""],"id":44}],[{"start":{"row":7,"column":40},"end":{"row":7,"column":41},"action":"insert","lines":["\""],"id":45}],[{"start":{"row":7,"column":41},"end":{"row":7,"column":42},"action":"insert","lines":[" "],"id":46}],[{"start":{"row":7,"column":37},"end":{"row":7,"column":38},"action":"remove","lines":["d"],"id":47},{"start":{"row":7,"column":36},"end":{"row":7,"column":37},"action":"remove","lines":["m"]}],[{"start":{"row":7,"column":36},"end":{"row":7,"column":37},"action":"insert","lines":["s"],"id":48},{"start":{"row":7,"column":37},"end":{"row":7,"column":38},"action":"insert","lines":["m"]}],[{"start":{"row":7,"column":41},"end":{"row":7,"column":42},"action":"insert","lines":[" "],"id":49},{"start":{"row":7,"column":42},"end":{"row":7,"column":43},"action":"insert","lines":["c"]},{"start":{"row":7,"column":43},"end":{"row":7,"column":44},"action":"insert","lines":["o"]},{"start":{"row":7,"column":44},"end":{"row":7,"column":45},"action":"insert","lines":["l"]}],[{"start":{"row":7,"column":44},"end":{"row":7,"column":45},"action":"remove","lines":["l"],"id":50},{"start":{"row":7,"column":43},"end":{"row":7,"column":44},"action":"remove","lines":["o"]},{"start":{"row":7,"column":42},"end":{"row":7,"column":43},"action":"remove","lines":["c"]}],[{"start":{"row":7,"column":42},"end":{"row":7,"column":43},"action":"insert","lines":["\""],"id":51},{"start":{"row":7,"column":43},"end":{"row":7,"column":44},"action":"insert","lines":["c"]},{"start":{"row":7,"column":44},"end":{"row":7,"column":45},"action":"insert","lines":["o"]},{"start":{"row":7,"column":45},"end":{"row":7,"column":46},"action":"insert","lines":["l"]}],[{"start":{"row":7,"column":46},"end":{"row":7,"column":47},"action":"insert","lines":["-"],"id":52}],[{"start":{"row":7,"column":47},"end":{"row":7,"column":48},"action":"insert","lines":["m"],"id":53},{"start":{"row":7,"column":48},"end":{"row":7,"column":49},"action":"insert","lines":["d"]}],[{"start":{"row":7,"column":49},"end":{"row":7,"column":50},"action":"insert","lines":[" "],"id":54}],[{"start":{"row":7,"column":49},"end":{"row":7,"column":50},"action":"remove","lines":[" "],"id":55}],[{"start":{"row":7,"column":49},"end":{"row":7,"column":50},"action":"insert","lines":["-"],"id":56}],[{"start":{"row":7,"column":50},"end":{"row":7,"column":51},"action":"insert","lines":["6"],"id":57},{"start":{"row":7,"column":51},"end":{"row":7,"column":52},"action":"insert","lines":["'"]}],[{"start":{"row":7,"column":51},"end":{"row":7,"column":52},"action":"remove","lines":["'"],"id":58}],[{"start":{"row":7,"column":51},"end":{"row":7,"column":52},"action":"insert","lines":["\""],"id":59}],[{"start":{"row":7,"column":52},"end":{"row":7,"column":53},"action":"insert","lines":[" "],"id":60}],[{"start":{"row":7,"column":53},"end":{"row":7,"column":54},"action":"insert","lines":["c"],"id":61},{"start":{"row":7,"column":54},"end":{"row":7,"column":55},"action":"insert","lines":["o"]},{"start":{"row":7,"column":55},"end":{"row":7,"column":56},"action":"insert","lines":["l"]}],[{"start":{"row":7,"column":55},"end":{"row":7,"column":56},"action":"remove","lines":["l"],"id":62},{"start":{"row":7,"column":54},"end":{"row":7,"column":55},"action":"remove","lines":["o"]},{"start":{"row":7,"column":53},"end":{"row":7,"column":54},"action":"remove","lines":["c"]}],[{"start":{"row":7,"column":53},"end":{"row":7,"column":54},"action":"insert","lines":["\""],"id":63},{"start":{"row":7,"column":54},"end":{"row":7,"column":55},"action":"insert","lines":["c"]},{"start":{"row":7,"column":55},"end":{"row":7,"column":56},"action":"insert","lines":["o"]},{"start":{"row":7,"column":56},"end":{"row":7,"column":57},"action":"insert","lines":["k"]}],[{"start":{"row":7,"column":56},"end":{"row":7,"column":57},"action":"remove","lines":["k"],"id":64}],[{"start":{"row":7,"column":56},"end":{"row":7,"column":57},"action":"insert","lines":["l"],"id":65},{"start":{"row":7,"column":57},"end":{"row":7,"column":58},"action":"insert","lines":["-"]}],[{"start":{"row":7,"column":58},"end":{"row":7,"column":59},"action":"insert","lines":["l"],"id":66},{"start":{"row":7,"column":59},"end":{"row":7,"column":60},"action":"insert","lines":["g"]},{"start":{"row":7,"column":60},"end":{"row":7,"column":61},"action":"insert","lines":["-"]}],[{"start":{"row":7,"column":61},"end":{"row":7,"column":62},"action":"insert","lines":["3"],"id":67},{"start":{"row":7,"column":62},"end":{"row":7,"column":63},"action":"insert","lines":["\""]}],[{"start":{"row":7,"column":8},"end":{"row":7,"column":65},"action":"remove","lines":["<div class=\"col-xs-12\" \"col-sm-8\" \"col-md-6\" \"col-lg-3\" >"],"id":68},{"start":{"row":7,"column":8},"end":{"row":7,"column":90},"action":"insert","lines":["<div class=\"col-xs-12 col-sm-offset-2 col-sm-8 col-md-8 col-lg-offset-3 col-lg-6\">"]}],[{"start":{"row":11,"column":36},"end":{"row":11,"column":37},"action":"insert","lines":["g"],"id":69},{"start":{"row":11,"column":37},"end":{"row":11,"column":38},"action":"insert","lines":["i"]},{"start":{"row":11,"column":38},"end":{"row":11,"column":39},"action":"insert","lines":["t"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":15,"column":21},"end":{"row":15,"column":21},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528441593928,"hash":"75d6e52d833463067b38aa6fed2c4bcc5568e85c"}