<?php
//use App\Http\Controllers\Template\TemplateController;
// Template switcher view
//$template = new TemplateController();

// this is the global template of component which define styles, scripts and outline
// ahassection('')
?>
@extends('public.templates.main')
<?php // set global template variables ?>

@if (isset($component_meta_title) AND filled($component_meta_title))
    @php
    $meta_title = $component_meta_title;
    @endphp
@else
    @php
        $meta_title = "Component title";
    @endphp
@endif

@if (isset($component_meta_description) AND filled($component_meta_description))
    @php
        $meta_description = $component_meta_description;
    @endphp
@else
    @php
        $meta_description = "Component description";
    @endphp
@endif

@if (isset($component_meta_keywords) AND filled($component_meta_keywords))
    @php
    $meta_keywords = $component_meta_keywords;
    @endphp
@else
    @php
        $meta_keywords = "Component keywords";
    @endphp
@endif


    

@section('page-content')
<div id='component_content'>
    @yield('component-page-content')
</div>
@endsection

@section('component-assets')
    <style>
     .head-act {
  cursor: pointer;
}
header .system-header {
  display: grid;
  background: gray;
  height: 40px;
  width: 100vw;
  position: fixed;
  top: -40px;
  transition: all 0.3s;
  z-index: 999;
  grid-template-columns: 100px auto 300px;
  color: white;
  align-content: center;
}
.head-buttons {
      display: flex;
}
header .system-header-puller {
  display: block;
  position: fixed;
  top: 0px;
  left: 50vw;
  height: 20px;
  width: 60px;
    background: #0000005d;
    z-index: 999;
    border-bottom-left-radius: 12px;
    border-bottom-right-radius: 12px;
    cursor: pointer;
    backdrop-filter: blur(1px);
  transition: all 0.3s;
}
header.dropped-head .system-header {
  top: 0px;
}

header.dropped-head .system-header-puller { 
  top: 40px;
}
  
header .system-header-puller:hover {
  background: #0079b3b5;
      box-shadow: 1px -2px 20px #0085ff;
}
header .system-header-puller:active {
  background: #0099d3b5;
      box-shadow: 1px -2px 10px #0085ff;
}
.shp-icon {
  width: 100%;
  height: 80%;
  margin-top: 3px;
  display: grid;
 justify-items: center;
  
}
.shp-icon > div {
  width: 60%;
  height: 1px;
  background: #ffffff8a;
}


.container {
  margin: 0 auto;
  padding: 0 24px;
  max-width: 1960px;
}

/* primary header */
.dragitem {
  margin-bottom: 1px;
  background: transparent !important;
}
.dragitem > div {
  padding: 6px;
  background: white;
}
.dragitem > div:nth-child(2) {
  //border-left: 1px solid gray;
  margin-left: 1px;
  //box-shadow: 1px 1px 3px black;
}

.col-container {
 // max-width: 1920px;
}
.row-today {
  outline: 3px solid #c9c9c9;
    border-bottom: none !important;
      background: #ffee001c;
}
.row-weekend {
  background: #e3e3e3;
}
.col-item {
  padding: 4px;
  padding-bottom: 16px;
  transition: all ease 0.3s;
}
.col-row {
  transition: all ease 0.3s;
      border-bottom: 1px solid #e7e7e7;
}
.col-row-delimeter {
  grid-template-columns: auto !important;
}
#master-row {
  position: sticky;
    // box-shadow: 1px 0px 78px -30px black;
    // z-index: 99;
  top: 0px;
     border-bottom: 1px solid #c7c7c7;
  backdrop-filter: blur(6px);
  z-index: 9;
}
.content-mid, .dragcard {
  display: grid;
  grid-template-columns: 30px auto;
}
.content-mid-reverse {
    display: grid;
  grid-template-columns: auto 36px;
  justify-items: center;
}
.col-date {
  background-color: #0000000d;
}
.col-que {
  background-color: #ff810017;
}
.col-exec{
  background-color: #00e4ff1f;
}
.col-fin {
  background-color: #00ff8829;
}
.col-paus {
  background-color: #ffe60014;
}
.col-drop {
  background-color: #e70e0012;
}

