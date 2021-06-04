@csrf
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="nome" value="{{ $produto->name  ?? old('name') }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="price" placeholder="preço" value="{{ $produto->price  ?? old('price') }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="description" placeholder="descrição" value="{{ $produto->description  ?? old('description') }}">
        </div>
        <div class="form-group">
            <input type="file" class="form-control" name="image">
        </div>
        <div class="form-group">
            <button type="submit" name="enviar" class="btn btn-success">Enviar</button>
        </div>