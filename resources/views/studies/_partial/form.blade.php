@csrf
<div class="form-group">
    <label for="exampleInputEmail1">descrição</label>
    <input type="text" value="{{ isset($study)? $study->description : '' }}" name="description" class="form-control" id="exampleInputdescrição" placeholder="descrição da study...">
</div>
<div class="form-group">
    <label for="exampleInputColor1">Data inicial</label>
    <input type="date" value="{{ isset($study)? $study->date_init : '' }}" name="date_init" class="form-control" id="exampleInputcolor" placeholder="cor da study...">
</div>
<div class="form-group">
    <label for="exampleInputColor1">Data final</label>
    <input type="date" value="{{ isset($study)? $study->date_finish : '' }}" name="date_finish" class="form-control" id="exampleInputcolor" placeholder="cor da study...">
</div>
<div class="form-group">
    <label for="exampleInputColor1" >Status</label>
    <select name="status" class="form-control">
        <option value="Finalizado">Finalizado</option>
        <option value="Em atraso">Em atraso</option>
        <option value="Em andamento">Em andamento</option>
    </select>
    <!-- <input type="text" value="{{ isset($study)? $study->status : '' }}" name="status" class="form-control" id="exampleInputcolor" placeholder="cor da study..."> -->
</div>
<div class="form-group">
    <label for="exampleInputColor1" >Area</label>
    <select name="area_id" class="form-control">
        @foreach($areas as $area)
            <option value="{{$area->id}}">{{$area->description}}</option>
        @endforeach
    </select>
</div>
<button type="submit" class="btn btn-primary">Enviar</button>