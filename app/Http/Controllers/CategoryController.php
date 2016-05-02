<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryAddRequest;
use App\Models\Category;
use DateTime;

class CategoryController extends Controller
{

    public function indexAction()
    {
        $categories = Category::select('id', 'name', 'parent_id')->get()->toArray();
        return view('admin.category.list', array('categories' => $categories));
    }

    public function viewAddAction()
    {
        $categories = Category::select('id', 'name', 'parent_id')->get()->toArray();
        return view('admin.category.add', array('categories' => $categories));
    }

    public function doAddAction(CategoryAddRequest $request)
    {
        $category = new Category();
        $category->name      = $request->category_name;
        $category->slug      = str_slug($request->category_name);
        $category->parent_id = $request->category_type;
        $category->created_at = new DateTime();
        if ($category->save()) {
            return redirect('administration/category')->with(
                    array('notification' => 'result_msg', 'notification_message' => EVO_CATEGORY_ADD_SUCCESS));
        }
    }

    public function editAction()
    {
        
    }

    public function deleteAction($category_id)
    {
        $parent = Category::where('parent_id', $category_id)->count();
        if ($parent == 0) {
            $category = Category::find($category_id);
            if ($category->delete($category_id)) {
                return redirect('administration/category')->with(
                        array('notification' => 'result_msg', 'notification_message' => EVO_CATEGORY_DELETE_SUCCESS));
            }
        } else {
            return redirect('administration/category')->with(
                        array('notification' => 'result_msg', 'notification_message' => EVO_CATEGORY_DELETE_FAIL));
        }
    }
}
