<?php

namespace App\Admin\Controllers\Promotion;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Carbon\Carbon;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Content $content)
    {
//        dd(\Encore\Admin\Facades\Admin::user()->name);
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Coupon());

        $grid->id('ID')->sortable();
        $grid->column('title');
        $grid->column('label');

        return $grid;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    protected function form()
    {
        $form = new Form(new Coupon());

        $form->id('id', 'ID');
        $form->text('title', '标题');
        $form->text('label', '标签');
//        $form->map(100,100, 'label');
//        $form->editor('label');
//        $form->datetimeRange('start_time', 'end_time', '起止时间');

        return $form;
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
//        $validatedData = $request->validate([
//            'title' => 'required|min:1|max:32',
//            'label' => 'required|min:1|max:32'
//        ], [
//            'required' => ':attribute 必填项',
//            'min' => ':attribute 太短',
//            'max' => ':attribute 太长',
//        ], [
//            'title' => '标题',
//            'label' => '标签',
//        ]);
//
//        $validatedData['operate_by'] = Admin::user()->id;
//        $validatedData['create_time'] = $validatedData['operate_time'] = Carbon::now()->getTimestamp();
        $validatedData = $this->validateParam($request);

        if (Coupon::insert($validatedData)) {
            $success = new MessageBag([
                'title' => '恭喜',
                'message' => '数据添加成功',
            ]);
            return redirect('/admin/promotion/coupon')->with(compact('success'));
        } else {
            $error = new MessageBag([
                'title' => '添加失败',
                'message' => '数据添加失败',
            ]);
            return redirect()->back()->with(compact('error'))->withInput();
        }
    }

    protected function validateParam($request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:1|max:32',
            'label' => 'required|min:1|max:32'
        ], [
            'required' => ':attribute 必填项',
            'min' => ':attribute 太短',
            'max' => ':attribute 太长',
        ], [
            'title' => '标题',
            'label' => '标签',
        ]);
        $validatedData['operate_by'] = Admin::user()->id;
        $validatedData['create_time'] = $validatedData['operate_time'] = Carbon::now()->getTimestamp();

        return $validatedData;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coupon $coupon
     * @return \Illuminate\Http\Response
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Coupon::findOrFail($id));

        $show->id('ID', '序号');
        $show->field('title', '标题');
        $show->field('label', '标签');

        return $show;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coupon $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Coupon $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = Coupon::findOrFail($request->input('id'));
        if (empty($data)) {
            $error = new MessageBag([
                'title' => '编辑失败',
                'message' => '无法找到数据',
            ]);
            return redirect()->back()->with(compact('error'))->withInput();
        }

        $validatedData = $this->validateParam($request);
        $data->title = $validatedData['title'];
        $data->label = $validatedData['label'];

        if ($data->save()) {
            $success = new MessageBag([
                'title' => '恭喜',
                'message' => '数据更新成功',
            ]);
            return redirect('/admin/promotion/coupon')->with(compact('success'));
        } else {
            $error = new MessageBag([
                'title' => '更新失败',
                'message' => '数据更新失败',
            ]);
            return redirect()->back()->with(compact('error'))->withInput();
        }
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupon $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Coupon::destroy($id)) {
            admin_toastr('删除成功...', 'success');
        } else {
            admin_toastr('删除失败...', 'error');
        }
    }
}
