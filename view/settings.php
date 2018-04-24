
<div class="<?php echo $this->text_domain ?> settings"> 
    <h1>Settings </h1>
    <form method="post" id='wpobp-settings-form'>
        <div class=" form-area"> 
 
            <div class="form-group">
                <label> Popover Title Text color </label>
                <input type="text" data-default-color="" class="color-field form-control " name="title_text_color" value="<?php echo $this->global_setting['bg_color'] ?>" />
            </div>
 

            <div class="form-group">
                <label> Popover Body Text  color </label>
                <input type="text" data-default-color="" class="color-field form-control " name="body_text_color" value="<?php echo $this->global_setting['bg_color'] ?>" />
            </div>
 

            <div class="form-group">
                <label> Popover position   </label>
                <select name="position" class="form-control ">
                    <option value="top" <?php if ($this->global_setting['position'] == 'top') echo 'selected' ; ?> >Top</option>
                    <option value="bottom" <?php if ($this->global_setting['position'] == 'bottom') echo 'selected'; ?> >Bottom</option>
                    <option value="left" <?php if ($this->global_setting['position'] == 'left') echo 'selected'; ?> >Left</option>
                    <option value="right"<?php if ($this->global_setting['position'] == 'right') echo 'selected'; ?> >Right</option>
                    <option value="auto"<?php if ($this->global_setting['position'] == 'auto') echo 'selected' ; ?> >Auto</option>
                </select>
            </div>

           

            <div class="form-group">
                <label> Support HTML  </label>
                <br/>
                <label> <input type="radio" name="support_html" value="true" <?php if ($this->global_setting['support_html'] == 'true') echo 'checked' ?> /> Yes </label>
                <label> <input type="radio" name="support_html" value="false"  <?php if ($this->global_setting['support_html'] == 'false') echo 'checked' ?>/> No </label>
            </div>
            <br/>

            <div  class="form-group text-center" >
                <input type="submit" name="submit" class="button button-primary button-large" value="Save" />

            </div>


        </div>

        <div class="clearfix"></div>


    </form>
    <div class="update-status" style="display: none"></div>
</div>