<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenseCategory extends Model
{
    //
    public static function createCategories() {
        /* Stores in the database all categories.
        * */

        $categories = ["Transporte", "Hospedagem", "Material", "Alimentação", "Manutenção"];
        $storedCategories = ExpenseCategory::all();
        $arrayCategories = array();

        if ($storedCategories -> count() < sizeof($categories)) {
            foreach ($storedCategories as $scat) {
                array_push($arrayCategories, $scat -> name);
            }

            foreach ($categories as $category) {
                if (!in_array($category, $arrayCategories)) {
                    $exCat = new ExpenseCategory();
                    $exCat -> name = $category;
                    $exCat -> save();
                }
            }
        }
    }
}
