<?php load::view("template::head") ?>
    <div class="form-group">
        <form method="post" action="main/uploadImage" enctype="multipart/form-data">
            <input required type="file" name="img[]" accept="image/*" class="file">
            <div class="input-group col-xs-12">
                <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                <span class="input-group-btn">
             <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
            </span>
            </div>
            <br>
            <div>
                <input id="ex1" name="compress_val" data-slider-id='ex1Slider' type="text" data-slider-min="0"
                       data-slider-max="10"
                       data-slider-step="1" data-slider-value="5"/>
            </div>
            <br>
            <input type="submit" class="btn btn-primary" value="Compress My Image">
        </form>
    </div>
<?php load::view("template::foot") ?>