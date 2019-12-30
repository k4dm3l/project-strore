@section('searchform')
<div class="m-5">
    <form class="form-inline">
    <div class="form-group mb-2">
        <label for="staticEmail2" class="sr-only">Product</label>
        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Product Data">
    </div>
    <div class="form-group mx-sm-3 mb-2">
        <label for="inputProductSearch" class="sr-only">Product</label>
        <input type="text" class="form-control" id="inputProductSearch" placeholder="Product">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Search</button>
    </form>
</div>
</br>
@endsection