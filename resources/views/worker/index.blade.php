@extends('app')

@section('title', 'Список сотрудников')

@section('content')
<div class="container-fluid">
  <h1>
    Список сотрудников
    <div class="btn-group float-right">
      <a class="btn btn-secondary" href="{{ route('worker.create') }}" role="button">Создать</a>
    </div>
    <div class="btn-group float-right mr-1">
      <a class="btn btn-secondary" href="{{ route('import') }}" role="button">Импорт</a>
      <a class="btn btn-secondary" href="{{ route('export') }}" role="button">Экспорт</a>
    </div>
  </h1>
  @if (count($workers) > 0)
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Фамимлия</th>
        <th scope="col">Имя</th>
        <th scope="col">Отчество</th>
        <th scope="col">Год. рождения</th>
        <th scope="col">Должность</th>
        <th scope="col">Зп в год.</th>
        <th scope="col">Посмотреть</th>
        <th scope="col">Редактировать</th>
        <th scope="col">Удалить</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($workers as $worker)
      <tr>
        <th scope="row">{{ $worker->id }}</th>
        <td>{{ $worker->firstname }}</td>
        <td>{{ $worker->secondname }}</td>
        <td>{{ $worker->middlename }}</td>
        <td>{{ $worker->birth_year }}</td>
        <td>{{ $worker->position }}</td>
        <td>{{ $worker->salary }}</td>
        <td><a href="{{ route('worker.show', ['worker' => $worker->id]) }}">Посмотреть</a></td>
        <td><a href="{{ route('worker.edit', ['worker' => $worker->id]) }}">Редактировать</a></td>
        <td>{{-- <a href="{{ route('worker.destroy', ['worker' => $worker->id]) }}">Удалить</a> --}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
  @else
  <p class="lead">
    No workers :(
  </p>
  @endif
  
  
</div>
@endsection