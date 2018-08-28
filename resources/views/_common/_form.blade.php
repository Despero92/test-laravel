@if(Request::url() === 'http://laravel-test/book')
    <form method="POST" id="form" action="{{ route('message.store') }}">
        <div class="form-group">
            <label for="name">Name: *</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp"
                   placeholder="Name">
        </div>
        <div class="form-group">
            <label for="email">E-mail: *</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"
                   placeholder="Email">
        </div>

        <div class="form-group">
            <label for="message">Сообщение: *</label>
            <textarea class="form-control" rows="5" placeholder="Текст сообщения" name="message" cols="50"
                      id="message"></textarea>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Добавить">
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
    @else
    <form method="GET" id="id-form_messages" action="{{ route('message.update',[ 'id' => $id]) }}">
        <div class="form-group">
            <label for="message">Сообщение: *</label>
            <textarea class="form-control" rows="5" placeholder="Текст сообщения" name="message" cols="50"
                      id="message">{{ $message }}</textarea>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Добавить">
        </div>
    </form>
    @endif