@media (max-width: 2499px){
  .active-que .col-fin .hide-m, .active-que .col-drop .hide-m {
    display: none;
  }
  .active-exec .col-fin .hide-m, .active-exec .col-drop .hide-m {
    display: none;
  }
  .active-paus .col-que .hide-m, .active-paus .col-drop .hide-m {
    display: none;
  }
  .active-fin .col-que .hide-m, .active-fin .col-exec .hide-m {
    display: none;
  }
  .active-drop .col-que .hide-m, .active-drop .col-exec .hide-m {
    display: none;
  }
}

@media (min-width: 2500px) and (max-width: 4499.98px) {
  .col-row {
    display: grid;
    grid-template-columns: 120px auto 300px 250px 250px 250px;
  }
.col-container.active-que .col-row {
        grid-template-columns: 120px calc(100% - 1720px) 400px 400px 400px 400px;
  }
.col-container.active-exec .col-row {
        grid-template-columns: 120px 400px calc(100% - 1720px) 400px 400px 400px;
  }
  
.col-container.active-paus .col-row {
        grid-template-columns: 120px 
          400px 400px calc(100% - 1720px) 400px 400px;
  }
.col-container.active-fin .col-row {
        grid-template-columns: 120px 
          400px 400px 400px calc(100% - 1720px) 400px;
  }
.col-container.active-drop .col-row {
        grid-template-columns: 120px 
          400px 400px 400px 400px calc(100% - 1720px);
  }
.col-container.active-que .col-que, .col-container.active-exec .col-exec, .col-container.active-paus .col-paus, .col-container.active-fin .col-fin, .col-container.active-drop .col-drop {
    display: grid;
    grid-template-columns: auto auto auto;
    grid-gap: 6px;
    grid-template-rows: min-content;
}
}

@media (min-width: 1600px) and (max-width: 2499.98px) {
  .col-row {
    display: grid;
    grid-template-columns: 120px auto 300px 250px 250px 250px;
  }
.col-container.active-que .col-row {
        grid-template-columns: 120px calc(100% - 1000px) 400px 400px 40px 40px;
  }
.col-container.active-exec .col-row {
        grid-template-columns: 120px 400px calc(100% - 1000px) 400px 40px 40px;
  }
  
.col-container.active-paus .col-row {
        grid-template-columns: 120px 
          40px 400px calc(100% - 1000px) 400px 40px;
  }
.col-container.active-fin .col-row {
        grid-template-columns: 120px 
          40px 40px 400px calc(100% - 1000px) 400px;
  }
.col-container.active-drop .col-row {
        grid-template-columns: 120px 
          40px 40px 400px 400px calc(100% - 1000px);
  }
.col-container.active-que .col-que, .col-container.active-exec .col-exec, .col-container.active-paus .col-paus, .col-container.active-fin .col-fin, .col-container.active-drop .col-drop {
    display: grid;
    grid-template-columns: auto auto auto;
    grid-gap: 6px;
    grid-template-rows: min-content;
}
}

@media (min-width: 992px) and (max-width: 1599.98px) {
  .col-row {
    display: grid;
    grid-template-columns: 120px auto auto auto auto auto;
  }
  .col-container.active-que .col-row {
        grid-template-columns: 120px calc(100% - 640px) 400px 40px 40px 40px;
  }
    .col-container.active-exec .col-row {
        grid-template-columns: 120px 400px calc(100% - 640px) 40px 40px 40px;
  }
  .col-container.active-paus .col-row {
        grid-template-columns: 120px 40px 400px calc(100% - 640px) 40px 40px;
  }
    .col-container.active-fin .col-row {
        grid-template-columns: 120px 40px 40px 400px calc(100% - 640px) 40px;
  }
      .col-container.active-drop .col-row {
        grid-template-columns: 120px 40px 40px 40px 400px calc(100% - 640px) ;
  }
  
   .active-que .col-fin .hide-m, .active-que .col-drop .hide-m , .active-que .col-paus .hide-m {
    display: none !important;
  }
      .active-exec .col-paus .hide-m, .active-exec .col-drop .hide-m , .active-exec .col-fin .hide-m {
    display: none !important;
  }
      .active-paus .col-que .hide-m, .active-paus .col-drop .hide-m , .active-paus .col-fin .hide-m {
    display: none !important;
  }
.active-fin .col-que .hide-m, .active-fin .col-drop .hide-m , .active-fin .col-exec .hide-m {
    display: none !important;
  }
.active-drop .col-que .hide-m, .active-drop .col-exec .hide-m , .active-drop .col-paus .hide-m {
    display: none !important;
  }
  
  .col-container.active-que .col-que, .col-container.active-exec .col-exec, .col-container.active-paus .col-paus, .col-container.active-fin .col-fin, .col-container.active-drop .col-drop {
    display: grid;
    grid-template-columns: auto auto;
    grid-gap: 6px;
    grid-template-rows: min-content;
}
}

