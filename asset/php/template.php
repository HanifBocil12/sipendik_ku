<?php 
    function container($name = "", $type = "text", $label = "", callable $extraContent = null) {
        // Menggunakan tanda kutip tunggal untuk string luar, dan tanda kutip ganda untuk atribut HTML
        return '<div class="row mb-2">
                    <div class="col-2">
                        <label for="' . $name . '" class="col-form-label">' . $label . '</label>
                    </div>
                    <div class="col">
                        <input value="" type="' . $type . '" class="form-control" name="' . $name . '">
                    </div>  
                </div>';
    }
?>