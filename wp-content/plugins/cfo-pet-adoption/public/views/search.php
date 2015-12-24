<div id="container-search" class="container-search"><div class="wrap-search-heading"><h1 class="search-heading"></h1></div><div class="wrap-search-preview"><div class="search-preview"></div></div><div class="wrap-search-cta"><h2 class="search-cta"><?php _e("Ready to adopt?", "pet-adoption"); ?> <?php echo get_option('pet_adoption_tel') ?></h2></div><div class="wrap-search"><form action="#!" class="search"><div class="wrap-image"><div class="image"></div></div><div class="wrap-instructions"><h5><?php _e("Instructions", "pet-adoption"); ?></h5><p class="instructions"><?php echo get_option('pet_adoption_search_directions') ?></p></div><div class="wrap-search-fields"><div class="search-fields"><div class="wrap-advanced-options"><div class="advanced-options"><div class="wrap-advanced-options-toggle"><a href="#" class="advanced-options-toggle"><?php _e("Advanced Options", "pet-adoption"); ?></a></div><div class="wrap-advance-options-view"><div class="advanced-options-view"><!--+text-field({label:'Keywords:', name:'keywords', placeholder: 'keywords'})--></div></div></div></div><div class="wrap-input breed"><select name="breed" class="breed"><option value="breed">breed</option><?php $acf_fields = get_pet_adoption_fields();
foreach($acf_fields['breed']['choices'] as $choice): ?><option value="<?php echo $choice ?>"><?php echo $choice ?></option><?php endforeach;
 ?></select></div><div class="wrap-input size"><select name="size" class="size"><option value="size">size</option><?php $acf_fields = get_pet_adoption_fields();
foreach($acf_fields['size']['choices'] as $choice): ?><option value="<?php echo $choice ?>"><?php echo $choice ?></option><?php endforeach;
 ?></select></div><div class="wrap-input sex"><select name="sex" class="sex"><option value="sex">sex</option><?php $acf_fields = get_pet_adoption_fields();
foreach($acf_fields['sex']['choices'] as $choice): ?><option value="<?php echo $choice ?>"><?php echo $choice ?></option><?php endforeach;
 ?></select></div></div></div><div class="wrap-search-submit"><input type="submit" value="Search"></div></form></div><div class="wrap-search-results"><div class="search-results"></div></div></div>