@media (max-width: 991.98px) {
  .col-row {
    display: grid;
    grid-template-columns: 120px auto auto auto auto auto;
  }
  .col-date .hide-m {
    display: none;
  }
    .col-container.active-que .col-row {
        grid-template-columns: 50px auto 40px 40px 40px 40px;
  }
}

@media (max-width:599.98px) {
  .col-container {
    width: calc(100% + 120px);
  }
  .col-row {
    display: grid;
    grid-template-columns: 40px 40px calc(100% - 200px) 40px 40px 40px ;
  }
  .col-date .hide-m {
    display: none;
  }
    .col-container.active-que .col-row {
        grid-template-columns: 40px calc(100% - 200px) 40px 40px 40px 40px;
  }
      .col-container.active-exec .col-row {
        grid-template-columns: 40px 40px calc(100% - 200px) 40px 40px 40px;
  }
      .col-container.active-paus .col-row {
        grid-template-columns: 40px 40px 40px calc(100% - 200px) 40px 40px;
  }
      .col-container.active-fin .col-row {
        grid-template-columns: 40px 40px 40px 40px calc(100% - 200px) 40px;
  }
      .col-container.active-drop .col-row {
        grid-template-columns: 40px 40px 40px 40px 40px calc(100% - 200px);
  }
     .active-que .col-fin .hide-m, .active-que .col-drop .hide-m , .active-que .col-paus .hide-m, .active-que .col-exec .hide-m {
    display: none !important;
  }
      .active-exec .col-que .hide-m, .active-exec .col-drop .hide-m, .active-exec .col-fin .hide-m, .active-exec .col-paus .hide-m {
    display: none !important;
  }
      .active-paus .col-que .hide-m, .active-paus .col-drop .hide-m , .active-paus .col-fin .hide-m, .active-paus .col-exec .hide-m {
    display: none !important;
  }
.active-fin .col-que .hide-m, .active-fin .col-paus .hide-m , .active-fin .col-drop .hide-m, .active-fin .col-exec .hide-m {
    display: none !important;
  }
.active-drop .col-que .hide-m, .active-drop .col-fin .hide-m , .active-drop .col-paus .hide-m, .active-drop .col-exec .hide-m {
    display: none !important;
  }
}


  

.ms-actuator {
  display: block;
  position: fixed;
  height: 100vh;
  width: 12px;
  background: #5e5e5e57;
  top: 0px;
  left: 0px;
  transition: all 0.3s;
  
}
.ms-actuator:hover, .com-ms-actuator:hover {
background: #e1f4ff3a;
    box-shadow: -9px 1px 20px #00000033;
    cursor: pointer;
}
.com-ms-actuator {
  display: block;
  position: relative;
  height: 100vh;
  width: 12px;
  background: #5e5e5e17;
  top: 0px;
  right: 0px;
  transition: all 0.3s;
  border: 1px solid #5e5e5e50;
}
.com-ms-main {
    background-color: #ffffff87;
    height: 100vh;
}
.component-side {
  right: 0px;
  width: 300px;
  height: 100vh;
  position: fixed;
backdrop-filter: blur(3px);
  top: 0px;
  transition: all ease 0.4s;
  display: grid;
      grid-template-columns: 12px auto;
}
.component-side.cms-hidden {
  right: -288px;
}
    </style>
@endsection


@section('component-scripts')
<script>
    // com script    
</script>    

@endsection