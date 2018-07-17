<div class="mobiles">
    <div class="container">
        <div class="w3ls_mobiles_grids">
            <div class="col-md-4 w3ls_mobiles_grid_left">
                <div class="w3ls_mobiles_grid_left_grid">
                    <h3>Categories</h3>
                    <div class="w3ls_mobiles_grid_left_grid_sub">
                        <ul class="panel_bottom">
                            @foreach($category as $cat)
                                <li><a href="{{route('category.show',['category' => $cat->slag])}}"> {{$cat->name}}</a></li>
                                @endforeach
                        </ul>
                    </div>
                </div>

            </div>