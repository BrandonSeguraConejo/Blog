@props(['type'=> 'info'])

@php
  switch ($type) {
    case 'info':
      $class = 'flex items-center p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
      break;
    case 'danger':
      $class = 'flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400';
      break;
    case 'success':
      $class = 'flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400';
      break;
    case 'warning':
      $class = 'flex items-center p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300';
      break;
    case 'dark':
      $class = 'flex items-center p-4 text-sm text-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300';
      break;
    
    default:
      $class = 'flex items-center p-4 text-sm text-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300';
      break;
  }
    
@endphp

<div class="{{$class}}" role="alert">
    <span class="font-medium">{{$title ??  'titulo alterno'}}</span> {{$slot}}
</div>