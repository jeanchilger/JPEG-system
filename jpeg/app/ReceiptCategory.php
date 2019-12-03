<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReceiptCategory extends Model
{
    //
    public static function createCategories() {
        /* Stores in the database all categories.
        * */

        $categories = ["Pagamento", "Formatura", "Kit Fotográfico"];
        if (ReceiptCategory::all() -> count() < sizeof($categories)) {

            foreach ($categories as $category) {
                $reCat = new ReceiptCategory();
                $reCat -> name = $category;
                $reCat -> save();
            }
        }
    }
}
