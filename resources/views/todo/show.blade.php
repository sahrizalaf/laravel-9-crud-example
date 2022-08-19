@include('partials.header')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Detail Todo</h1>
	</div>

    <div class="card">
        <div class="card-body">
            <table>
                <tr class="mb-3">
                    <th style="width: 100px">Name</th>
                    <td>{{ $todo->name }}</td>
                </tr>
                <tr class="mb-3">
                    <th style="width: 100px">Description</th>
                    <td>{{ $todo->description }}</td>
                </tr>
                <tr class="mb-3">
                    <th style="width: 100px">Is It Done?</th>
                    <td>{{ $todo->getReadableTodoStatus() }}</td>
                </tr>
                <tr>
                    <th></th>
                    <td class="pt-3">
                        <a class="btn btn-primary btn-sm" href="{{ route('todo.index') }}">Back</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</main>
@include('partials.footer')