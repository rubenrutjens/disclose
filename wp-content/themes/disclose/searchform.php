<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <label>
            <input id="se_search_element_id" 
                type="search" 
                class="search-field" 
                placeholder="<?php echo esc_attr_x( 'Typ om te zoeken', 'placeholder' ); ?>" 
                value="<?php echo get_search_query(); ?>" 
                name="s" 
            />
        </label>
        <button type="submit" class="search-submit"><i class="fas fa-search"></i></button>
        
</form>