@extends('layout.app', ['current' => 'products']);

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5>products</h5>

                <table style="display: none" class="table table-bordered table-hover" id="product-table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    
                    <tbody>

                    </tbody>
                    
                </table>                            
            <div class="card-footer">
                <button id="btn-show-dlg-products" class="btn btn-sm btn-primary" role="button">Add Product</button>
            </div>
        </div>
    </div>

    <div id="dlg-products" class="modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" class="form-horizontal" id="product-form">
                    <div class="modal-header">
                        <h5 class="modal-title">New Product</h5>
                    </div>
                    
                    <div class="modal-body">
                        <input type="hidden" name="id" id="id" >
    
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select class="form-control" name="category_id" id="category_id">
                                
                            </select>
                          </div>
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input class="form-control" type="text" name="name" id="name" placeholder="Product Name">
                        </div>
                        
                        <div class="form-group">
                            <label for="price">Price</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                </div>
                                <input type="text" class="form-control" id="price" name="price" placeholder="$ Price">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input class="form-control" type="number" name="stock" id="stock" placeholder="Stock">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" id="product-submit" class="btn btn-primary btn-sm">Submit</button>
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" >Cancel</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('javascript')

    <script type="text/javascript">
        var CSRF_TOKEN = "{{ csrf_token() }}";
    </script>

@endsection