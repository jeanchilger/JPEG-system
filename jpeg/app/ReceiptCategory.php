<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReceiptCategory extends Model
{
    //
    public static function createCategories() {
        /* Stores in the database all categories.
        * */

        $categories = ["Boleto", "Formatura", "Kit Fotográfico"];
        $storedCategories = ReceiptCategory::all();
        $arrayCategories = array();

        if ($storedCategories -> count() < sizeof($categories)) {
            foreach ($storedCategories as $scat) {
                array_push($arrayCategories, $scat -> name);
            }

            foreach ($categories as $category) {
                if (!in_array($category, $arrayCategories)) {
                    $reCat = new ReceiptCategory();
                    $reCat -> name = $category;
                    $reCat -> save();
                }
            }
        }
    }
}
