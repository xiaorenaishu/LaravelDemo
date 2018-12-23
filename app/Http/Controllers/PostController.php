<?php

namespace App\Http\Controllers;

use App\Jobs\Demo;
use App\Models\Log;
use App\Models\OrderbyDemo;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Post::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        echo config('demo.demo');


//        $userId = 3;
//        $table = 'log_' . $userId % 3;

//        \DB::table($table)->insert([
//            'user_id' => $userId,
//            'content' => 'content',
//            'created_at' => Carbon::now(),
//            'updated_at' => Carbon::now()
//        ]);

//        $list = DB::table($table)->paginate(1);

//        $this->transactionDemo();

        $this->orderbyDemo();
//        $list = (new Log())->setTable($table)->newQuery()->paginate(1);
//        foreach ($list as $item){
//            var_dump($item->user->name);
//        }
//        var_dump($list);
        //
//        dd(\Auth::user());
        return 'view';
    }

    protected function orderbyDemo()
    {
        $firstSql = DB::table('orderby_demos')->select(['city', 'name', 'id'])->where('city',
            '上海')->orderBy('name', 'DESC')->limit(100);
        $list = DB::table('orderby_demos')->select(['city', 'name', 'id'])->where('city',
            '福州')->orderBy('name', 'DESC')->limit(100)->unionAll($firstSql)->get();
        //手动排序显示前一百条
        $list = $list->toArray();
        $nameList = array_column($list, 'name');
        array_multisort($nameList, SORT_STRING, $list);
//        $list = array_slice($list, 0, 100);
        var_dump($list);
        var_dump($nameList);
    }

    public function redisQueueJobDemo()
    {
        $job = new Demo();
        $this->dispatch($job);
    }

    public function transactionDemo()
    {
        DB::beginTransaction();
        $flag = false;
        try {
//            trigger_error('自定义错误抛出', E_USER_ERROR); //自定义抛出一个错误
//            $list = (new Log())->setTable('1')->newQuery()->paginate(1);
            \DB::table(1)->insert([
                'user_id' => 1,
                'content' => 'content',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
            DB::commit();
            $flag = true;
        } catch (\Exception $ex) {
            DB::rollback();
            dd($ex);
        }

        dd($flag);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
