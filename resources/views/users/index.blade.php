@extends('layouts.app')

@vite(['resources/css/app.css','resources/sass/app.scss', 'resources/js/app.js'])
@section('content')
<div class="tw-flex tw-justify-center">
  <table class="tw-w-4/5">
    <tr>
      <td class="tw-py-10">NOMBRE</td>
      <td class="tw-py-10">TEXTO</td>
      <td class="tw-py-10">FECHA ESCRITO</td>
      <td class="tw-py-10"></td>
      <td class="tw-py-10"></td>
      <td class="tw-py-10"></td>
    </tr>
  </table>
</div>
@endsection