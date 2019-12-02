<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenseCategory extends Model
{
    //
    public static function createCategories() {
        /* Stores in the database all categories.
        * */

        $categories = ["Transporte", "Hospedagem", "Material", "Alimentação"];
        if (ExpenseCategory::all() -> count() < sizeof($categories)) {

            foreach ($categories as $category) {
                $exCat = new ExpenseCategory();
                $exCat -> name = $category;
                $exCat -> save();
            }
        }
    }
}
