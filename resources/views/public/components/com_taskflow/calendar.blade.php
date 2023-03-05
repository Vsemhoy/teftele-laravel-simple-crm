@extends('public.components.com_taskflow.template')

@php
    $component_meta_title = "Taskflow Main";
    $component_meta_description = "Taskflow Main description";
    $component_meta_keywords = "Taskflow Main keywords";
@endphp

@section('script-definitions')
<script>
    
</script>
@endsection

@section('component-page-content')



<div class="col-container active-exec" id='rowCollection'>
          <div class='col-row' id='master-row'>
            
       <div class='col-item col-date' data-section='t'>
         <div class='uk-text-medium content-mid'><span uk-icon='calendar'></span> <span class='hide-m'>  DEMO</span></div>
            </div>
            
<div class='col-item col-que head-act' tgc='active-que' data-section='q'>
         <div class='uk-text-medium content-mid'><span class='uk-text-bold'>Q</span> <span class='hide-m'>Waiting tasks</span></div>
            </div>
            
<div class='col-item col-exec head-act' tgc='active-exec' data-section='e'>
         <div class='uk-text-medium content-mid'><span class='uk-text-bold'>EX</span> <span class='hide-m'>Eecuted active tasks</span></div>
            </div>
            
<div class='col-item col-paus head-act' tgc='active-paus' data-section='p'>
         <div class='uk-text-medium content-mid'><span class='uk-text-bold'>P</span> <span class='hide-m'>Temporary paused tasks</span></div>
            </div>
            
            <div class='col-item col-fin head-act' tgc='active-fin' data-section='f'>
         <div class='uk-text-medium content-mid'><span class='uk-text-bold'>FN</span> <span class='hide-m'>Finished tasks</span></div>
            </div>
            
            <div class='col-item col-drop head-act' tgc='active-drop' data-section='d'>
         <div class='uk-text-medium content-mid'><span class='uk-text-bold'>D</span> <span class='hide-m'>Dropped tasks</span></div>
            </div>
            
      </div>
      
    
    </div>
   

