<table class="table table-hover table">
    <thead class="thead-dark">
    <tr>
        @can('update', auth()->user())
            <th scope="col">Выбор</th>
        @endcan
        @can('update', auth()->user())
            <th scope="col">Права</th>
        @endcan
        <th scope="col">Имя</th>
        <th scope="col">Фамилия</th>
        <th scope="col">Отчество</th>
        <th scope="col">Электронная почта</th>
        <th scope="col">Номер телефона</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            @can('update', $user)
                <th scope="col">
                    <a href="{{ route('users.show', $user) }}">Выбрать</a>
                </th>
            @endcan
            @can('update', $user)
                <th scope="col">{{ $user->role }}</th>
            @endcan
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->middle_name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
