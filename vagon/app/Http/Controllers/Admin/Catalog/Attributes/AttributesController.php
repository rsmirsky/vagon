<?php

namespace App\Http\Controllers\Admin\Catalog\Attributes;

use App\Models\Admin\Catalog\Attributes\Attribute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Session;

class AttributesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(Attribute $attribute)
    {
        $attributes = $attribute->orderBy('created_at', 'desc')->paginate(15);

        return view('admin.catalog.attributes.index', compact('attributes'));
    }

    public function create()
    {
        return view('admin.catalog.attributes.create');
    }

    public function store(Request $request, Attribute $attribute)
    {
        $this->validate($request, array(
            'code' => 'required|unique:attributes,code',
            'title' => 'required',
            'type' => 'required'
        ));

        $attribute->code = $request->code;
        $attribute->title = $request->title;
        $attribute->type = $request->type;
        $attribute->is_required = $request->is_required;
        $attribute->is_unique = $request->is_unique;
        $attribute->is_filterable = $request->is_filterable;
        $attribute->is_visible_on_front = $request->is_visible_on_front;
        $attribute->swatch_type = $request->swatch_type;
        $attribute->is_visible_on_front = $request->is_visible_on_front;
        try {
            DB::connection()->getPdo()->beginTransaction();
            $attribute->save();
            DB::connection()->getPdo()->commit();
        }catch (\PDOException $exception) {
            DB::connection()->getPdo()->rollBack();
            throw new \PDOException($exception->getMessage());
        }

        Session::flash('flash', 'Новый атрибут добавлен успешно');

        return redirect()->route('admin.catalog.attributes.index');
    }

    public function edit(Attribute $attribute)
    {
        return view('admin.catalog.attributes.edit', compact('attribute'));
    }

    public function update(Request $request, Attribute $attribute)
    {
        $this->validate($request, array(
            'title' => 'required',
        ));


        $attribute->title = $request->title;
        $attribute->is_required = $request->is_required;
        $attribute->is_filterable = $request->is_filterable;
        $attribute->is_visible_on_front = $request->is_visible_on_front;
        $attribute->swatch_type = $request->swatch_type;
        $attribute->is_visible_on_front = $request->is_visible_on_front;
        $attribute->description = $request->description;
        $attribute->position = $request->position;
        try {
            DB::connection()->getPdo()->beginTransaction();
            $attribute->update();
            DB::connection()->getPdo()->commit();
        }catch (\PDOException $exception) {
            DB::connection()->getPdo()->rollBack();
            throw new \PDOException($exception->getMessage());
        }

        Session::flash('flash', 'Новые данные сохранены успешно');

        return redirect()->route('admin.catalog.attributes.index');
    }

    public function destroy(Attribute $attribute)
    {
        $attribute->delete();

        Session::flash('flash', 'Атрибут удален успешно');

        return redirect()->route('admin.catalog.attributes.index');
    }
}
