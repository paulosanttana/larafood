@include('admin.includes.alerts')


<div class="form-group">
    <label for="name">Nome:</label>
    <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{ $plan->name ?? old('name') }}">
</div>
<div class="form-group">
    <label for="prince">Preço:</label>
    <input type="text" name="prince" class="form-control" placeholder="Preço:" value="{{ $plan->prince ?? old('prince') }}">
</div>
<div class="form-group">
    <label for="description">Descrição:</label>
    <input type="text" name="description" class="form-control" placeholder="Descrição:" value="{{ $plan->description ?? old('description') }}">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>