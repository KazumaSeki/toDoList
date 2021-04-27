<h1>Todo List</h1>
<div>
  <h2>タスクの修正</h2>
  <form  method="POST" action="/edit" >
    @csrf
    <input type="hidden" name="id" value="{{$todo->id}}">
    <p>
      タスクの名前：<input type="text" name="task_name" value="{{$todo->task_name}}">
    </p>
    <p>
      タスクの詳細：<input type="text" name="task_discription" value="{{$todo->task_discription}}">
    </p>
    <p>
      担当者の名前：<input type="text" name="assign_person_name" value="{{$todo->assign_person_name}}">
    </p>
    <p>
      見積時間(h)：<input type="text" name="estimate_hour" value="{{$todo->estimate_hour}}">
    </p>
    <input type="submit" name="edit" value="編集">
  </form>
  <a href="/">戻る</a>
</div>