<div id="tf_modal_task_editor" class="uk-flex-top" uk-modal>
  
  <div class="uk-modal-dialog uk-margin-auto-vertical u-custom-rounds">
    <button class="uk-modal-close-default" type="button" uk-close></button>
        <!-- <div class="uk-modal-header">
            <h2 class="uk-modal-title uk-text-lead">Modal-title</h2>
        </div> -->
        <div uk-overflow-auto>
        <ul class="uk-subnav uk-subnav-pill u-custom-pills-round" uk-switcher>
          <li><a href="#">Task</a></li>
          <li><a href="#">Schedule</a></li>
          <li><a href="#">Steps</a></li>
          <li><a href="#">Parameters</a></li>
        </ul>
        
        <ul class="uk-switcher uk-margin">
          <li>
            <div class="uk-modal-body u-custom-minheight">
            <form>
        <div class='uk-margin'>
          <label class='uk-text'>Name</label>
          <input class="uk-input" type="text">
        </div>
        <div class='uk-margin'>
          <label class='uk-text'>Description</label>
          <textarea class="uk-textarea" rows='7'></textarea>
        </div>
        <div class='uk-margin'>
          <label class='uk-text'>Status</label>
          <select class="uk-select">
            <option value='0'>Waiting</option>
            <option value='1'>Running</option>
            <option value='2'>Paused</option>
            <option value='3'>Finished</option>
            <option value='4'>Removed</option>
            <option></option>
          </select>
        </div>
        <div class='uk-margin'>
          <label class='uk-text'>Board</label>
          <select class="uk-select">
            <option>Board 1</option>
            <option>Board 2</option>
          </select>
        </div>
        <div class='uk-margin'>
          <label class='uk-text'>Category</label>
          <select class="uk-select">
            <option>Cat 1</option>
            <option>cat 2</option>
          </select>
        </div>
        <div class='uk-margin'>
          <label class='uk-text'>Tags</label>
          <input class="uk-input" type="text">
        </div>

        <div class='uk-margin uk-column-1-3'>
          <div>
            <label class='uk-text'>Days <span class='uk-text-muted'>planned</span></label>
            <input class="uk-input" type="number" min='0' max='999'>
          </div>
          <div>
            <label class='uk-text'>Hours <span class='uk-text-muted'>planned</span></label>
            <input class="uk-input" type="number" min='0' max='999'>
          </div>
          <div>
            <label class='uk-text'>Minutes  <span class='uk-text-muted'>planned</span></label>
            <input class="uk-input" type="number" min='0' max='9999'>
          </div>
        </div>
        
        <div class='uk-margin'>
          <label class='uk-text'>Setter</label>
          <select class="uk-select">
            <option></option>
            <option></option>
          </select>
        </div>
        <div class='uk-margin'>
          <textarea class="uk-textarea"></textarea>
        </div>
        <div class='uk-margin'>
          <input class="uk-radio" type="radio">
        </div>
        <div class='uk-margin'>
          <input class="uk-checkbox" type="checkbox">
        </div>
        <div class='uk-margin'>
          <input class="uk-range" type="range">
        </div>
      </form>
    </div>
    </li>
    <li>
      <div class='uk-modal-body u-custom-minheight'>
        shedule
      </div>
    </li>
    <li>
      <div class='uk-modal-body u-custom-minheight uk-padding-small'>
        <div class='uk-margin'>
            <form class='tf-task-form-step'>
              <div class='uk-flex uk-flex-between'>
            <label class='uk-text'>Step 1</label>
            <span class='bi-trash tf-step-remove-trigger'></span>
          </div>
            <div class='tf-task-form-step-body uk-padding-small'>
            <div class='u-custom-input-awake'>
              <textarea class="uk-textarea" rows='7' disabled>Helllow</textarea>
            </div>
              <div class='uk-margin uk-column-1-3'>
            <div class='u-custom-input-awake'>
              <label class='uk-text-small'>Started at <span class='uk-text-muted'></span></label>
              <input class="uk-input" disabled type="datetime-local">
            </div>
            <div class='u-custom-input-awake'>
              <label class='uk-text-small'>Finished at<span class='uk-text-muted'></span></label>
              <input class="uk-input" disabled type="datetime-local" min='0' max='999'>
            </div>
            <div class='u-custom-input-awake'>
              <label class='uk-text-small'>Duration  <span class='uk-text-muted'></span></label>
              <input class="uk-input" disabled type="text" min='0' max='9999'>
            </div>
  </div>
        </div>
      </form>
        </div>

        <div class='uk-margin'>
            <form class='tf-task-form-step'>
            <label class='uk-text'>Step 1</label>
            <div class='tf-task-form-step-body uk-padding-small'>
            <div class='u-custom-input-awake'>
              <textarea class="uk-textarea" rows='7' disabled>Helllow</textarea>
            </div>
              <div class='uk-margin uk-column-1-3'>
            <div class='u-custom-input-awake'>
              <label class='uk-text'>Started at <span class='uk-text-muted'></span></label>
              <input class="uk-input" disabled type="datetime-local">
            </div>
            <div class='u-custom-input-awake'>
              <label class='uk-text'>Finished at<span class='uk-text-muted'></span></label>
              <input class="uk-input" disabled type="datetime-local" min='0' max='999'>
            </div>
            <div class='u-custom-input-awake'>
              <label class='uk-text'>Duration  <span class='uk-text-muted'></span></label>
              <input class="uk-input" disabled type="text" min='0' max='9999'>
            </div>
  </div>
        </div>
      </form>
        </div>


      </div>
    </li>
    <li>
      <div class='uk-modal-body u-custom-minheight'>
        informer
      </div>
    </li>
</ul>

</div>
        <div class="uk-modal-footer uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-primary" type="button">Save</button>
        </div>
    </div>
</div>

@endsection

@section('page-scripts')
<script src="{{ asset('/public/components/com_taskflow/js/taskflow.calendar.js')}}"></script>
<script>

</script>

@endsection