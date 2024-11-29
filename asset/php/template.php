<?php 
    function container($name = "", $type = "text", $label = "", callable $extraContent = null) {
        // Menggunakan tanda kutip tunggal untuk string luar, dan tanda kutip ganda untuk atribut HTML
        return '<div class="row">
                    <div class="col-1">
                        <label for="' . $name . '" class="col-form-label">' . $label . '</label>
                    </div>
                    <div class="col">
                        <input type="' . $type . '" class="form-control" name="' . $name . '">
                    </div>  
                </div>';
    }
?>