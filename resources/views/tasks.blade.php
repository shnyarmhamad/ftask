<form action="/tasks" method="POST">
    @csrf
    <input type="text" name="title" placeholder="کارێکی نوێ..." required>
    <button type="submit">زیادکردن</button>
</form>

<ul>
    @foreach($tasks as $task)
        <li>{{ $task->title }}</li>
    @endforeach
</ul>