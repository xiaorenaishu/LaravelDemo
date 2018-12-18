<?php

namespace App\Http\Controllers;

use App\Jobs\Demo;
use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = \Auth::user()->id;
        $table = 'log_' . $userId % 3;
        DB::table($table)->insert([
            'user_id' => $userId,
            'content' => 'content',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

//        Log()

//        (new Log(['uid' => 2]))->setTable()->newQuery()->create();


//        $redis = \Illuminate\Support\Facades\Redis::connection();
//        $pipe = $redis->pipeline(); //开启管道
////        $pipe->watch('key'); //监察key
////        $pipe->incr('key'); //模拟watch后改变值
//        $pipe->multi(); //开启事务
//        //具体业务命令
//        $pipe->del('key');
//        $pipe->incr('key');
//        $pipe->decr('key');
//        $pipe->lpop('key');
//        $pipe->get('key');
//        $pipe->incr('key');
//        $pipe->get('key');
//        $pipe->lpush('key', 11);
//        $pipe->decrby('key', 10);
////        $pipe->discard(); //discard() 与 exec() 只能二选一执行
//        $pipe->exec(); //执行事务
//        $res = $pipe->execute(); //提交管道
//
//        //返回结果是一个数组，最后一个元素是命令执行结果。若是==null说明事务提交失败
//        $resStatus = end($res);
//        if ($resStatus == null) {
//            echo '事务提交失败';
//            # 但是得注意，事务提交失败，事务multi之前的命令是有执行成功的，事务内的命令未提交，会出现这种情况的只有1.watch监听发现值变化，2.主动discard。
//            # 正常事务中某个命令执行失败并不会影响后续的命令，整个事务还是会提交的。
//        } else {
//            foreach ($resStatus as $key => $item) {
//                if (is_object($item) && $item instanceof \Predis\Response\Error) { //执行失败，抛出一个error
//                    echo '命令 ' . $key . ' 执行错误<br/>';
//                }
//            }
//        }

//        dd($res);
        return view('home');
    }

    public function queueDemo()
    {
        $this->dispatch(new Demo());
    }
}
