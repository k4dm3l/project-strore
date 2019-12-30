@section('form')
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputProductName">Product Name</label>
      <input type="text" class="form-control" id="inputProductName">
    </div>
    <div class="form-group col-md-6">
      <label for="inputProductRef">Product Reference</label>
      <input type="text" class="form-control" id="inputProductRef">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-8">
        <label for="inputProductPrice">Price</label>
        <input type="text" class="form-control" id="inputProductPrice" placeholder="$0.00">
    </div>
    <div class="form-group col-md-4">
      <label for="inputQty">Qty</label>
      <select id="inputQty" class="form-control">
        <option selected>0</option>
        <option>5</option>
        <option>10</option>
        <option>20</option>
        <option>25</option>
        <option>50</option>
      </select>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Send</button>
</form>
@endsection