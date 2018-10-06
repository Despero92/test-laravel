@section('works')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <h2>Works</h2>
                <nav class="admin_nav">
                    <ul class=" nav-tabs" role="tablist">
                        <li class="active"><a href="#add_category" aria-controls="add_category" role="tab"
                                              data-toggle="tab">Add category</a></li>
                        <li><a href="#categories_list" aria-controls="categories_list" role="tab"
                                              data-toggle="tab">Categories list</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-10">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="add_category">
                        <div class="form-group">
                            {!! Form::open(['route' => 'admin.add_category']) !!}
                            {{ Form::text('category', '', array('id' => 'category', 'placeholder' => 'Category',)) }}
                            {{ Form::text('alias', '', array('id' => 'alias', 'placeholder' => 'Alias',)) }}
                            {{ Form::submit('Add category') }}
                            {{ csrf_field() }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="categories_list">
                        <ul class="categories_list">
                            @foreach($categories as $category)
                                <li>
                                    <section>
                                        <span>{{ $category->category }}</span>
                                        <span>{{ $category->alias }}</span>
                                    </section>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection