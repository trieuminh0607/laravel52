<?php

function selectboxCategory($categories, $parent_id = 0, $str = '', $select = 0)
{
    if (empty($categories)) {
        return;
    }
    foreach ($categories as $category) {
        $category_id   = $category['id'];
        $category_name = $category['name'];
        if ($category['parent_id'] == $parent_id) {
            if ($select != 0 && $category_id == $select) {
                echo '<option selected value="' . $category_id . '">' . $str . $category_name . '</option>';
            } else {
                echo '<option value="' . $category_id . '">' . $str . $category_name . '</option>';
            }
            selectboxCategory($categories, $category_id, $str . '---', $select);
        }
    }
}

function displayCategory($categories, $parent_id = 0, $str = null)
{
    if (empty($categories)) {
        return;
    }
    foreach ($categories as $index => $category) {
        $category_id = $category['id'];
        $category_name = $category['name'];
        if ($category['parent_id'] == $parent_id) {
            echo '<tr class="list_data">
                  <td class="aligncenter">' . intval($index + 1) . '</td>';
            if (is_null($str)) {
                echo '<td class="list_td alignleft"><b>' . $str . $category_name . '</b></td>';
            } else {
                echo '<td class="list_td alignleft">' . $str . $category_name . '</td>';
            }
            echo '<td class="list_td aligncenter">
                    <a href=""><img src="../admin/images/edit.png" /></a>&nbsp;&nbsp;&nbsp;
                    <a href="category/delete/'.$category_id.'"><img src="../admin/images/delete.png" /></a>
                </td>
            </tr>';
            displayCategory($categories, $category_id, $str . '---');
        }
    }
}