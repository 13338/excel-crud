@extends('app')

@section('title', 'Создание сотрудника')

@section('content')
<div class="container">
  <h1>
    Создать сотрудника
  </h1>
  <hr>
  <form action="{{ route('worker.store') }}" method="POST">
    {{ csrf_field() }}
    <label>ФИО</label>
    <div class="form-row">
      <div class="col-sm mb-3">
        <input type="text" class="form-control" name="secondname" placeholder="Имя">
      </div>
      <div class="col mb-3">
        <input type="text" class="form-control" name="firstname" placeholder="Фамилия">
      </div>
      <div class="col-sm mb-3">
        <input type="text" class="form-control" name="middlename" placeholder="Отчество">
      </div>
    </div>
    <div class="form-group">
      <label for="name">Год. рождения</label>
      <input type="text" class="form-control" name="birth_year" style="width: 10rem;">
    </div>

    <div class="form-row">
      <div class="form-group col-sm mb-3">
        <label>Должность</label>
        <input type="text" class="form-control" name="position" placeholder="Должность">
      </div>
      <div class="form-group col-sm mb-3">
        <label>Зп в год.</label>
        <div class="input-group">
          <input type="number" class="form-control" name="salary" min="0" step="1" placeholder="Зп в год.">
          <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2">грн</span>
          </div>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-success mb-3">Создать</button>
  </form>
</div>
@endsection