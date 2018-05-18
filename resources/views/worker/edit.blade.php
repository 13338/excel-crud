@extends('app')

@section('title', 'Редактировать сотрудника')

@section('content')
<div class="container">
  <h1>
    Редактировать сотрудника
  </h1>
  <hr>
  <form action="{{ route('worker.update', ['worker' => $worker->id]) }}" method="POST">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="PUT">
    <label>ФИО</label>
    <div class="form-row">
      <div class="col-sm mb-3">
        <input type="text" class="form-control" name="secondname" placeholder="Фамилия" value="{{ $worker->secondname }}">
      </div>
      <div class="col mb-3">
        <input type="text" class="form-control" name="firstname" placeholder="Имя" value="{{ $worker->firstname }}">
      </div>
      <div class="col-sm mb-3">
        <input type="text" class="form-control" name="middlename" placeholder="Отчество" value="{{ $worker->middlename }}">
      </div>
    </div>
    <div class="form-group">
      <label for="name">Год. рождения</label>
      <input type="text" class="form-control" name="birth_year" style="width: 10rem;" value="{{ $worker->birth_year }}">
    </div>

    <div class="form-row">
      <div class="form-group col-sm mb-3">
        <label>Должность</label>
        <input type="text" class="form-control" name="position" placeholder="Должность" value="{{ $worker->position }}">
      </div>
      <div class="form-group col-sm mb-3">
        <label>Зп в год.</label>
        <input type="text" class="form-control" name="salary" placeholder="Зп в год." value="{{ $worker->salary }}">
      </div>
    </div>
    <button type="submit" class="btn btn-success mb-3">Сохранить</button>
  </form>
</div>
@endsection