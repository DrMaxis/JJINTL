
    
    <li>
        <form class="searchForm" action=" {{ route('search') }} " method="GET">
            <div class="fieldset">
                <label for="query" class="image-replace search">Search Products</label>
                <input type="text" class="has-padding has-border" name="query" id="query" value="{{ request()->input('query') }}"
                    placeholder="Search for products...">
                  <button type="submit" style="display:none;">
                        
                    </button>
            </div>
    
        </form>
    </li>