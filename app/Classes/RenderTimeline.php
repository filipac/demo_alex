<?php
/**
 * Created by PhpStorm.
 * User: filipac
 * Date: 18/07/2017
 * Time: 16:25
 */

namespace App\Classes;


use Illuminate\Database\Eloquent\Collection;

class RenderTimeline
{
    private $events;
    public function __construct(Collection $events)
    {
        $this->events = $events;
    }

    public function render()
    {
        $str = '<ul>';
        foreach($this->events as $event) {
            if($event->what_happened->type == 'task_created') {
                $str .= "<li>S-a creat un nou task cu id-ul {$event->what_happened->task->id}</li>";
            }
        }
        $str .= '</ul>';

        return $str;
    }

}