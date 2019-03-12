<div class="search-results-container container">
    <h1>Search Results</h1>
    <p class="search-results-count">{{ $products->total() }} result(s) for '{{ request()->input('query') }}'</p>

    @if ($products->total() > 0)
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Details</th>
                <th>Description</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <th><a dataProductModel="{{$product->model}}" dataProductName="{{$product->name}}" dataPosition="{{$product->id}}"    href="{{ route('single-product', $product->slug) }}" onclick="analyticalClick(); return !ga.loaded;">{{ $product->name }}</a></th>
                <td>{{ $product->details }}</td>
                <td>{!! str_limit($product->description, 80) !!}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $products->appends(request()->input())->links() }} @endif
</div>
<!-- end search-results-container -->