@csrf
<div class="form-group">
    <label for="exampleInputEmail1">descrição</label>
    <input type="text" value="{{ isset($area)? $area->description : '' }}" name="description" class="form-control" id="exampleInputdescrição" placeholder="descrição da area...">
</div>
<div class="form-group">
    <label for="exampleInputColor1">Cor</label>
    <input type="text" value="{{ isset($area)? $area->color : '' }}" name="color" class="form-control" id="exampleInputcolor" placeholder="cor da area...">
</div>
<button type="submit" class="btn btn-primary">Enviar</button>