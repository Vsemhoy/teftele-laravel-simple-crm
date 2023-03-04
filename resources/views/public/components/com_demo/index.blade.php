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
<div class="uk-container">

  <div class="uk-grid-match uk-child-width-1-2@m uk-child-width-1-3@l" uk-grid>
    <div>
      <div class="uk-card uk-card-default uk-card-body">
        <h3 class="uk-card-title">Card Title</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et mauris quis velit vestibulum pretium vel ac mauris. Ut vel nunc euismod, faucibus nulla a, sollicitudin justo.</p>
      </div>
    </div>
    <div>
      <div class="uk-card uk-card-default uk-card-body">
        <h3 class="uk-card-title">Card Title</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et mauris quis velit vestibulum pretium vel ac mauris. Ut vel nunc euismod, faucibus nulla a, sollicitudin justo.</p>
      </div>
    </div>
    <div>
      <div class="uk-card uk-card-default uk-card-body">
        <h3 class="uk-card-title">Card Title</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et mauris quis velit vestibulum pretium vel ac mauris. Ut vel nunc euismod, faucibus nulla a, sollicitudin justo.</p>
      </div>
    </div>
  </div>
  
</div>
@endsection