<div class="field animate fadeIn">
    <div class="input input-with-unit">
        <label class="label" for="land-price"><span><i class="ic <?php echo $field_input["icon"] ?> c-blue"></i></span>
            <p class="size-overline"><?php echo $field_input["label"] ?></p>
        </label>
        <input type="text" name="land-price" id="land-price" autocomplete="off" value="<?php echo $field_input["initial-value"] ?>" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
        <div class="units">
            <span class="invisible" id="hiddenValue"><?php echo $field_input["initial-value"] ?></span>
            <span class="units-value" id="unitsValue" data-unit="<?php echo $field_input["unit"] ?>"> <?php echo $field_input["unit"] ?></span>
        </div>
    </div>
</div>