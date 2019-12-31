<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'asc')->get();

        return view('tasks', [
            'tasks' => $tasks
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param TaskRequest $request
     * @return RedirectResponse
     */
    public function store(TaskRequest $request)
    {
        $task = new Task;
        $task->name = $request->name;
        $task->save();

        return redirect()->route('tasks.index')
            ->with('addSuccess', trans('custome.add_success'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        try {
            $task = Task::findOrFail($id);
            $task->delete();

            return redirect()->route('tasks.index')
                ->with('delSuccess', trans('custome.del_success'));
        } catch (ModelNotFoundException $ex) {
            throw new \Exception($ex->getMessage());
        }
    }
}
