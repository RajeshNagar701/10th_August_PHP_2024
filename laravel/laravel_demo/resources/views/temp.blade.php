
<?php
/*

The Blade is a powerful templating engine in a Laravel framework. 

The blade allows to use the templating engine easily, and it makes the syntax writing very simple. 
The blade templating engine provides its own structure such as conditional statements and loops. 
To create a blade template, you just need to create a view file and save it with a .blade.php extension 
instead of .php extension. 

*/
?>

<?php
echo "<h1>hello</h1>";
$name="rajers nagar";

?>

<h1>{{"hello"}}</h1>

{{$name}}

{{10+10}}

<?php
//=========================================
?>

{{-- blade template comment --}}

{{--
    
Blade Conditional Directives

@php @endphp
@if , @elseif ,@else and @endif  
@unless , @endunless // inverse of if / opposite of if 
@isset @endisset  
 
--}}


<?php $name="nagar"?>
@if($name=="Raj")
<h1>Hi my name is {{$name}}</h1>
@elseif($name=="Mahesh")
<h1>Hi my name is {{$name}}</h1>
@else
<h1>Unknown</h1>	
@endif


{{--
    
    Blade Looping Directives

    @for and @endfor
    @while and @endwhile
    @foreach and @endforeach
    @break @continue
        
--}}

@for($i=1;$i<=10;$i++)
    {{$i}}
@endfor

<?php $users=['sam','raj','mahesh'];?>

@foreach($users as $d)
<h4>{{$d}}</h4>
@endforeach



{{--
    Layout Blade Directives

    @include
    @yield directive is used to display the content of a given section
    @section and @endsection   directives define a section of content

    @extends blade directives specify which layout the child view should “inherit”

    @stack  render the complete stack content , pass the name of the stake
    @push and @endpush  is used to push the stack

--}}

@include('welcome')