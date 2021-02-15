<?php


namespace App\Web\Task\Controller;

use App\Http\Controllers\Controller;
use App\Web\Task\Resquets\TaskRequest;
use Domain\Task\Actions\CreateTaskAction;
use Domain\Task\DataTransferObjects\TaskData;
use Domain\Task\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('task.index', compact('tasks'));
    }
    
    public function create()
    {
        return view('task.create');
    }

    public function store(TaskRequest $request, CreateTaskAction $action)
    {
        $data = TaskData::fromRequest($request);
        $response = $action($data);
        return redirect('/')->with(['sucess' => 'Tarefa criada com sucesso']);
    }
}

