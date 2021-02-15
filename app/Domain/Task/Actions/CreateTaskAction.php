<?php


namespace Domain\Task\Actions;

use Domain\Task\DataTransferObjects\TaskData;
use Domain\Task\Models\Task;

final Class CreateTaskAction
{
    public function __invoke(TaskData $taskData): Task
    {
        return Task::create([
            'task' => $taskData->task,
            'category' => $taskData->category,
            'status' => 'incomplete'
        ]);
    }
}

