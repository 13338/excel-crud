@extends('app')

@section('title', 'Карточка сотрудника')

@section('content')
<div class="container">
  <h1 class="text-center">
    {{ $worker->secondname.' '.$worker->firstname.' '.$worker->middlename  }}
  </h1>
  <hr style="width: 18rem;">
  <div class="card mx-auto" style="width: 18rem;">
    <table class="table table-inverse mb-0">
      <tbody>
        <tr>
          <td class="border-top-0">Год. рождения</td>
          <td class="border-top-0">{{ $worker->birth_year }}</td>
        </tr>
        <tr>
          <td>Должность</td>
          <td>{{ $worker->position }}</td>
        </tr>
        <tr>
          <td>Зп в год.</td>
          <td>{{ $worker->salary }}</td>
        </tr>
      </tbody>
    </table>
    <div class="card-body">
      <a href="{{ route('worker.edit', ['worker' => $worker->id]) }}" class="card-link">Редактировать</a>
      <a href="{{ route('worker.destroy', ['worker' => $worker->id]) }}" class="card-link">Удалить</a>
    </div>
  </div>
</div>
@endsection