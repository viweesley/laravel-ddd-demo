<?php


namespace Domain\Task\DataTransferObjects;

use App\Web\Task\Resquets\TaskRequest;
use Spatie\DataTransferObject\DataTransferObject;

class TaskData extends DataTransferObject
{

    /** @var string */
    public $task;

    /** @var string */
    public $category;


    public static function fromRequest(TaskRequest $taskRequest): TaskData
    {
        return new Self([
            'task' => $taskRequest['task'],
            'category' => $taskRequest['category']
        ]);
    }

}